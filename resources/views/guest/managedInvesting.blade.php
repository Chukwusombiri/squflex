<x-app-layout>
    {{-- hero --}}
    <section class="md:min-h-screen py-9 md:py-24">
        <div class="container mx-auto h-full flex flex-wrap items-center">
            <div class="w-full md:w-1/2 flex flex-col justify-center items-start px-6 md:px-10 mb-10 md:mb-0">
                <h2 data-aos="fade-up"
                    class="text-center md:text-left sedan-regular-bold text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-6">
                    Tailored Investment  <span class="text-teal-600">Management</span>
                </h2>
                <p data-aos="fade-up" class="text-center md:text-left text-md md:text-lg lg:text-2xl mb-6">
                    We’ll craft a smart portfolio to fast-track your financial goals when you choose an investment plan
                </p>
                <div data-aos="fade-up" class="w-full flex justify-center md:justify-start">
                    <x-link-two href="{{ route('pricing') }}" class="py-4">Get Started</x-link-two>
                </div>
            </div>
            <div data-aos="fade-up" class="w-full md:w-1/2 flex justify-center items-center md:px-6">
                <img src="{{ asset('/images/managedInvesting/hero.jpg') }}" alt="Hero Image"
                    class="w-full h-56 md:h-auto md:rounded-xl object-cover">
            </div>
        </div>
    </section>
    {{-- SOLUTIONS --}}
    <section class="py-14 md:py-24 text-primary" id="solutions">
        <div class="container mx-auto px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                Portfolio managment solutions
            </h5>
            <h2 data-aos="fade-up"
                class="sedan-regular-bold text-3xl md:text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0">
                Diversification is the key to <span class="text-teal-600">success</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $solutions = [
                        [
                            'title' => 'Forex Market Investments',
                            'desc' =>
                                'Portfolio includes investments in the Forex market, the largest and most liquid financial market in the world. This allows us to take advantage of currency fluctuations and global economic trends to maximize potential returns.',
                        ],
                        [
                            'title' => 'Cryptocurrency Investments',
                            'desc' =>
                                'Investment portfolio is also diversified into the cryptocurrency market, giving you exposure to digital assets like Bitcoin and Ethereum. This high-growth, fast-evolving sector provides opportunities for substantial returns, despite its volatility.',
                        ],
                        [
                            'title' => 'Stock Market Investments',
                            'desc' =>
                                'We include equities in portfolios by investing in carefully selected stocks with high growth potential. This strategy allows you to benefit from capital appreciation and dividend income over the long term.',
                        ],
                        [
                            'title' => 'Real Estate Investments',
                            'desc' =>
                                'To ensure stability and diversification, portfolio includes real estate investments. These assets, ranging from private properties to commercial real estate, provide a hedge against market volatility and generate long-term value.',
                        ],
                    ];
                @endphp
                @foreach ($solutions as $item)
                    <div
                        class="rounded-lg border border-gray-800 bg-gray-950 p-4 shadow-xs transition hover:shadow-lg sm:p-6">
                        <span class="inline-block rounded-sm bg-teal-600 p-2 text-white">
                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                                height="24" stroke-width="2">
                                <path d="M7 12l5 5l10 -10"></path>
                                <path d="M2 12l5 5m5 -5l5 -5"></path>
                            </svg>
                        </span>

                        <h3 class="mt-0.5 text-lg font-medium text-gray-200">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-400">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- features --}}
    <section class="md:min-h-screen py-9 md:py-24 text-primary" id="features">
        <div class="container mx-auto h-full flex flex-col justify-center px-4 md:px-8">
            <h5 data-aos="fade-up" class="mb-4 md:mb-6 uppercase tracking-wide font-light">
                Portfolio managment features
            </h5>
            <h2 data-aos="fade-up"
                class="sedan-regular-bold text-3xl md:text-3xl lg:text-5xl mb-10 max-w-3xl pr-6 md:pr-0">
                Professionally managed portfolios, <span class="text-teal-600">tailored</span> to you.
            </h2>
            <div class="flex flex-wrap my-12">
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Reliable and diversified</div>
                    </div>
                    <p class="leading-loose">
                        Your funds are invested over numerous asset classes in the market. It is a tried-and-true method
                        for assisting in maximising profits while lowering risk.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Made for modern investors</div>
                    </div>
                    <p class="leading-loose">
                        Gain free access to unique, cutting-edge investment opportunities. Savour user-friendly
                        technology while receiving assistance from people.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Withdraw income any time</div>
                    </div>
                    <p class="leading-loose">
                        Our clients can withdraw the funds whenever they want to do so and through multiple channel
                        including bitcoin, ethereum and many more others.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Supported by experts</div>
                    </div>
                    <p class="leading-loose">Our in-house trading team will customize a portfolio to suit your
                        investment goals. They keep a close eye on market trends and opportunities, so you don’t have
                        to.
                    </p>
                </div>
                <div data-aos="fade-up"
                    class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">24/7 Client support</div>
                    </div>
                    <p class="leading-loose">
                        We are always eager, willing and devoted to solving our clients problems and offering support
                        all along the way.
                    </p>
                </div>
                <div data-aos="fade-up" class="w-full border-b md:w-1/2 md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Data Security</div>
                    </div>
                    <p class="leading-loose">
                        Our systems are protected against any attack 24/7 using next-gen cutting-edge security
                        achitectures and technology which generally security of funds and clients data.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- team --}}
    <section class="md:min-h-screen py-12 md:py-24 bg-primary-white">
        <div class="container mx-auto h-full flex flex-wrap px-6">
            <div data-aos="fade-up" class="w-full lg:w-1/2 mb-7 lg:mb-0 flex justify-center">
                <x-investing-svg class="size-9/12"/>
            </div>
            <div data-aos="fade-up" class="w-full lg:w-1/2 px-6 lg:px-10">
                <div>
                    <h2 class="sedan-regular-bold text-3xl md:text-4xl lg:text-5xl mb-6">
                        Invest with confidence
                    </h2>
                    <div class="mb-6 md:mb-10">
                        <p class="futura-medium text-md md:text-lg lg:text-xl mb-2 md:mb-3">Withstand market highs and
                            lows</p>
                        <p class="text-md md:text-lg lg:text-xl">We don’t try to predict the market. Instead, we invest
                            your money in different assets that perform well at different times. Resiliency is built
                            right in.</p>
                    </div>
                    <div class="mb-6 md:mb-10">
                        <p class="futura-medium text-md md:text-lg lg:text-xl mb-2 md:mb-3">Make the most of your money
                        </p>
                        <p class="text-md md:text-lg lg:text-xl">In the background, we’re taking care of the little
                            things that make a big difference, like asset allocation, rebalancing, and dividend
                            reinvestment.</p>
                    </div>
                    <div class="mb-6 md:mb-10">
                        <p class="futura-medium text-md md:text-lg lg:text-xl mb-2 md:mb-3">Trusted advice, any time
                        </p>
                        <p class="text-md md:text-lg lg:text-xl">Our advisors are here to help at every stage of your
                            money journey — and as fiduciaries, they'll always put your financial best interests first.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- lower fees --}}
    <section class="bg-cover bg-center" style="background-image: url('images/managedInvesting/low-fees.jpg')">
        <div class="pt-16 md:py-24 bg-primary-dark bg-opacity-60 text-primary-lighter">
            <div class="container max-w-xl mx-auto">
                <div data-aos="fade-up" class="px-6 md:px-10 flex flex-col items-center justify-center">
                    <h2 class="text-4xl md:text-6xl futura-medium mb-6 md:mb-10 text-center">
                        Lower fees help you keep more of your returns
                    </h2>
                    <p class="text-md md:text-2xl tracking-wide mb-6 md:mb-10 text-center">
                        You can’t control the market — but you can control the fees you pay.
                    </p>
                    <div class="w-full flex gap-4 flex-wrap justify-center">
                        <x-link-two href="{{ route('user.deposit.pricingTable') }}">Get your portfolio</x-link-two>
                        <x-link-one href="{{ route('pricing') }}"
                            class="bg-primary-lighter border-primary-lighter text-primary-dark hover:bg-primary-light hover:text-primary-dark">View
                            plans</x-link-one>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact team --}}
    <section class="md:min-h-screen py-12 md:py-24 bg-primary-white">
        <div class="container mx-auto px-6 md:px-10">
            <div class="flex flex-col justify-around">
                <div class="w-full flex flex-wrap items-center">
                    <div data-aos="fade-up" class="w-full md:w-1/2 md:px-6 order-2 md:order-1">
                        <x-customer-agents-svg class="size-10/12" />
                    </div>
                    <div data-aos="fade-up" class="w-full md:w-1/2 md:px-6 md:order-2 mb-4 mb-0">
                        <div class="flex flex-col justify-center md:pl-10">
                            <h2 class="sedan-regular-bold text-3xl lg:text-4xl mb-6 md:mb-10">Always here to help</h2>
                            <div class="mb-4">
                                <p class="font-semibold text-base md:text-2xl mb-2">Learn as you go</p>
                                <p class="text-md">Find answers to your investing questions in our help
                                    centre, personal finance magazine, or right in the app.</p>
                            </div>
                            <div class="mb-4">
                                <p class="font-semibold text-base md:text-2xl mb-2">Talk to us any time</p>
                                <p class="text-md">Our support team is available by phone, chat, or email 7
                                    days a week to answer any questions about your account.</p>
                            </div>
                            <div class="mb-4">
                                <p class="font-semibold text-base md:text-2xl mb-2">Speak to an advisor</p>
                                <p class="text-md">Clients have access to a dedicated advisor. They’re here
                                    to answer your money questions, no matter how complex.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- quote --}}
    <section class="md:min-h-screen py-16 lg:py-24 bg-gray-800 text-primary-light">
        <div class="container mx-auto px-4 md:px-10 flex flex-col items-center">
            <div class="w-full flex items-end mb-6">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-quote rotate-180 text-primary-lighter" width="40"
                    height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                    <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                </svg>
                <span class="w-10/12 border-b border-primary-light"><span class="hidden">Horizontal rule</span></span>
            </div>
            <div class="w-full flex flex-col items-center md:px-10">
                <h2 class="sedan-regular-bold text-lg md:text-4xl mb-4 md:mb-8 text-left">
                    The most effective way to reach your financial goals is by investing in diversified, low-cost portfolios tailored to your risk tolerance.
                </h2>
                <h2 class="sedan-regular-bold text-lg md:text-4xl mb-6 md:mb-8 text-left">
                    Our aim is to position you for steady and dependable returns, regardless of market fluctuations.
                </h2>
                <p class="w-full text-md uppercase tracking-widest"><span class="font-semibold">Jack Fraser</span>,
                    CIO (CHIEF INVESTMENT OFFICER)</p>
            </div>
        </div>
    </section>
    {{-- plans --}}
    <section class="md:min-h-screen py-16 lg:py-24 bg-primary-white" id="plans">
        <div class="container mx-auto px-6 md:px-10">
            <h2 data-aos="fade-up" class="sedan-regular-bold text-4xl md:text-6xl max-w-xl mb-8 tracking-wide">
                Investing just got <span class="text-teal-600">easier</span> and safer
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6">
                @foreach ($plans as $plan)
                    @php
                        $bgColor = '';
                        $text = '';
                        switch ($loop->index) {
                            case 0:
                                $bgColor = 'bg-gray-700 hover:bg-gray-800';
                                $text = 'Get started with simple, low-fee investment package';
                                break;
                            case 1:
                                $bgColor = 'bg-slate-700 hover:bg-slate-800';
                                $text = 'Make the most of your investment with low fees and tailored advice';
                                break;
                            case 2:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Build your legacy with expert guidance from your dedicated team of advisors';
                                break;
                            default:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text =
                                    'Always stay ahead of the curve with innovative and state-of-the-art data analysis';
                                break;
                        }
                    @endphp
                    <a data-aos="fade-up" href="{{ route('user.deposit.create', [$plan->id]) }}"
                        class="w-full lg:w-full">
                        <div class="{{ $bgColor }} rounded-xl p-6 mb-6 shadow-lg">
                            <div class="mb-3 md:mb-8">
                                <span class="py-2 futura-book uppercase">${{ number_format($plan->min) }} in
                                    assets</span>
                            </div>
                            <div class="flex items-center mb-3 md:mb-6">
                                <span class="mr-3 sedan-regular-bold text-3xl capitalize">{{ $plan->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" class="w-6 h-6 hover:w-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </div>
                            <div class="flex mb-4 md:mb-6 items-center">
                                <p>{{ $text }}</p>
                            </div>
                            <div class="flex items-end mb-6">
                                <span
                                    class="sedan-regular text-4xl font-bold mr-2">{{ round($plan->perMonInt, 1) }}%</span>
                                <span class="text-xl font-semibold">after {{ $plan->duration }}
                                    day{{ $plan->duration > 1 ? 's' : '' }}</span>
                            </div>
                            <div class="flex items-center mb-4">
                                <span class="sedan-regular text-2xl font-bold">Minimum:
                                    ${{ number_format($plan->min) }}</span>
                            </div>
                            <div class="flex items-center mb-6">
                                <span class="sedan-regular text-2xl font-bold">Maximum:
                                    ${{ number_format($plan->max) }}</span>
                            </div>
                            @if (!empty($plan->features))
                                @php
                                    $features = json_decode($plan->features, true);
                                @endphp
                                @for ($i = 0; $i < min(2, count($features)); $i++)
                                    <div class="flex items-start mb-px md:mb-4">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </span>
                                        <span class="ml-2">{{ $features[$i] }}</span>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    {{-- call to action --}}
    <section class="bg-blue h-[80vh] py-16 md:py-24 px-6 md:px-10">
        <div class="h-full flex flex-col items-center justify-center text-primary-dark">
            <p class="text-4xl md:text-5xl text-center sedan-regular font-semibold max-w-2xl mx-auto mb-2 md:mb-8">
                Let’s make your money make money
            </p>
            <p class="text-md md:text-2xl tracking-wide mb-6 max-w-3xl mx-auto text-center">Thousands trust {{ $appName }} to invest, trade, and build their financial future.</p>
            <div class="w-full flex justify-center">
                <x-link-two class="text-lg md:text-xl px-6 py-6" href="{{ route('user.deposit.pricingTable') }}">Get
                    started</x-link-two>
            </div>
        </div>
    </section>
    {{-- FAQ --}}
    <section class="py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list></x-faq-list>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
