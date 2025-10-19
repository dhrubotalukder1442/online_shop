@extends('layouts.home_layout')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8 mt-10">
    <h2 class="text-2xl font-bold text-center text-indigo-600 mb-6">Select Your Role</h2>

    <form method="POST" action="{{ route('role.redirect') }}">
        @csrf
        <div class="mb-6">
            <label class="block text-gray-700 mb-2 font-semibold">Choose Role:</label>
            <select name="role" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-indigo-500" required>
                <option value="">-- Select Role --</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">
            Continue to Login
        </button>
    </form>
</div>
@endsection
