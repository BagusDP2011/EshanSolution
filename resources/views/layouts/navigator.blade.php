<head>
    <title>CCTV Eshan Solution</title>
    <link rel="icon" href="https://iili.io/2yawYRp.jpg">
</head>
<div>
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div>
                    <a href="/">
                        <!-- <img src="{{ asset('cctv/resources/images/logo.jpg') }}" alt="Logo" class="h-10"> -->
                        <a href="https://freeimage.host/"><img src="https://iili.io/2yawYRp.jpg" alt="Logo" class="h-12 rounded-lg" border="0"></a>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-red-600 font-medium">Home</a>
                    <a href="{{ url('/products') }}" class="text-gray-700 hover:text-red-600 font-medium">Products</a>
                    <a href="{{ url('/aboutus') }}" class="text-gray-700 hover:text-red-600 font-medium">Profil Perusahaan</a>
                    <a href="{{ url('/kontak') }}" class="text-gray-700 hover:text-red-600 font-medium">Kontak Kami</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-700 hover:text-red-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
            <a href="{{ url('/') }}" class="block py-2 px-4 text-gray-700 hover:bg-red-100">Home</a>
            <a href="{{ url('/products') }}" class="block py-2 px-4 text-gray-700 hover:bg-red-100">Products</a>
            <a href="{{ url('/aboutus') }}" class="block py-2 px-4 text-gray-700 hover:bg-red-100">Profil Perusahaan</a>
            <a href="{{ url('/kontak') }}" class="block py-2 px-4 text-gray-700 hover:bg-red-100">Kontak Kami</a>
        </div>

        <!-- JavaScript for Toggle -->
        <script>
            document.getElementById('menu-toggle').addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </nav>
</div>