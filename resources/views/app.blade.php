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
        <h2 class="text-5xl font-bold mb-4">Welcome to Dmiehan</h2>
        <p class="text-xl mb-6">Delicious Noodles, Exciting Franchising Opportunities!</p>
        <button
          class="rounded-full bg-customPurple px-8 py-3 font-semibold text-white hover:bg-purple-800 transition duration-150 ease-in-out">
          Get Started
        </button>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <section class="py-12 bg-white text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-4 text-customPurple">About Dmiehan</h2>
      <p class="text-lg text-gray-600 mb-6">Dmiehan is a spicy noodle brand offering mouth-watering dishes and affordable franchising opportunities. We're dedicated to helping aspiring entrepreneurs start their own businesses.</p>
    </div>
  </section>

  <!-- Products/Services Section -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-4 text-customPurple">Our Products</h2>
      <div class="flex justify-center space-x-4">
        <div class="bg-white shadow-md rounded-lg p-4 max-w-sm">
          <img src="images/noodle.jpg" alt="Noodles" class="w-full h-48 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2">Spicy Noodles</h3>
          <p class="text-gray-600">Enjoy our signature spicy noodles, made with fresh ingredients.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 max-w-sm">
          <img src="images/soup.jpg" alt="Soup" class="w-full h-48 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-2">Hearty Soups</h3>
          <p class="text-gray-600">Warm up with our delicious and filling soup options.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Franchise Information Section -->
  <section class="py-12 bg-white text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-4 text-customPurple">Franchising Opportunities</h2>
      <p class="text-lg text-gray-600 mb-6">Join the Dmiehan family and start your own franchise today. Affordable packages for middle to low-income individuals looking to start their own business.</p>
      <button class="rounded-full bg-customPurple px-8 py-3 font-semibold text-white hover:bg-purple-800 transition duration-150 ease-in-out">
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
          <p class="text-lg text-gray-600 mb-4">"Dmiehan noodles are the best! The perfect blend of spices."</p>
          <p class="font-semibold">- Sarah, Franchisee</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 max-w-sm">
          <p class="text-lg text-gray-600 mb-4">"Starting a franchise with Dmiehan was the best decision I've ever made."</p>
          <p class="font-semibold">- John, Business Owner</p>
        </div>
      </div>
    </div>
  </section>

  @include('partials.footer')

</body>

</html>