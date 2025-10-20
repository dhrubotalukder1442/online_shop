@extends('Layouts.layout1')

@section('title', 'Create Review | Online Shop')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-6 text-center">Create Review</h1>

    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf

        {{-- Choose User Type --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Review As</label>
            <select name="user_type" id="userType" class="border p-2 w-full rounded">
                <option value="registered">Registered User</option>
                <option value="anonymous">Anonymous</option>
            </select>
        </div>

        {{-- Registered Users Dropdown --}}
        <div class="mb-4" id="userSelect">
            <label class="block font-semibold mb-2">Select User</label>
            <select name="user_id" class="border p-2 w-full rounded">
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Product --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Product</label>
            <select name="product_id" class="border p-2 w-full rounded" required>
                <option value="">-- Select Product --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Rating --}}
        <div class="mb-4">
            <label class="block font-semibold mb-2">Rating (1-5)</label>
            <input type="number" name="rating" min="1" max="5" class="border p-2 w-full rounded" required>
        </div>

        {{-- Comment --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">Comment</label>
            <textarea name="comment" rows="4" class="border p-2 w-full rounded"></textarea>
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition">
                Create Review
            </button>
        </div>
    </form>
</div>

{{-- Toggle user select based on review type --}}
<script>
    const userType = document.getElementById('userType');
    const userSelect = document.getElementById('userSelect');

    userType.addEventListener('change', function () {
        if (this.value === 'anonymous') {
            userSelect.classList.add('hidden');
        } else {
            userSelect.classList.remove('hidden');
        }
    });
</script>
@endsection
