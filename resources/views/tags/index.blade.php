@extends('Layouts.layout1')

@section('title', 'Tags | Online Shop')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Tags</h1>
            <a href="{{ route('tags.create') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg shadow-lg transition transform hover:scale-105">
               + Add Tag
            </a>
        </div>

        @php
            $tags = [
                ['name' => 'Electronics', 'color' => 'indigo'],
                ['name' => 'Clothing', 'color' => 'pink'],
                ['name' => 'Books', 'color' => 'green'],
                ['name' => 'Home & Kitchen', 'color' => 'yellow'],
                ['name' => 'Sports', 'color' => 'blue'],
                ['name' => 'Beauty & Health', 'color' => 'purple'],
                ['name' => 'Toys & Kids', 'color' => 'orange'],
                ['name' => 'Furniture', 'color' => 'gray'],
                ['name' => 'Automotive', 'color' => 'red'],
                ['name' => 'Music & Entertainment', 'color' => 'teal'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($tags as $tag)
                <div class="flex flex-col items-center justify-center px-4 py-3 rounded-2xl shadow-lg bg-white
                            hover:shadow-2xl hover:scale-105 transition transform cursor-pointer animate-bounce-slow
                            border-l-4 border-{{ $tag['color'] }}-500">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center bg-{{ $tag['color'] }}-100 mb-3">
                        <span class="text-lg font-bold text-{{ $tag['color'] }}-700">{{ substr($tag['name'],0,1) }}</span>
                    </div>
                    <h2 class="text-center text-lg font-semibold text-gray-800">{{ $tag['name'] }}</h2>
                </div>
            @endforeach
        </div>

        @if(count($tags) === 0)
            <p class="text-gray-500 mt-8 text-center text-lg">No tags found. Add some to organize your products.</p>
        @endif
    </div>
</section>

{{-- Custom animation --}}
<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 2s infinite;
    }
</style>
@endsection
