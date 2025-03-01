@extends('layouts.app')
@include('layouts.navigator')
@section('content')
<div class="max-w-2xl mx-auto mt-16 p-12 bg-white shadow-lg rounded-lg">
    <h2 class="text-3xl font-semibold text-center text-gray-800">Kontak Kami</h2>
    <p class="text-center text-gray-600 mt-2">Silakan hubungi kami melalui formulir di bawah ini atau melalui WhatsApp dan Email.</p>

    <!-- Formulir Kontak -->
    <form action="{{ route('kontak.submit') }}" method="POST" class="mt-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Pesan</label>
            <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300" rows="4" required></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Kirim Pesan</button>
    </form>
</div>

<!-- Tombol WhatsApp & Email -->
<br>
<p class="text-center">Tombol WhatsApp & Email</p>
<div class="flex flex-wrap justify-center gap-6 mt-6 text-black">
    <!-- Tombol WhatsApp -->
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo, saya ingin bertanya."
            class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-black font-bold border-b-4 border-green-700 hover:border-green-500 rounded-lg transition">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            Hubungi via WhatsApp
        </a>
    </button>

    <!-- Tombol Email -->
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        <a href="mailto:info@cctvcompany.com"
            class="flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-black font-bold border-b-4 border-gray-900 hover:border-gray-700 rounded-lg transition">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            Hubungi via Email
        </a>
    </button>
</div>

@endsection