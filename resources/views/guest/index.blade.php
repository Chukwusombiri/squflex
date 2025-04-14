<x-app-layout>
    {{-- Hero CTA and why choose us --}}
    <section class="py-12 md:py-24 text-primary-light">
        <div class="container px-6 md:px-10 mx-auto flex justify-center items-center h-full pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex flex-col justify-center items-start mb-10 md:mb-0" data-aos="fade-left">
                    <h2 class="w-full text-primary-light text-center md:text-left tracking-wider capitalize sedan-regular-bold text-3xl md:text-4xl lg:text-6xl mb-4 md:mb-6">
                        Where Your Money <br class="md:hidden"><span class="text-teal-500">Works</span> for You
                    </h2>
                    <p class="text-primary-light futura-book w-full text-center md:text-left text-md md:text-2xl mb-4 md:mb-6">
                        Your smooth path to real financial growth starts here. Join {{ $appName }} today.
                    </p>
                    <div class="w-full flex items-center justify-center md:justify-start flex-wrap gap-4 md:gap-6">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Start
                            today</x-link-two>
                        <x-link-one href="{{ route('pricing') }}" class="py-4">View plans</x-link-one>
                    </div>
                    <ul role="listbox" class="w-full flex flex-col items-center md:items-start mt-4 lg:mt-7">
                        <li class="flex flex-nowrap gap-2 text-md text-gray-400 mb-2 capitalize">
                            <svg class="text-green-500 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                width="24" height="24" stroke-width="2">
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span>$0 cost portfolio set-up</span>
                        </li>
                        <li class="flex flex-nowrap gap-2 text-md text-gray-400 mb-2 capitalize">
                            <svg class="text-green-500 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                width="24" height="24" stroke-width="2">
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span>24/7 free expert guidance</span>
                        </li>
                        <li class="flex flex-nowrap gap-2 text-md text-gray-400 mb-2 capitalize">
                            <svg class="text-green-500 size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                width="24" height="24" stroke-width="2">
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            <span>100% free daily market tips</span>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center" data-aos="fade-right">
                    <img src="{{ asset('/images/landing/hero.jpg') }}" alt="Hero Image"
                        class="w-full h-auto md:h-full rounded-xl">
                </div>
            </div>
        </div>
        <div class="container px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-10 mt-10 md:mt-16">
            <div class="flex flex-col justify-start pb-4 md:pt-6 md:border-t border-primary-light" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-candle w-12 h-12"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M6 4l0 2" />
                        <path d="M6 11l0 9" />
                        <path d="M10 14m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M12 4l0 10" />
                        <path d="M12 19l0 1" />
                        <path d="M16 5m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M18 4l0 1" />
                        <path d="M18 11l0 9" />
                    </svg>
                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Expert-Driven Trading
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    Professional traders ensure profitable, data-driven trades.
                </p>
            </div>
            <div class="flex flex-col justify-center md:justify-start py-4 md:py-6 border-t border-primary-light"
                data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-presentation-analytics w-12 h-12" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 12v-4" />
                        <path d="M15 12v-2" />
                        <path d="M12 12v-1" />
                        <path d="M3 4h18" />
                        <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                        <path d="M12 16v4" />
                        <path d="M9 20h6" />
                    </svg>
                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Diverse Investment Options
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    Trade forex, crypto, and more with tailored plans.
                </p>
            </div>
            <div class="flex flex-col justify-start py-4 md:py-6 border-t border-primary-light" data-aos="fade-up">
                <div class="w-full flex justify-center md:justify-start mb-4 text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-settings-automation w-12 h-12" width="44" height="44"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                        <path d="M10 9v6l5 -3z" />
                    </svg>
                </div>
                <h4 class="futura-medium text-lg md:text-3xl text-center md:text-left">
                    Smart & simple
                </h4>
                <p class="futura-book text-md md:text-xl mt-2 md:mt-4 text-center md:text-left">
                    Set your financial goals in motion, and let our easy-to-use systems handle the
                    rest.
                </p>
            </div>
        </div>
    </section>
    {{-- how it works --}}
    <section class="py-10">
        <div class="max-w-6xl mx-auto px-6">
            <div class="p-6 md:p-10 bg-transparent border border-gray-500 rounded-2xl">
                <h2 class="text-3xl md:text-4xl font-bold futura-bold tracking-wide mb-2 text-gray-300">
                    How to start
                </h2>
                <p class="text-md text-gray-400 mb-4 futura-medium">
                    Quickly get started following these simple three-step guide.
                </p>
                @php
                    $steps = [
                        [
                            'title' => 'Sign-up a portfolio',
                            'description' => 'Create an account on our platform and verify your email. 100% free.',
                            'step' => '1',
                            'url' => route('register')
                        ],
                        [
                            'title' => 'Choose plan',
                            'description' => 'Navigate to pricing, choose a suitable investment plan.',
                            'step' => '2',
                            'url' => route('pricing')
                        ],
                        [
                            'title' => 'Fund your portfolio',
                            'description' => 'Deposit your capital into your investment portfolio. That\'s it!',
                            'step' => '3',
                            'url' => route('user.deposit.pricingTable')
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-center gap-4">
                    @foreach ($steps as $item)
                        <div
                            class="p-4 border-0 border-b lg:border-0 lg:border-r border-gray-600 last:border-0 flex flex-col gap-2">
                            <span
                                class="rounded-full size-10 bg-teal-800 text-gray-100 flex justify-center items-center font-bold">{{ $item['step'] }}</span>
                            <h4 class="text-gray-300 text-2xl font-semibold-tracking-wide capitalize futura-bold">
                                <a href="{{$item['url']}}" class="hover:underline inline-flex items-center">{{ $item['title'] }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2.5">
                                    <path d="M5 12l14 0"></path>
                                    <path d="M15 16l4 -4"></path>
                                    <path d="M15 8l4 4"></path>
                                  </svg></a></h4>
                            <p class="text-md text-gray-400 break-words">{{ $item['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Features --}}
    <section class="py-16 md:pt-32 pb-0">
        <div class="container mx-auto px-6 md:px-10">
            {{-- Single region --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pb-8 md:pb-16 mb-8">
                <div class="flex flex-col md:justify-center" data-aos="fade-up">
                    <h6 class="text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">portfolio
                        mangement</h6>
                    <h2 class="futura-medium text-3xl md:text-5xl font-medium text-primary-light mb-4">
                        Think of us as your <span class="text-teal-600">financial</span> co-pilot
                    </h2>
                    <p class="text-lg md:text-2xl mb-8">
                        Professionally managed and aligned with your goals, {{ $appName }}’s expert team
                        diversifies your forex and crypto investments to optimize returns while minimizing risk
                    </p>
                    <div class="flex justify-start">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4 font-bold">Let's make
                            your portfolio</x-link-two>
                    </div>
                </div>
                <div class="flex justify-center items-center overflow-hidden" data-aos="fade-up">
                    <div class="w-full md:h-[80vh]">
                        <x-portfolio-svg />
                    </div>
                </div>
            </div>
            {{-- ai featue --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-10 pb-8 md:pb-16 mb-8">
                <div class="md:order-2 flex flex-col md:justify-center" data-aos="fade-up">
                    <h6 class="text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">
                        Artificial Intelligence
                    </h6>
                    <h2 class="futura-medium text-3xl md:text-5xl font-medium text-primary-light mb-4">Not just Outstanding, we are
                        <span class="text-teal-600">Advanced</span>
                    </h2>
                    <p class="text-lg md:text-2xl mb-8">
                        {{ $appName }}’s intelligent trading assistant, SentraMind (Sentra – inspired by “sentry,” symbolizing vigilance and precision), empowers our expert team with unmatched real-time insights. With SentraMind’s sharp market awareness and rapid execution, we stay ahead of every opportunity—ensuring consistently profitable trades far beyond human limitations. 
                    </p>
                    <div class="flex justify-start">
                        <x-link-one href="{{ route('register') }}" class="py-4 font-bold">
                            Sign-up now
                        </x-link-one>
                    </div>
                </div>
                <div class="md:order-1 flex justify-center items-center overflow-hidden" data-aos="fade-up">
                    <div class="w-full md:h-[80vh]">
                        <img src="{{asset('images/landing/ai-trader2.jpg')}}" alt="AI powered trader" class="w-full h-full rounded-2xl">
                    </div>
                </div>
            </div>
            {{-- investment solutions --}}
            <x-investment-solution />
            {{-- Team region --}}
            <div class="mt-8 md:mt-14 mb-6 md:mb-10 grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex justify-center items-center order-2 md:order-1" data-aos="fade-up">
                    <div class="w-full md:h-[80vh]">
                        <x-cia />
                    </div>
                </div>
                <div class="flex flex-col justify-center order-1 md:order-2" data-aos="fade-up">
                    <h2 class="text-4xl font-extrabold sm:text-5xl capitalize text-primary mb-8">
                        We're a text away, <span class="text-teal-600">get in touch</span>
                    </h2>
                    <div class="">
                        <p class="futura-medium text-lg mb-2 font-medium">Chat to an advisor</p>
                        <p class="text-lg mb-6">{{ $appName }}'s clients have access to goal setting and
                            financial planning. Use our livechat to speak to us now.</p>
                        <p class="futura-medium text-lg mb-2 font-medium">Send an email</p>
                        <p class="text-lg mb-6">Have account-related inquiries? Do you have 'get back to you later'
                            type communication? Our team’s here 7 days a week to connect with you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    {{-- About us --}}
    <section class="bg-primary-dark text-primary-light py-16 md:py-24">
        <div class="container mx-auto flex flex-col md:grid md:grid-cols-2 justify-around items-center">
            <div class="flex flex-col justify-center items-center px-6 md:px-10 mb-6 md:mb-0 order-2 md:order-1"
                data-aos="fade-up">
                {{-- invest svg --}}
                <x-invest-svg />
            </div>
            <div class="max-w-xl mx-auto mb-10 md:mb-0 px-6 md:px-10" data-aos="fade-up">
                <h6 class="text-md mb-4 font-light text-primary text-opacity-90 tracking-wider uppercase">Who we ARE</h6>
                <h2 class="sedan-regular-bold tracking-wide text-4xl md:text-5xl mb-6">
                    Smart Investing, <span class="text-teal-600">Strong</span> Returns
                </h2>
                <p class="futura-book text-lg md:text-2xl">
                    At {{ $appName }}, your success is our success. With expert guidance and dedicated support, 
                    we’re here to help you achieve financial growth every step of the way. Together, we deliver trust, 
                    seamless strategies, and outstanding results.
                </p>
                <div class="mt-6 flex items-center justify-start flex-wrap gap-4 md:gap-6">
                    <x-link-two href="{{ route('about') }}" class="py-4">Learn more</x-link-two>
                    {{-- <x-link-one href="{{ route('certificate') }}" class="py-4">View certificate</x-link-one> --}}
                </div>
            </div>
        </div>
        <div
            class="container mt-10 md:mt-16 px-6 md:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 text-primary-light">
            <div class="flex flex-col justify-start items-center py-6 md:border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-teal-600">
                    99.9%
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Client Profitability Rate
                </p>
            </div>
            <div class="flex flex-col justify-start items-center py-6 border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-teal-600">
                    $500M+
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Managed Assets
                </p>
            </div>
            <div class="flex flex-col justify-start items-center py-6 border-t border-primary-light"
                data-aos="fade-up">
                <h4 class="sedan-regular-bold text-5xl md:text-6xl font-bold traccking-wide text-teal-600">
                    10+
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Years of Expertise
                </p>
            </div>
        </div>
    </section>    
    {{-- testimonials --}}
    <x-testimonial-slide :reviews="$reviews"/>
    {{-- market charts --}}
    <section class="py-16 md:py-24 text-primary-light min-h-screen overflow-y-auto">
        <div class="container mx-auto px-6 md:px-10">
            <div class="flex flex-col gap-6 md:gap-10">
                <h2 class="text-4xl md:text-5xl font-extrabold max-w-2xl capitalize"><span
                        class="text-teal-600">real-time</span> Forex and Stock market moves</h2>
                <div class="w-full h-[100vh]">
                    <x-market-chart />
                </div>
            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="bg-primary-light bg-cover" style="background-image: url('images/landing/feature-1.jpg')">
        <div
            class="md:h-screen flex items-center justify-center px-4 md:px-10 mt-6 md:mt-10 py-16 bg-primary-dark bg-opacity-70 text-primary-lighter">
            <div class="max-w-lg mx-auto flex flex-col items-center justify-center text-center">
                <h2
                    class="w-[70%] mx-auto md:w-full text-center sedan-regular text-4xl md:text-6xl text-primary-lighter mb-10">
                    Ready to make your money work
                </h2>
                <p class="w-[70%] mx-auto md:w-full futura-book text-md md:text-2xl mb-10 text-primary-lighter">
                    Create an account today with {{$appName}} and invest some money.
                </p>
                <div class="flex justify-center">
                    <x-link-two href="{{ route('user.deposit.pricingTable') }}" class="py-4">Get started
                        today</x-link-two>
                </div>
            </div>
        </div>
    </section>
    {{-- rewards --}}
    <section class="py-16 md:py-32">
        <div class="container mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 max-w-full sm:max-w-5xl md:max-w-6xl">
                <div class="flex flex-col justify-start text-primary-light" data-aos="fade-up">
                    <h5 class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                        community & rewards
                    </h5>
                    <h2 class="text-4xl md:text-5xl w-full md:w-[90%] mb-4 md:mb-6 font-extrabold">Grow your community
                        and get <span class="text-teal-600">rewarded</span></h2>
                    <p class="text-md md:text-xl mb-4 md:mb-10">
                        When you invite a friend to {{ $appName }}, you will earn 10% of your friend’s
                        initial deposit. Share your referral link
                        with your colleagues and family to earn income without you needing to invest.
                        <a href="{{ route('knowledge') . '#referrals' }}"
                            class="underline ml-px font-bold text-teal-600 hover:text-teal-800">Learn more.</a>
                    </p>
                    <div class="flex">
                        <x-link-two href="{{ route('user.referrals') }}" class="py-4">Get your referral
                            link</x-link-two>
                    </div>
                </div>
                <div class="flex" data-aos="fade-up">
                    {{-- reward svg --}}
                    <x-reward-svg />
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
