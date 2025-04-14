<x-app-layout>
    {{-- hero --}}
    <section class="pt-12 md:pt-24 bg-primary-white">
        <div class="flex flex-col justify-center items-center px-4 md:px-10">
            <h1 class="text-3xl md:text-6xl sedan-regular-bold mb-4 md:mb-10">
                Contact us
            </h1>
            <p class="text-md md:text-2xl text-center max-w-2xl">
                Need help? We’re here for you. Our Client Success team and advisors are here to answer all your
                questions - from transferring an account to making a financial plan.
            </p>
        </div>
    </section>
    {{-- email --}}
    <section class="pt-10 md:pt-16 bg-primary-white">
        <div class="px-4 md:px-10">
            <a href="mailto:{{ config('mail.mainTo.address') }}"
                class="flex flex-col rounded-xl border border-primary-light hover:border-primary-base p-6"
                x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Reach us by email</h2>
                        <p class="text-sm md:text-xl">You can contact us at any time 24/7</p>
                    </div>
                    <div class="w-full md:w-auto flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-white transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>                    
                </div>
            </a>
        </div>
    </section>
    {{-- other channels grid --}}
    <section class="pt-4 pb-16 md:pt-10 bg-primary-white">
        <div class="px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-6">            
            {{-- priority support --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Priority Support</h2>
                        <p class="text-sm md:text-xl">For {{ config('app.name') }} Priority inquiries, please email us at <a
                                href="mailto:{{ config('mail.mainTo.address') }}"
                                class="underline futura-book">{{ config('mail.mainTo.address') }}</a> or chat with our
                            virtual assistant anytime - phone support is not available.</p>
                    </div>
                </div>
            </div>
            {{-- chat with us --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Chat with us</h2>
                        <p class="text-sm md:text-xl">
                            We’re here for you in real-time. Get answers fast from our Virtual Assistant 24/7, or
                            connect with our team during business hours.
                        </p>
                        <ul class="mt-4 pl-6 list-disc space-y">
                            <li class="text-sm md:text-lg"><span class="futura-medium">Monday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Tuesday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Wednesday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Thursday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Friday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Saturday & Sunday: </span>Closed
                            </li>
                        </ul>
                    </div>
                    <div class="mt-14">
                        <ul class="pl-6 list-disc">
                            <li class="text-sm md:text-lg">Business hours may be subject to change on holidays</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- file a complaint --}}
            <div class="">
                <a href="mailto:{{ config('mail.from.address') }}" x-data="{ isHovered: false }"
                    @mouseenter="isHovered = true" @mouseleave="isHovered = false"
                    class="md:min-h-[60vh] w-full flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6 cursor-pointer">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">File a complaint</h2>
                        <p class="text-sm md:text-xl">We’re here for you. If you’re unsatisfied with your experience,
                            learn more about ways to file a complaint</p>
                    </div>
                    <div class="flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-white transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
            {{-- resolving balance --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-primary-light hover:border-primary-white0 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-6">Resolving an outstanding balance</h2>
                        <p class="text-sm md:text-xl">Our Resolutions team is available to support with negative
                            account balances. Ready on on weekdays
                            between 9am - 6pm (UTC), or by email at <a href="mailto:{{ config('mail.from.address') }}"
                                class="futura-medium underline">{{ config('mail.from.address') }}</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
