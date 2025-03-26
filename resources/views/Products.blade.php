@extends('layouts.app')
@include('layouts.navigator')
@section('content')
<div class="container mx-auto p-6">

    <!-- Start of comments -->

    <!-- <h1 class="text-3xl font-semibold text-center mb-6">Produk Kami</h1>
    
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

    <div class="mt-6 flex justify-center">
        {{ $products->links() }}
    </div> -->

    <!-- End of comments -->


    <center>

        <body class="bg-gray-100 flex justify-center items-center min-h-screen">
            <!-- Carousel Partner Resmi -->
            <div class="w-full overflow-hidden bg-blue-50 py-4 mt-6 relative flex items-center">
                <h1 class="font-bold text-5xl">Partner Kami:&nbsp; </h1>
                <div class="w-full overflow-hidden bg-blue-50 py-4">
                    <div class="flex space-x-6 animate-scroll" id="carousel">
                        <img src="{{ asset('images/logo/bosch.png') }}" alt="Bosch" class="h-12">
                        <img src="{{ asset('images/logo/hikvision.png') }}" alt="Hikvision" class="h-12">
                        <img src="{{ asset('images/logo/dahua.png') }}" alt="Dahua" class="h-12">
                        <img src="{{ asset('images/logo/honeywell.png') }}" alt="Honeywell" class="h-12">
                        <img src="{{ asset('images/logo/linell.png') }}" alt="Sunell" class="h-12">
                    </div>
                </div>
            </div>

            <style>
                @keyframes scroll {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
                }

                .animate-scroll {
                    display: flex;
                    width: max-content;
                    animation: scroll 10s linear infinite;
                }

                .w-full.overflow-hidden {
                    white-space: nowrap;
                }
            </style>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const carousel = document.getElementById("carousel");
                    const images = carousel.innerHTML;

                    // Duplicate the images to create a seamless looping effect
                    carousel.innerHTML += images;
                });
            </script>

            <h1 class="text-3xl font-semibold text-center my-6">Produk Kami</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 max-w-4xl">
                <!-- Card 1: CCTV -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-800 text-white text-sm font-bold px-3 py-1 rounded-full">01</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">CCTV</h3>
                    <p class="text-gray-600 text-sm mb-4">Optimalkan perlindungan dengan CCTV berbasis kecerdasan buatan yang mendeteksi ancaman, memberikan notifikasi cerdas, dan menganalisis data secara mendalam.</p>
                    <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan tentang cctv&source=&data=" target="_blank">
                        <img src="{{ asset('images/keahlian/cctv.png') }}" alt="CCTV" class="rounded-lg h-64 w-full">
                    </a>
                </div>

                <!-- Card 2: Electrical dan Panel Builder -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-800 text-white text-sm font-bold px-3 py-1 rounded-full">02</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">ELECTRICAL & PANEL BUILDER</h3>
                    <p class="text-gray-600 text-sm mb-4">Solusi kelistrikan yang andal dan efisien dengan sistem panel listrik yang dirancang untuk memenuhi kebutuhan industri dan komersial. Kami menyediakan layanan perakitan dan instalasi panel listrik dengan standar keamanan tinggi.</p>
                    <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan tentang electrical dan panel builder&source=&data=" target="_blank">
                        <img src="{{ asset('images/keahlian/electricalpanel2.png') }}" alt="Electrical & Panel Builder" class="rounded-lg h-64 w-full">
                    </a>
                </div>

                <!-- Card 3: Building Management -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-800 text-white text-sm font-bold px-3 py-1 rounded-full">03</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">BUILDING MANAGEMENT</h3>
                    <p class="text-gray-600 text-sm mb-4">Manajemen gedung yang cerdas dan terintegrasi untuk memastikan efisiensi energi, keamanan, serta kenyamanan penghuni dengan teknologi modern.</p>
                    <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan tentang building management&source=&data=" target="_blank">
                        <img src="{{ asset('images/keahlian/buildingmanagement.png') }}" alt="Building Management" class="rounded-lg h-64 w-full">
                    </a>
                </div>

                <!-- Card 4: Industrial Electrical Engineering -->
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-800 text-white text-sm font-bold px-3 py-1 rounded-full">04</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">INDUSTRIAL ELECTRICAL ENGINEERING</h3>
                    <p class="text-gray-600 text-sm mb-4">Solusi teknik kelistrikan industri yang inovatif, mendukung otomatisasi, efisiensi energi, dan sistem daya yang handal untuk industri modern.</p>
                    <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan tentang industrial electrical engineering&source=&data=" target="_blank">
                        <img src="{{ asset('images/keahlian/industrialelectrical.png') }}" alt="Industrial Electrical Engineering" class="rounded-lg h-64 w-full">
                    </a>
                </div>
            </div>

        </body>
    </center>

</div>
@endsection