<x-app-layout>
    {{-- Hero --}}
    <section class="relative bg-cover bg-center bg-no-repeat dark:bg-gray-800 md:h-screen"
        style="background-image:url('/images/about/hero2.jpg')">
        <div class="h-full relative mx-auto max-w-screen-xl px-4 py-16 sm:px-10 md:flex md:flex-col justify-center bg-gray-900 bg-opacity-50 backdrop-blur-sm">
                <div class="max-w-xl text-white">
                <h1 class="futura-medium text-2xl md:text-6xl font-semibold tracking-wider" data-aos="fade-up">
                    At {{$appName}}, we help individuals take control of their financial future.
                </h1>

                <p class="mt-2 md:mt-4 max-w-lg sm:text-xl/relaxed uppercase futura-medium" data-aos="fade-up">
                    - Executive, Noah Patel - Chartered Accountant  
                </p>
            </div>
        </div>
    </section>
    {{-- What we do --}}
    <section class="pt-8 pb-12 md:py-24 md:min-h-screen" id="workEthics">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1" data-aos="fade-up">
                    <h2 class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-teal-600">
                        What we do
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 md:text-lg" data-aos="fade-up">
                            We specialize in a wide range of financial services, including cryptocurrency investments, diversified portfolio management, and strategic financial planning. Our personalized approach allows us to understand the unique needs and goals of each client, providing them with the tools and advice needed to navigate their financial journey successfully.
                        </p>
                        <p class="mb-4 md:text-lg" data-aos="fade-up">
                            Our expert financial advisors are at your disposal whenever you need them. In addition to helping you plan your financial goals, they may address any concerns you may have about possible hazards or the best kind of investment accounts.
                        </p>
                        <p class="md:text-lg" data-aos="fade-up">
                            Since our inception, we have had the privilege of helping countless clients achieve their financial aspirations. Whether it's through smart investing products, expert advice, or our cutting-edge investment strategies, we are proud of the positive impact we've made on our clients' lives and the broader financial community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Who we are --}}
    <section class="py-12 md:py-24">
        <div class="flex px-4 md:px-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center">
                <div class="col-span-full md:col-span-1">
                    <h2 data-aos="fade-up" class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-0 p-0 text-teal-600">
                        Who we are
                    </h2>
                </div>
                <div class="col-span-full md:col-span-2">
                    <div data-aos="fade-up" class="w-full md:w-4/5 lg:w-3/4">
                        <p class="mb-4 text-lg">
                            At {{config('app.name')}}, our commitment is to empower individuals and organizations in achieving financial freedom and prosperity. Founded on the principles of integrity, innovation, and personalized service, we are a dynamic team of seasoned professionals dedicated to guiding our clients through the complex world of investments.
                        </p>
                        <p class="mb-4 text-lg">
                            Known as thought leaders in the investment community, our Investment Advisory Committee members are. In addition to acting as a sounding board for the management team at {{config('app.name')}}, they provide advice on investments.
                        </p>
                        <p class="text-lg">
                            Our journey began with a vision to revolutionize the financial industry by offering transparent, accessible, and high-quality investment opportunities. Over the years, we have grown from a small advisory firm into a trusted name in the financial sector, known for our strategic insights and tailored solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Board of directors --}}
    <section class="py-12 md:py-24" id="team">
        <div class="flex flex-col px-6 md:px-10">
            <div data-aos="fade-up" class="w-full flex mb-4 md:mb-10">
                <h2 class="futura-medium text-xl md:text-5xl font-bold">Board of <span class="text-teal-600">Directors</span></h2>
            </div>
            <div data-aos="fade-up" class="w-full grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-x-4 gap-y-6 md:gap-x-6 md:gap-y-10 md:gap-10">
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Noah Patel - Chartered Accountant </h4>
                    <p class="text-sm">Board Director </p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Alison Davis</h4>
                    <p class="text-sm">Board Advisor</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Stanley Druckenmiller</h4>
                    <p class="text-sm">Founder, Duquesne Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Joseph Yong Bum Bae</h4>
                    <p class="text-sm">Founder & CO-CEO, KKR Capital</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Keith Rabois</h4>
                    <p class="text-sm">GP, Founders Fund. Ex-MD, Khosla Ventures</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Daniel Loeb</h4>
                    <p class="text-sm">Founder & CEO, Third Point</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Tracey Brophy Warson</h4>
                    <p class="text-sm">Ex-Chairman, Citi Private Bank</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Daniel Och</h4>
                    <p class="text-sm">Founder, Och-Ziff</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">JDavid McCormick</h4>
                    <p class="text-sm">CEO, Bridgewater Associates</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Andy Stephens</h4>
                    <p class="text-sm">Advisor and Chartered Investment manager</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="futura-medium text-md md:text-3xl md:mb-2">Cassie Paul</h4>
                    <p class="text-sm">Head of Customers service</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Map --}}
    <section class="py-16 md:py-24 bg-primary-white">
        <div class="flex px-4 md:px-10">
            <div class="w-full text-primary">
                <h2 class="futura-medium text-xl md:text-5xl font-extrabold tracking-wider mb-4 md:mb-10 text-teal-600">
                    Our offices
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full order-2 md:order-1">
                        <div class="flex md:mx-6 py-6 border-b border-primary-light">
                            <span class="mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper text-teal-600"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l18 0" />
                                    <path d="M5 21v-14l8 -4v18" />
                                    <path d="M19 21v-10l-6 -4" />
                                    <path d="M9 9l0 .01" />
                                    <path d="M9 12l0 .01" />
                                    <path d="M9 15l0 .01" />
                                    <path d="M9 18l0 .01" />
                                </svg>
                            </span>
                            <span class="flex flex-col max-w-[80%]">
                                <h4 class="text-xl md:text-3xl font-semibold text-primary-light text-wrap">{{config('app.company.address')}}</h4>
                            </span>
                        </div>                        
                    </div>
                    <div class="h-[60vh] md:h-auto w-full max-w-full overflow-x-scroll order-1 md:order-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10282.779205600733!2d-119.51326651737818!3d49.88575776138209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537df4a896d0e173%3A0xc7bad54e323d30a1!2sKelowna%2C%20BC%20V1Y%201P5%2C%20Canada!5e0!3m2!1sen!2sng!4v1744398704129!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Call to action --}}
    <section class="min-h-screen py-16 md:py-24 bg-gray-900 border-b border-primary-light">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-4 md:px-10">
            <div class="flex flex-col">
                <h2 class="text-3xl md:text-6xl sedan-regular font-bold">
                    Start investing smarter in <span class="text-teal-600">5 minutes</span>
                </h2>
            </div>
            <div class="flex flex-col">
                <x-validation-errors class="mb-4" />
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-6 md:mb-8">
                        <x-label for="email" value="{{__('Email Address')}}" class="text-primary-light text-md"/>
                        <x-input placeholder="Enter your email address" id="email" class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="mt-6 md:mb-8">
                        <x-label for="password" value="{{ __('Password') }}"  class="text-primary-light text-md"/>
                        <x-input placeholder="create a secure password" id="password" class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-6 md:mb-8">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"  class="text-primary-light text-md"/>
                        <x-input placeholder="Repeat secure password" id="password_confirmation" class="block mt-1 w-full bg-transparent text-primary-light placeholder:text-gray-400 focus:border-blue-600 py-4" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required class="bg-transparent border-blue-600 checked:bg-gray-700 checked:text-primary-light"/>

                                    <div class="ml-2 text-primary-light">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-md text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-button class="ml-4 px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-lighter">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
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
