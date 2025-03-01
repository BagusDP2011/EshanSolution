@extends('layouts.app')
@include('layouts.navigator')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-center mb-6">Produk Kami</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @if (!$products)
        <p>Produk tidak ada atau gagal menampilkannya</p>
        @endif

        @foreach ($products as $product)
            <div class="bg-white shadow-lg rounded-lg p-4 transition transform hover:scale-105">
                <img src="{{ url( $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-md">
                <h2 class="text-lg font-semibold mt-4">{{ $product->name }}</h2>
                <p class="text-gray-600 text-sm mt-2">{{ $product->description }}</p>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
        {{ $products->links() }}
    </div>
</div>
@endsection