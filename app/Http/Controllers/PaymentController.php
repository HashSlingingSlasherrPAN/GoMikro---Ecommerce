<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        // Midtrans configuration
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;



        $order_id = Str::uuid();
        $gross_amount = $request->price;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $gross_amount,
            ],
            'item_details' => [
                [
                    'id' => 'item1',
                    'price' => $request->price,
                    'quantity' => 1,
                    'name' => $request->item_name,
                ],
            ],
            'customer_details' => [
                'first_name' => $request->customer_first_name,
                'email' => $request->customer_email,
            ],
            'enabled_payments' => ['credit_card', 'bca_va', 'bni_va', 'bri_va', 'qris', 'gopay'],
        ];

        try {
            // Generate SNAP token
            $snapToken = Snap::getSnapToken($params);

            // Save the payment record
            $payment = new Payment();
            $payment->order_id = $order_id;
            $payment->status = 'pending';
            $payment->price = $gross_amount;
            $payment->customer_first_name = $request->customer_first_name;
            $payment->customer_email = $request->customer_email;
            $payment->item_name = $request->item_name;
            $payment->checkout_link = $snapToken;
            $payment->save();

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function webhook(Request $request)
    {
        // Midtrans webhook handling
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed != $request->signature_key) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        $payment = Payment::where('order_id', $request->order_id)->first();
        if (!$payment) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $payment->status = $request->transaction_status;
        $payment->save();

        return response()->json(['message' => 'Payment status updated']);
    }

}
