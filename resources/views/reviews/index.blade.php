@extends('Layouts.layout1')

@section('title', 'Reviews | Online Shop')

@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Reviews</h1>
        <a href="{{ route('reviews.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md transition">
            + Add Review
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-700 uppercase text-sm">
                    {{-- <th class="px-4 py-3 border">ID</th>  REMOVED --}}
                    <th class="px-4 py-3 border">User</th>
                    <th class="px-4 py-3 border">Product</th>
                    <th class="px-4 py-3 border">Rating</th>
                    <th class="px-4 py-3 border">Comment</th>
                    <th class="px-4 py-3 border text-center">Actions</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach($reviews as $review)
                    <tr class="hover:bg-gray-50 transition">
                        {{-- <td class="px-4 py-3 border">{{ $review->id }}</td>  REMOVED --}}
                        <td class="px-4 py-3 border">{{ $review->user->name ?? 'Anonymous' }}</td>
                        <td class="px-4 py-3 border">{{ $review->product->name ?? '-' }}</td>
                        <td class="px-4 py-3 border font-semibold">{{ $review->rating }} ⭐</td>
                        <td class="px-4 py-3 border">{{ $review->comment }}</td>
                        <td class="px-4 py-3 border text-center space-x-2">
                            <a href="{{ route('reviews.edit', $review->id) }}"
                               class="text-blue-600 hover:text-blue-800 font-medium">
                                Edit
                            </a>

                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this review?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:text-red-800 font-medium">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if($reviews->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">
                            No reviews found.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
