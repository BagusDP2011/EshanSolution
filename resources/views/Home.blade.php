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
                <center>
                    <a href="{{ url('/products') }}" class="text-gray-700 hover:text-red-600 font-medium">
                        <button class="mt-4 px-6 py-2 bg-green-500 text-white font-semibold rounded-md">Selengkapnya</button>
                    </a>
                </center>
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
                        <a href="https://api.whatsapp.com/send?phone=+628127784059&text=Halo saya ingin menanyakan sesuatu&source=&data=" target="_blank">
                            <button class="mt-4 px-6 py-2 bg-yellow-500 text-white font-semibold rounded-md">Chat WhatsApp</button>
                        </a>
                    </section>
                </div>
                <div>
                    <img src="{{ asset('images/orgResize.png') }}" alt="Profil Perusahaan" class="w-full h-60 object-cover fade-in fade-in-right">
                </div>
            </div>

            <!-- Grid Kolom -->
            <div class="bg-blue-600 py-12">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <p class="text-white text-lg text-center mb-5 pb-5">Business Focus</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        <!-- Card 1 - Konsultasi -->
                        <div class="bg-white shadow-md p-6 rounded-lg text-center">
                            <center>
                                <div class="text-orange-500 text-4xl mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clip-rule="evenodd" />
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                        <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
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
                            <p><strong>Email:</strong> mochammad.anwar@mtscgroup.com</p>
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