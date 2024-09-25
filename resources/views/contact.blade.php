@include('partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dmiehan - Hubungi Kami</title>
</head>

<body class="bg-gray-100">
    <div class="bg-gray-50 py-12">
        <!-- Contact Section -->
        <section class="container mx-auto px-6 md:px-12 text-center">
            <h1 class="text-4xl font-bold text-customPurple mb-6">Hubungi Kami</h1>
            <p class="text-gray-700 text-lg leading-relaxed mb-12">Kami di sini untuk membantu Anda. Jika Anda memiliki
                pertanyaan atau ingin informasi lebih lanjut, silakan hubungi kami melalui formulir berikut atau
                kunjungi lokasi kami.</p>
        </section>

        <!-- Contact Form -->
        <section class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Formulir Kontak -->
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-customPurple mb-6">Formulir Kontak</h2>
                    <form action="/send-message" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-left text-gray-700">Nama</label>
                            <input type="text" id="name" name="name"
                                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-customPurple focus:border-transparent"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block text-left text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-customPurple focus:border-transparent"
                                required>
                        </div>
                        <div>
                            <label for="message" class="block text-left text-gray-700">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-customPurple focus:border-transparent"
                                required></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-4 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-600 transition duration-150 ease-in-out">Kirim
                                Pesan</button>
                        </div>
                    </form>
                </div>

                <!-- Informasi Kontak -->
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-customPurple mb-6">Informasi Kontak</h2>
                    <p class="text-gray-700 mb-4">Jika Anda ingin menghubungi kami langsung, berikut adalah informasi
                        kontak kami:</p>
                    <p class="text-gray-700">
                        <strong>Email:</strong> info@dmiehan.com<br>
                        <strong>Telepon:</strong> +62 123 456 7890<br>
                        <strong>Alamat:</strong> Jl. Contoh No.123, Jakarta, Indonesia
                    </p>

                    <!-- Google Maps Embed -->
                    <div class="mt-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.923271953018!2d106.82715331593512!3d-6.1753944955459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e6ef5e5a3f%3A0xa2609a34cf056b8!2sMonas%20National%20Monument!5e0!3m2!1sen!2sid!4v1632865452611!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <strong class="font-bold">Sukses!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif


@include('partials.footer')
