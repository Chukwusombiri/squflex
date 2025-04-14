<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-cover bg-center text-primary-lighter"
        style="background-image: url('/images/landing/blog.jpg')">
        <div class="px-6 flex flex-col items-center justify-center py-12 lg:py-24 bg-primary-dark bg-opacity-65">
            <h1 class="max-w-xl text-center sedan-regular-bold text-4xl lg:text-6xl font-bold mb-4">Financial Market News</h1>
            <p class="max-w-2xl text-center text-xl md:text-2xl futura-medium mb-8 md:mb-10">Stay updated with the latest financial market news, including key developments impacting stocks, forex, cryptocurrencies, and other major market movements.</p>            
        </div>
    </section>
    <div class="w-full md:max-w-3xl mx-auto py-16 px-4">
        <h4 class="text-3xl md:text-4xl futura-medium flex gap-4 flex-nowrap"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 12l14 0" />
            <path d="M13 18l6 -6" />
            <path d="M13 6l6 6" />
          </svg>Trending news</h4>
        <livewire:blog-news />
    </div>
</x-app-layout>