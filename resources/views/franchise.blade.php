@include('partials.navbar')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dmiehan</title>
</head>

<body class="bg-gray-100">
    <div class="bg-gray-50 py-12">
        <!-- Franchise Overview -->
        <section class="container mx-auto px-6 md:px-12 text-center">
            <h1 class="text-4xl font-bold text-customPurple mb-6">Kemitraan dengan Dmiehan</h1>
            <p class="text-gray-700 text-lg leading-relaxed">Memberdayakan pengusaha kecil dengan peluang kemitraan yang rendah biaya dan berpotensi tinggi.</p>
            <p class="text-gray-600 mt-4">Bergabunglah dengan keluarga Dmiehan dan jalankan bisnis sukses Anda hari ini.</p>
        </section>

        <!-- Franchise Benefits -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Biaya Awal Rendah</h3>
                    <p class="text-gray-600 mt-4">Investasi yang terjangkau dengan pengembalian yang tinggi, membuatnya aksesibel untuk berbagai pengusaha.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Model Bisnis Terbukti</h3>
                    <p class="text-gray-600 mt-4">Manfaatkan model bisnis yang telah terbukti sukses dengan dukungan operasional penuh.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Dukungan Berkelanjutan</h3>
                    <p class="text-gray-600 mt-4">Kami menawarkan pelatihan berkelanjutan, bantuan pemasaran, dan bimbingan operasional untuk memastikan kesuksesan.</p>
                </div>
            </div>
        </section>

        <!-- Franchise Options -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Pilihan Kemitraan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Franchise 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/franchise_a.jpg" alt="Kemitraan A" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-customPurple">Kemitraan A</h3>
                        <p class="text-lg text-customPurple font-bold mb-4">Rp 50,000,000</p>
                        <h4 class="text-left font-bold text-gray-700">Manfaat:</h4>
                        <ul class="list-disc list-inside text-left text-gray-600 mb-4">
                            <li>Paket alat dan peralatan</li>
                            <li>Stand atau gerobak</li>
                            <li>Bahan baku awal</li>
                            <li>Program pelatihan</li>
                            <li>Dukungan pemasaran</li>
                        </ul>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-600 transition duration-150 ease-in-out">Daftar Kemitraan</a>
                    </div>
                </div>

                <!-- Franchise 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/franchise_b.jpg" alt="Kemitraan B" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-customPurple">Kemitraan B</h3>
                        <p class="text-lg text-customPurple font-bold mb-4">Rp 75,000,000</p>
                        <h4 class="text-left font-bold text-gray-700">Manfaat:</h4>
                        <ul class="list-disc list-inside text-left text-gray-600 mb-4">
                            <li>Paket alat dan peralatan</li>
                            <li>Stand atau gerobak</li>
                            <li>Bahan baku awal</li>
                            <li>Dukungan lokasi</li>
                            <li>Pelatihan staf</li>
                        </ul>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPurple text-white rounded-md shadow hover:bg-purple-600 transition duration-150 ease-in-out">Daftar Kemitraan</a>
                    </div>
                </div>

                <!-- Franchise 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/franchise_c.jpg" alt="Kemitraan C" class="w-full h-48 object-cover">
                    <div class="p-6 bg-customBlue">
                        <h3 class="text-xl font-bold text-white">Kemitraan C</h3>
                        <p class="text-lg text-white font-bold mb-4">Rp 100,000,000</p>
                        <h4 class="text-left font-bold text-white">Manfaat:</h4>
                        <ul class="list-disc list-inside text-left text-white mb-4">
                            <li>Paket alat dan peralatan</li>
                            <li>Stand atau gerobak</li>
                            <li>Bahan baku awal</li>
                            <li>Wilayah eksklusif</li>
                            <li>Pelatihan lanjutan</li>
                        </ul>
                        <a href="#"
                            class="block mt-4 px-8 py-2 bg-customPink text-white rounded-md shadow hover:bg-purple-600 transition duration-150 ease-in-out">Daftar Kemitraan</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Franchise Process -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Cara Bergabung</h2>
            <div class="text-left grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Langkah 1: Pertanyaan</h3>
                    <p class="text-gray-600 mt-4">Isi formulir kami atau hubungi kami untuk mempelajari lebih lanjut tentang peluang kemitraan.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Langkah 2: Tinjauan</h3>
                    <p class="text-gray-600 mt-4">Kami akan meninjau aplikasi Anda dan menghubungi Anda untuk membahas detailnya.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Langkah 3: Wawancara</h3>
                    <p class="text-gray-600 mt-4">Temui kami untuk memastikan kita cocok satu sama lain.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Langkah 4: Persetujuan</h3>
                    <p class="text-gray-600 mt-4">Setelah disetujui, tandatangani perjanjian dan mulai perjalanan Anda bersama Dmiehan.</p>
                </div>
            </div>
        </section>

        <!-- Franchise Success Stories -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Kisah Sukses</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Franchisee 1</h3>
                    <p class="text-gray-600 mt-4">"Berkat model kemitraan Dmiehan, saya dapat memulai bisnis saya dengan risiko rendah. Dukungan yang diberikan luar biasa!"</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-customPurple">Franchisee 2</h3>
                    <p class="text-gray-600 mt-4">"Saya telah menjalankan outlet Dmiehan saya selama setahun sekarang, dan ini adalah pengalaman yang hebat. Dukungan komunitas sangat luar biasa."</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="container mx-auto mt-16 px-6 md:px-12 text-center">
            <h2 class="text-3xl font-semibold text-customPurple mb-6">Siap Bergabung?</h2>
            <p class="text-gray-600 mb-6">Jadilah bagian dari keluarga kemitraan Dmiehan hari ini dan mulailah perjalanan bisnis Anda.</p>
            <a href="#"
                class="inline-block px-8 py-3 bg-customPurple text-white rounded-md shadow hover:bg-purple-600 transition duration-150 ease-in-out">
                Daftar Sekarang
            </a>
        </section>
    </div>
</body>

@include('partials.footer')