@extends('layouts.app')
@include('layouts.navigator')
@section('content')
<div class="container mx-auto px-4 py-12">
    <!-- Profile Perusahaan -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">Tentang Kami</h1>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
            Perusahaan kami didirikan sejak tahun 2017 di Kawasan Perdagangan Bebas Kepulauan Riau, Batam. Kami adalah perusahaan dengan spesialisasi khusus dan tim berpengalaman yang telah bekerja di berbagai perusahaan asing. Tim kami terdiri dari para ahli berpengalaman di berbagai bidang, seperti IT, Elektronika, Listrik, Fabrikasi, Fiber Optik, Solusi Manufaktur, Sistem Keamanan, dan Manajemen Gedung.
        </p>
    </div>

    <!-- Profil Perusahaan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="{{ url('https://www.soocaphoto.com/wp-content/uploads/2022/04/Gedung-perusahaan.jpg') }}" alt="Profile Perusahaan" class="w-full rounded-lg shadow-md">
        </div>
        <div>
            <h2 class="text-3xl font-semibold text-gray-800">Visi & Misi</h2>
            <p class="text-gray-600 mt-4">
                "Menjadi penyedia layanan terbaik dengan mengutamakan kepuasan pelanggan melalui pelayanan cepat, responsif, dan berkualitas."
            </p>
            <h3 class="text-2xl font-semibold mt-6">Misi Kami</h3>
            <ul class="list-disc list-inside text-gray-600 mt-2">
                <li>Menyediakan produk berkualitas tinggi dengan harga kompetitif.</li>
                <li>Memberikan layanan konsultasi dan pemasangan profesional.</li>
                <li>Menyediakan layanan purna jual yang optimal bagi pelanggan.</li>
                <li>Mengembangkan solusi keamanan berbasis teknologi terbaru.</li>
            </ul>
        </div>
    </div>

    <!-- Timeline Perusahaan -->
    <div class="mt-16 flex justify-center">
        <div class="max-w-lg w-full">
            <h2 class="text-3xl font-semibold text-center text-gray-800">Perjalanan Kami</h2>
            <div class="relative border-l-4 border-blue-500 mt-8 mx-auto">
                <div class="ml-6 mb-10">
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-md w-max">2020</div>
                    <p class="text-gray-700 mt-2">Perusahaan didirikan dengan fokus pada solusi keamanan berbasis CCTV.</p>
                </div>
                <div class="ml-6 mb-10">
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-md w-max">2021</div>
                    <p class="text-gray-700 mt-2">Ekspansi layanan pemasangan CCTV ke berbagai kota besar di Indonesia.</p>
                </div>
                <div class="ml-6 mb-10">
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-md w-max">2022</div>
                    <p class="text-gray-700 mt-2">Menjalin kerja sama dengan berbagai instansi dan perusahaan besar.</p>
                </div>
                <div class="ml-6 mb-10">
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-md w-max">2023</div>
                    <p class="text-gray-700 mt-2">Meluncurkan layanan monitoring keamanan berbasis AI.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection