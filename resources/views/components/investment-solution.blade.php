<div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="max-w-3xl">
        <h2 class="text-4xl font-extrabold sm:text-5xl capitalize">Portfolio management solutions</h2>
        <p class="mt-4 text-lg max-w-md mb-2">Our investment solutions spans across numerous financial instruments
            thereby guaranteeing profitable portfolios.</p>
        <a href="{{ route('managedInvesting') }}"
            class="hover:underline text-teal-600 inline-flex items-center flex-nowrap gap-1 text-md tracking-wide futura-medium">
            <span>Learn more</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                <path d="M5 12l14 0"></path>
                <path d="M13 18l6 -6"></path>
                <path d="M13 6l6 6"></path>
            </svg>
        </a>
    </div>
    <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
        @php
            $solutions = [
                [
                    'title' => 'Forex Market Investments',
                    'desc' =>
                        'We offers Forex market investment solutions for investors, providing access to the largest and most liquid financial market in the world.',
                ],
                [
                    'title' => 'Cryptocurrency investments',
                    'desc' =>
                        'We provides cryptocurrency and digital assets investment solutions for investors, helping them to navigate this fast-evolving and highly volatile market.',
                ],
                [
                    'title' => 'Stocks Market Investment',
                    'desc' =>
                        'We invest in equity securities that offer high potential for growth and strong returns over the long term.',
                ],
                [
                    'title' => 'Real Estate Investments',
                    'desc' =>
                        'We invest in alternative assets such as private properties, and real estate to provide diversification and higher returns.',
                ],
            ];
        @endphp
        @foreach ($solutions as $item)
            <div class="flex flex-nowrap">
                <svg class="flex-shrink-0 text-green-500 size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                    stroke-width="2">
                    <path d="M5 12l5 5l10 -10"></path>
                </svg>
                <div class="ml-3 flex-shrink">
                    <h4 class="text-lg font-semibold">{{ $item['title'] }}</h4>
                    <p class="mt-2">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
