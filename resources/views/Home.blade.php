<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <title>PT Eshan Solution</title>
    </head>

    <body>
        {{-- resources/views/home.blade.php --}}
        @if(Auth::check())
        @extends('layouts.app')
        @else
        @include('layouts.navigator')
        @endif


        @section('content')
        <div class="container mx-auto px-4">
            {{-- Hero Section --}}
            <div class="relative w-full h-[400px] flex items-center justify-center rounded-lg text-white bg-no-repeat bg-center bg-cover"
                style="background-image: url('/images/bg/main2.png');">
                <h1 class="text-4xl font-bold bg-black/50 px-4 py-2 rounded-lg">Selamat Datang di Ehsan Solusi</h1>
            </div>



            {{-- Produk & Layanan --}}
            <section class="py-12 mt-10 text-justify">
                <h2 class="text-3xl font-semibold text-center fade-in">Produk & Layanan Kami</h2>
                <p class="text-gray-600 text-center fade-in">Kualitas Terbaik. Harga Bersaing.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-white shadow-md p-4 fade-in">
                        <img src="{{ asset('images/produk/produk1.png') }}" alt="Produk 1" class="w-full h-48 object-cover">
                        <h3 class="mt-2 text-lg font-semibold">Hikvision DS-2CD2143G0-I</h3>
                        <p class="text-gray-500 font-semibold">CCTV Dome 4MP dengan Infrared Canggih</p>
                        <p class="text-gray-500">Lindungi properti Anda dengan <b>Hikvision DS-2CD2143G0-I</b>, kamera dome resolusi 4MP yang dilengkapi dengan <b>EXIR 2.0 Infrared</b> untuk pengawasan jernih hingga <b>30 meter dalam gelap total</b>. Kamera ini memiliki housing anti-vandal dan tahan cuaca <b>IP67</b>, ideal untuk penggunaan dalam dan luar ruangan. Dengan fitur <b>WDR (Wide Dynamic Range) 120dB</b>, kamera ini mampu menangkap gambar dengan kontras tinggi secara detail.</p>
                    </div>
                    <div class="bg-white shadow-md p-4 fade-in">
                        <img src="{{ asset('images/produk/produk2.jpg') }}" alt="Produk 2" class="w-full h-48 object-cover">
                        <h3 class="mt-2 text-lg font-semibold">Dahua IPC-HFW1431S</h3>
                        <p class="text-gray-500 font-semibold">Kamera Bullet 4MP dengan AI Deteksi Gerak</p>
                        <p class="text-gray-500"><b>Dahua IPC-HFW1431S</b> adalah kamera bullet dengan <b>resolusi 4MP</b> yang dilengkapi dengan teknologi AI untuk deteksi gerak manusia dan kendaraan, mengurangi alarm palsu akibat hewan atau cahaya. Dengan Smart IR hingga <b>30 meter</b>, kamera ini memastikan pengawasan tajam meskipun di kondisi minim cahaya. Desainnya yang kokoh dengan rating <b>IP67</b> membuatnya cocok untuk pemasangan di luar ruangan.</p>
                    </div>
                    <div class="bg-white shadow-md p-4 fade-in">
                        <img src="{{ asset('images/produk/produk3.jpg') }}" alt="Produk 3" class="w-full h-48 object-cover">
                        <h3 class="mt-2 text-lg font-semibold">EZVIZ C6N 1080p</h3>
                        <p class="text-gray-500 font-semibold">Kamera Indoor Pintar dengan Auto Tracking</p>
                        <p class="text-gray-500">Jaga keamanan rumah Anda dengan <b>EZVIZ C6N</b>, kamera indoor 1080p yang memiliki fitur <b>Auto Tracking</b>, memungkinkan kamera mengikuti pergerakan orang secara otomatis. Dengan Night Vision inframerah hingga <b>10 meter</b> dan sudut pandang 360°, tidak ada sudut yang terlewat. Kamera ini juga mendukung komunikasi dua arah (Two-Way Audio), memungkinkan Anda berbicara langsung melalui aplikasi EZVIZ.</p>
                    </div>
                </div>
            </section>

            {{-- Profil Perusahaan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 py-12">
                <div>
                    <section class="bg-gray-100 text-center fade-in fade-in-left">
                        <h2 class="text-3xl font-semibold">Profil Perusahaan Kami</h2>
                        <p class="text-gray-600 max-w-2xl mx-auto">
                            Perusahaan kami didirikan sejak tahun 2017 di Kawasan Perdagangan Bebas Kepulauan Riau, Batam. Kami adalah perusahaan dengan spesialisasi khusus dan tim berpengalaman yang telah bekerja di berbagai perusahaan asing. Tim kami terdiri dari para ahli berpengalaman di berbagai bidang, seperti IT, Elektronika, Listrik, Fabrikasi, Fiber Optik, Solusi Manufaktur, Sistem Keamanan, dan Manajemen Gedung.
                        </p>

                        <!-- <p class="text-gray-600 max-w-2xl mx-auto">
                        Didukung oleh tim ahli yang berpengalaman, kami selalu mengikuti perkembangan teknologi keamanan terbaru, termasuk kamera dengan kecerdasan buatan (AI), deteksi gerak pintar, hingga integrasi dengan sistem smart home. Visi kami adalah menghadirkan solusi keamanan yang handal, inovatif, dan mudah diakses oleh semua orang. Dengan layanan yang profesional dan harga yang kompetitif, kami siap menjadi mitra terpercaya dalam menjaga keamanan aset dan lingkungan Anda.</p> -->
                        <button class="mt-4 px-6 py-2 bg-yellow-500 text-white font-semibold rounded-md">Chat WhatsApp</button>
                    </section>
                </div>
                <div>
                    <img src="{{ asset('images/orgResize.png') }}" alt="Profil Perusahaan" class="w-full h-60 object-cover fade-in fade-in-right">
                </div>
            </div>

            <!-- Grid Kolom -->
            <div class="bg-blue-600 py-12 rounded-lg">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <p class="text-white text-4xl text-center font-bold mb-5 pb-5">Business Focus</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        <!-- Card 1 - Konsultasi -->
                        <div class="bg-white shadow-md p-6 rounded-lg text-center">
                            <center>
                                <div class="text-orange-500 text-4xl mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                    </svg>
                                </div>
                            </center>
                            <h3 class="text-xl font-semibold">Electrical and Panel Builder</h3>
                            <p class="text-gray-600 mt-2">
                                Kami merancang, merakit, dan menginstal panel listrik dengan standar tinggi untuk memastikan distribusi daya yang efisien dan aman.
                            </p>
                            <!-- <a href="#beli" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-md text-sm">Chat WhatsApp</a> -->
                        </div>

                        <!-- Card 2 - Order Online -->
                        <div class="bg-white shadow-md p-6 rounded-lg text-center">
                            <center>
                                <div class="text-orange-500 text-4xl mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                                    </svg>
                                </div>
                            </center>
                            <h3 class="text-xl font-semibold">Industrial Electrical Engineering</h3>
                            <p class="text-gray-600 mt-2">
                                Kami menangani sistem kelistrikan industri, termasuk instalasi, pemeliharaan, dan troubleshooting untuk memastikan operasional yang optimal.
                            </p>
                            <!-- <a href="#beli" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-md text-sm">Layanan Kami</a> -->
                        </div>

                        <!-- Card 3 - Kunjungi Kami -->
                        <div class="bg-white shadow-md p-6 rounded-lg text-center">
                            <center>
                                <div class="text-orange-500 text-4xl mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>
                                </div>
                            </center>
                            <h3 class="text-xl font-semibold">Building Management</h3>
                            <p class="text-gray-600 mt-2">
                                Kami menyediakan solusi manajemen gedung yang mencakup sistem kelistrikan, pencahayaan, HVAC, dan keamanan untuk meningkatkan efisiensi dan kenyamanan.
                            </p>
                            <!-- <a href="#beli" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-md text-sm">Lihat Peta</a> -->
                        </div>

                        <!-- Card 4 - Tentang Kami -->
                        <div class="bg-white shadow-md p-6 rounded-lg text-center">
                            <center>
                                <div class="text-orange-500 text-4xl mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </div>
                            </center>
                            <h3 class="text-xl font-semibold">IT & CCTV Security System</h3>
                            <p class="text-gray-600 mt-2">
                                Kami menawarkan pemasangan dan integrasi sistem keamanan berbasis teknologi, termasuk jaringan IT, kontrol akses, dan CCTV untuk perlindungan maksimal.
                            </p>
                            <!-- <a href="/aboutus" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-md text-sm">Profil Perusahaan</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative w-full max-w-lg mx-auto overflow-hidden mt-10">
                <!-- Carousel Wrapper -->
                <div id="carousel" class="flex w-full transition-transform duration-500 ease-in-out">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou1.png') }}" alt="Slide 1">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou2.png') }}" alt="Slide 2">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou3.png') }}" alt="Slide 3">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou4.png') }}" alt="Slide 4">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou5.png') }}" alt="Slide 5">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou6.png') }}" alt="Slide 6">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou7.png') }}" alt="Slide 7">
                    <img class="carousel-item" src="{{ asset('images/carousell/carou8.png') }}" alt="Slide 8">
                </div>

                <!-- Navigation Buttons -->
                <center>
                    <button id="prev" class="carousel-btn left-0">&#10094; Previous</button>
                    <button id="next" class="carousel-btn right-0"> Next &#10095;</button>
                </center>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const carousel = document.getElementById("carousel");
                    const items = document.querySelectorAll(".carousel-item");
                    let index = 0;
                    let interval;

                    const updateCarousel = () => {
                        carousel.style.transform = `translateX(-${index * 100}%)`;
                    };

                    const nextSlide = () => {
                        index = (index + 1) % items.length; // Loops back to 0 after 7
                        updateCarousel();
                    };

                    const prevSlide = () => {
                        index = (index - 1 + items.length) % items.length;
                        updateCarousel();
                    };

                    document.getElementById("next").addEventListener("click", () => {
                        nextSlide();
                        resetAutoSlide();
                    });

                    document.getElementById("prev").addEventListener("click", () => {
                        prevSlide();
                        resetAutoSlide();
                    });

                    const startAutoSlide = () => {
                        interval = setInterval(nextSlide, 3000); // Auto slide every 3 seconds
                    };

                    const resetAutoSlide = () => {
                        clearInterval(interval);
                        startAutoSlide();
                    };

                    startAutoSlide(); // Start auto sliding on load
                });
            </script>

            <!-- Visi -->
            <div class="py-12 text-xl font-semibold text-center pt-10 mt-10 fade-in fade-in-delay">
                <h3>Menjadi penyedia layanan terbaik dengan mengutamakan kepuasan pelanggan melalui </h3>
                <h3>pelayanan cepat, responsif, dan berkualitas.</h3>
            </div>
            {{-- Informasi Kontak --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 py-12">
                <div>

                    <section id=beli class="py-12 text-left bg-blue-600 text-white rounded-lg px-10">
                        <h2 class="text-3xl font-semibold">Konsultasi dan Pemesanan</h2>
                        <p>Silahkan hubungi kami melalui telepon dan whatsapp!</p>
                        <div class="mt-4">
                            <p><strong>Alamat:</strong> Bina umah, Kibing, Batu Aji, Batam City, Riau Islands 29424</p>
                            <p><strong>WhatsApp:</strong> +62 812-7784-059</p>
                            <p><strong>Email:</strong> anwar@mtscgroup.com</p>
                        </div>
                        <button class="mt-4 px-6 py-2 bg-blue-800 text-white font-semibold rounded-md">Hubungi kami</button>
                    </section>
                </div>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2877251134992!2d103.98208229069836!3d1.048013064746632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98d2761bd81af%3A0xfd71e5be50bc2f14!2sPT%20Eshan%20Elekon%20Solusi!5e0!3m2!1sen!2sid!4v1739707381830!5m2!1sen!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


            {{-- Footer --}}
            <footer class="py-6 bg-gray-800 text-white text-center rounded-lg">
                <p>&copy; 2025 Ehsan Solusi. All Rights Reserved.</p>
            </footer>
        </div>
        <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan tentang cctv&source=&data=" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp" aria-hidden="true"></i></a>
        @endsection

    </body>

    </html>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let elements = document.querySelectorAll(".fade-in, .fade-in-left, .fade-in-right");

        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, {
            threshold: 0.3
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>