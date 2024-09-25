@include('partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dmiehan - Produk</title>
</head>

<body class="bg-gray-100">
    <div class="bg-gray-50 py-12">
        <!-- Product Overview -->
        <section class="container mx-auto px-6 md:px-12 text-center">
            <h1 class="text-4xl font-bold text-customPurple mb-6">Produk Kami</h1>
            <p class="text-gray-700 text-lg leading-relaxed">Dmiehan menyediakan berbagai produk mi dengan rasa yang
                nikmat dan harga terjangkau. Jelajahi pilihan produk kami yang dapat menjadi favorit keluarga Anda!</p>
        </section>

        <!-- Product List -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/product_1.jpg" alt="Produk 1" class="w-full h-48 object-cover">
                    <div class="p-6 bg-customBlue">
                        <h3 class="text-xl font-bold text-white">Mi Goreng Pedas</h3>
                        <p class="text-lg text-white font-bold mb-4">Rp 15,000</p>
                        <p class="text-white mb-4">Mi goreng dengan rasa pedas yang menggugah selera, cocok untuk
                            penggemar makanan pedas.</p>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-800 transition duration-150 ease-in-out">Pesan
                            Sekarang</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/product_2.jpg" alt="Produk 2" class="w-full h-48 object-cover">
                    <div class="p-6 bg-customBlue">
                        <h3 class="text-xl font-bold text-white">Mi Kuah Ayam</h3>
                        <p class="text-lg text-white font-bold mb-4">Rp 20,000</p>
                        <p class="text-white mb-4">Nikmati kelezatan mi kuah dengan kaldu ayam yang gurih dan lezat.</p>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-800 transition duration-150 ease-in-out">Pesan
                            Sekarang</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/product_3.jpg" alt="Produk 3" class="w-full h-48 object-cover">
                    <div class="p-6 bg-customBlue">
                        <h3 class="text-xl font-bold text-white">Mi Goreng Sapi</h3>
                        <p class="text-lg text-white font-bold mb-4">Rp 25,000</p>
                        <p class="text-white mb-4">Mi goreng dengan daging sapi empuk dan rasa yang nikmat.</p>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-800 transition duration-150 ease-in-out">Pesan
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Tertarik Memesan?</h2>
            <p class="text-gray-600 mb-6">Segera pesan produk Dmiehan favorit Anda dan nikmati kenikmatan mi kami!</p>
            <a href="#"
                class="inline-block px-8 py-3 bg-customPurple text-white rounded-md shadow hover:bg-purple-800 transition duration-150 ease-in-out">
                Pesan Sekarang
            </a>
        </section>
    </div>
</body>

@include('partials.footer')
