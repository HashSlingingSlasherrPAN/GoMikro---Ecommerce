<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
     // Menampilkan semua pembayaran
     public function index()
     {
         $payments = Payment::all(); // Ambil semua pembayaran
         return view('admin.payments.index', compact('payments'));
     }
 
     // Mengupdate status pembayaran
     public function updateStatus(Request $request, $id)
     {
         $request->validate([
             'status' => 'required|string',
         ]);
 
         $payment = Payment::findOrFail($id);
         $payment->update(['status' => $request->status]);
 
         return redirect()->route('admin.payments.index')->with('success', 'Status pembayaran berhasil diubah.');
     }
}
