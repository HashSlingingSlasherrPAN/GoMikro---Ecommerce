<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="bg-white text-black rounded-full py-2 px-4 w-[160px] text-center hover:bg-gray-200 transition duration-300">
        Logout
    </button>
</form>
