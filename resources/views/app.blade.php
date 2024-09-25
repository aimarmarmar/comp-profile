@include('partials.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dmiehan</title>
</head>

<body class="bg-gray-100">

    <!-- Hero Section (Jumbotron) -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('images/bg.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex h-full items-center justify-center text-center text-white">
            <div>
                <h2 class="text-5xl font-bold mb-4">Welcome to D'emiehan</h2>
                <p class="text-xl mb-6">Delicious Noodles, Exciting Franchising Opportunities!</p>
                <button
                    class="rounded-full bg-customPurple px-8 py-3 font-semibold text-white hover:bg-purple-800 transition duration-150 ease-in-out"
                    onclick="location.href='#about'">
                    Get Started
                </button>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-12 bg-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-customPurple">About Dmiehan</h2>
            <p class="text-lg text-gray-600 mb-6">Dmiehan is a spicy noodle brand offering mouth-watering dishes and
                affordable franchising opportunities. We're dedicated to helping aspiring entrepreneurs start their own
                businesses.</p>
        </div>
    </section>

    <!-- Products/Services Section -->
    <section class="py-12 bg-gray-100" x-data="{ currentIndex: 0, products: ['noodle', 'soup', 'salad', 'burger', 'pizza', 'aimar'], visibleProducts: 3 }">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4 text-customPurple">Our Products</h2>

            <!-- Slider Container -->
            <div class="relative flex flex-col items-center">
                <!-- Grid for Products, adjusted with Flexbox to center -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-center">

                    <!-- Products -->
                    <template x-for="(product, index) in products.slice(currentIndex, currentIndex + visibleProducts)"
                        :key="index">
                        <div
                            class="bg-white shadow-md rounded-lg p-4 max-w-sm transition-opacity duration-500 ease-in-out">
                            <img :src="`images/${product}.jpg`" :alt="product"
                                class="w-full h-60 object-cover rounded-lg mb-4">
                            <h3 class="text-xl font-semibold mb-2" x-text="getProductName(product)"></h3>
                            <p class="text-gray-600" x-text="getProductDescription(product)"></p>
                        </div>
                    </template>

                </div>

                <!-- Previous and Next Buttons -->
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <button @click="currentIndex = (currentIndex - visibleProducts + products.length) % products.length"
                        class="bg-customPurple text-white rounded-full w-8 h-8 flex items-center justify-center shadow-lg focus:outline-none">
                        &lt;
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <button @click="currentIndex = (currentIndex + visibleProducts) % products.length"
                        class="bg-customPurple text-white rounded-full w-8 h-8 flex items-center justify-center shadow-lg focus:outline-none">
                        &gt;
                    </button>
                </div>
            </div>

            <!-- Pagination Bulat -->
            <div class="flex justify-center space-x-2 mt-6">
                <template x-for="(product, pageIndex) in Math.ceil(products.length / visibleProducts)"
                    :key="pageIndex">
                    <button @click="currentIndex = pageIndex * visibleProducts"
                        :class="currentIndex / visibleProducts === pageIndex ? 'bg-customPurple' : 'bg-gray-300'"
                        class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                </template>
            </div>

            <!-- Lihat Semua Menu Button -->
            <div class="mt-6">
                <a href="/product"
                    class="inline-block px-6 py-2 bg-customPurple text-white font-bold rounded-md hover:bg-purple-600 transition-colors duration-300">
                    Lihat Semua Menu
                </a>
            </div>
        </div>
    </section>

    <script>
        function getProductName(product) {
            switch (product) {
                case 'noodle':
                    return 'Spicy Noodles';
                case 'soup':
                    return 'Hearty Soups';
                case 'salad':
                    return 'Fresh Salad';
                case 'burger':
                    return 'Juicy Burger';
                case 'pizza':
                    return 'Cheesy Pizza';
                case 'aimar':
                    return 'Aimar';
                default:
                    return 'Unknown Product';
            }
        }

        function getProductDescription(product) {
            switch (product) {
                case 'noodle':
                    return 'Enjoy our signature spicy noodles, made with fresh ingredients.';
                case 'soup':
                    return 'Warm up with our delicious and filling soup options.';
                case 'salad':
                    return 'Crisp and refreshing salad to brighten up your meal.';
                case 'burger':
                    return 'Satisfy your hunger with our mouth-watering burger.';
                case 'pizza':
                    return 'Delicious cheesy pizza for a perfect treat.';
                case 'aimar':
                    return 'Aimar kocak';
                default:
                    return 'No description available.';
            }
        }
    </script>

    <!-- Franchise Information Section -->
    <section class="py-12 bg-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-customPurple">Franchising Opportunities</h2>
            <p class="text-lg text-gray-600 mb-6">Join the Dmiehan family and start your own franchise today. Affordable
                packages for middle to low-income individuals looking to start their own business.</p>
            <button
                class="rounded-full bg-customPurple px-8 py-3 font-semibold text-white hover:bg-purple-800 transition duration-150 ease-in-out"
                onclick="window.location.href='{{ url('/franchise') }}'">
                Learn More
            </button>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-4 text-customPurple">What Our Customers Say</h2>
            <div class="flex justify-center space-x-4">
                <div class="bg-white shadow-md rounded-lg p-6 max-w-sm">
                    <p class="text-lg text-gray-600 mb-4">"Dmiehan noodles are the best! The perfect blend of spices."
                    </p>
                    <p class="font-semibold">- Sarah, Franchisee</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 max-w-sm">
                    <p class="text-lg text-gray-600 mb-4">"Starting a franchise with Dmiehan was the best decision I've
                        ever made."</p>
                    <p class="font-semibold">- John, Business Owner</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

</body>

</html>
