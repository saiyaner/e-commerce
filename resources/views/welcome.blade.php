<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    @livewireStyles
  </head>
  <body>
    @livewire('navbar')

    {{-- Hero section --}}
    <section class="relative w-full h-auto">
        <img src="image/hero.png" alt="Hero section banner showcasing an e-commerce storefront with product displays and a welcoming environment designed to encourage customer engagement" class="w-full h-auto">
        <div class="absolute top-1/2 right-8 md:right-16 -translate-y-1/2 bg-[#FFF3E3] p-8 md:p-12 rounded-lg max-w-md">
            <p class="text-gray-700 text-sm font-semibold mb-2">New Arrival</p>
            <h2 class="text-[#B88E2F] text-3xl md:text-5xl font-bold mb-4 leading-tight">Discover Our<br>New Collection</h2>
            <p class="text-gray-600 text-sm md:text-base mb-6 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
            <a href="#" class="inline-block bg-[#B88E2F] text-white px-12 py-4 text-sm font-bold hover:bg-[#9a7728] transition duration-200 uppercase">Buy Now</a>
        </div>
    </section>

    {{-- Browser --}}
    <section class="py-10">
        <h2 class="font-bold text-4xl text-center">Browse The Range</h2>
        <p class="text-center pt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="flex flex-wrap justify-center gap-5 mt-8 px-4">
          <div>
            <img src="image/dining.png" alt="Dining Room" class="hover:scale-105 transition duration-300 cursor-pointer md:w-10 lg:w-80 rounded-2xl">
            <p class="text-center font-bold text-2xl pt-5">Dining</p>
          </div>
          <div>
            <img src="image/dining.png" alt="Dining Room" class="hover:scale-105 transition duration-300 cursor-pointer md:w-10 lg:w-80 rounded-2xl">
            <p class="text-center font-bold text-2xl pt-5">Living</p>
          </div>
          <div>
            <img src="image/dining.png" alt="Dining Room" class="hover:scale-105 transition duration-300 cursor-pointer md:w-10 lg:w-80 rounded-2xl">
            <p class="text-center font-bold text-2xl pt-5">Bedroom</p>
          </div>
        </div>
    </section>

    @livewire('product')

    @livewireScripts
  </body>
</html>