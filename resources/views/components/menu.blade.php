<div x-data="{ open: false }" class="futura-medium bg-primary-dark shadow w-full z-30 relative" id="menu">
    <div class="h-16 lg:h-20 flex flex-nowrap justify-center px-4 items-center">
        <div class="w-full max-w-8xl mx-auto flex items-center justify-between flex-nowrap">
            <div class="flex">
                <a href="{{ route('guestHome') }}">
                    <x-application-logo class="block h-9 w-auto" />
                </a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-dropdown>
                    <x-slot name="trigger">
                        <x-nav-link href="javascript:void()" :active="request()->routeIs('managedInvesting')" class="">
                            {{ __('Investment') }}
                        </x-nav-link>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-content action="{{ route('managedInvesting') }}">
                            <x-slot name="title">Investing with {{ config('app.name') }}</x-slot>
                            <x-slot name="description">Let's build your custom portfolio that meant for long-term
                                growth. Plus get expert
                                advice whenever
                                you need.</x-slot>
                            <x-slot name="listTitle">Portfolio</x-slot>
                            <x-slot name="listItems">
                                <li class="py-3"><x-link-list-item href="{{ route('managedInvesting') }}">Portfolio
                                        Management</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item
                                        href="{{ route('managedInvesting') . '#plans' }}">Investment
                                        plans</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item
                                        href="{{ route('managedInvesting') . '#features' }}">Portfolio mangement
                                        features</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item
                                        href="{{ route('managedInvesting') . '#faqs' }}">Portfolio management
                                        FAQs</x-link-list-item></li>
                            </x-slot>
                        </x-dropdown-content>
                    </x-slot>
                </x-nav-dropdown>
                <x-nav-link href="{{ route('pricing') }}" :active="request()->routeIs('pricing')">
                    {{ __('Pricing') }}
                </x-nav-link>
                <x-nav-dropdown>
                    <x-slot name="trigger">
                        <x-nav-link href="javascript:void()" :active="request()->routeIs('about')" class="">
                            {{ __('Company') }}
                        </x-nav-link>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-content action="{{ route('about') }}">
                            <x-slot name="title">{{ config('app.name') }}</x-slot>
                            <x-slot name="description">
                                We are a full-fledged investment company aimed at providing all possible options to a
                                successful investment. Whether
                                you are a seasoned investor or a newbie, we've got your back.
                            </x-slot>
                            <x-slot name="listTitle">Company pages</x-slot>
                            <x-slot name="listItems">
                                <li class="py-3"><x-link-list-item href="{{ route('about') }}">About
                                        us</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item href="{{ route('about') . '#workEthics' }}">Work
                                        ethics and values</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item href="{{ route('about') . '#team' }}">Executives
                                        and directors</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item href="{{ route('about') . '#faqs' }}">Frequently
                                        asked questions</x-link-list-item></li>
                            </x-slot>
                        </x-dropdown-content>
                    </x-slot>
                </x-nav-dropdown>
                <x-nav-dropdown>
                    <x-slot name="trigger">
                        <x-nav-link href="javascript:void()" :active="request()->routeIs('knowledge')" class="">
                            {{ __('Support and tools') }}
                        </x-nav-link>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-content action="{{ route('contact') }}">
                            <x-slot name="title">Support and tools</x-slot>
                            <x-slot name="description">
                                We are always eager to render assistance to our clients, through our numerous support
                                channels. Also, our knowledge base contains
                                informations on how to navigate our platform with ease whether a beginner or seasoned
                                investor, you will find
                                it useful.
                            </x-slot>
                            <x-slot name="listTitle">Supports base</x-slot>
                            <x-slot name="listItems">
                                <li class="py-3"><x-link-list-item href="{{ route('contact') }}">Contact
                                        us</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item href="{{ route('knowledge') }}">Knowledge
                                        base</x-link-list-item></li>
                                <li class="py-3"><x-link-list-item
                                        href="{{ route('knowledge') . '#faqs' }}">Frequently asked
                                        questions</x-link-list-item></li>
                            </x-slot>
                        </x-dropdown-content>
                    </x-slot>
                </x-nav-dropdown>
                <x-nav-link href="{{ route('blog') }}" :active="request()->routeIs('blog')">
                    {{ __('Market news') }}
                </x-nav-link>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @guest
                        <x-link-one href="/login" class="mr-2">Login
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-arrow-narrow-right w-5 h-5" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </x-link-one>
                        <x-link-two href="/pricing">Get started</x-link-two>
                    @endguest
                    @admin
                        <x-link-one href="{{ route('admin.dashboard') }}">Control panel</x-link-one>
                    @endadmin
                    @auth
                        <x-dropdown align="right" width="48" contentClasses="bg-gray-800 text-primary-light">
                            <x-slot name="trigger">
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-primary transition">
                                    @if (auth()->user()->profile_photo_path)
                                        <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                            alt="{{ Auth::user()->username }}"
                                            class="h-8 w-8 rounded-full shadow object-cover">
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-10 cursor-pointer"
                                            viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-linecap="round"
                                            stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                        </svg>
                                    @endif
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-500 text-opacity-90">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link href="{{ route('user.dashboard') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('View portfolio') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('profile.show') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Update profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.deposit.pricingTable') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Deposit funds') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.withdrawal.create') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Withdraw income') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('user.payment.create') }}"
                                    class="text-primary-light hover:bg-gray-700">
                                    {{ __('Wallets') }}
                                </x-dropdown-link>
                                <div class="border-t border-primary-light"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                        class="text-primary-light hover:bg-gray-700">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth
                </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden hamburger">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-teal-600 hover:text-teal-500 focus:outline-none focus:text-teal-700 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-right h-8 w-8"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M10 12l10 0" />
                        <path d="M6 18l14 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- responsive --}}
    <div :class="{ 'block': open, 'hidden': !open }"
        class="hidden sm:hidden fixed inset-0 z-50 bg-primary-dark text-gray-300 transition ease-in-out duration-500">
        <div class="flex justify-between items-center pl-4 border-b border-gray-600">
            <a href="{{ route('guestHome') }}"><x-application-logo /></a>
            <button @click="open = !open" class="p-4 text-teal-600">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="h-full">
            <ul class="pt-2 pb-3 divide-y divide-gray-700">
                <x-responsive-menu-group>
                    <x-slot name="trigger">
                        {{ __('Investment') }}
                    </x-slot>
                    <x-slot name="items">
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('managedInvesting') }}">
                                Portfolio management
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('managedInvesting') . '#plans' }}">
                                Investment plans
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('managedInvesting') . '#features' }}">
                                Portfolio mangement features
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('managedInvesting') . '#faqs' }}">
                                Portfolio management FAQs
                            </x-link-list-item>
                        </li>
                    </x-slot>
                </x-responsive-menu-group>
                <x-responsive-nav-link href="{{ route('pricing') }}">
                    {{ __('Pricing') }}
                </x-responsive-nav-link>
                <x-responsive-menu-group>
                    <x-slot name="trigger">
                        {{ __('Company') }}
                    </x-slot>
                    <x-slot name="items">
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4" href="{{ route('about') }}">
                                About us
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('about') . '#workEthics' }}">
                                Work ethics and values
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('about') . '#team' }}">
                                Executives and directors
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('about') . '#faqs' }}">
                                Frequently asked questions
                            </x-link-list-item>
                        </li>
                    </x-slot>
                </x-responsive-menu-group>
                <x-responsive-menu-group>
                    <x-slot name="trigger">
                        {{ __('Support and tools') }}
                    </x-slot>
                    <x-slot name="items">
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('contact') }}">
                                Contact us
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('knowledge') }}">
                                knowledge base
                            </x-link-list-item>
                        </li>
                        <li>
                            <x-link-list-item class="inline-flex items-center py-2 pl-4"
                                href="{{ route('knowledge') . '#faqs' }}">
                                Frequently asked questions
                            </x-link-list-item>
                        </li>
                    </x-slot>
                </x-responsive-menu-group>
                <x-responsive-nav-link href="{{ route('blog') }}">
                    {{ __('Market news') }}
                </x-responsive-nav-link>
            </ul>
            <!-- Responsive Settings Options -->
            <div class="absolute left-0 right-0 bottom-0 pt-4 pb-4 border-t border-primary-light">
                @auth
                    <div class="flex items-center px-4">
                        <div class="shrink-0 mr-3">
                            @if (auth()->user()->profile_photo_path)
                                <img src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
                                    alt="{{ Auth::user()->username }}"
                                    class="h-10 w-10 rounded-full shadow object-cover">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-10 cursor-pointer"
                                    viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-linecap="round"
                                    stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                </svg>
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <p class="text-md text-primary-light mb-px">{{ auth()->user()->username }}</p>
                            <p class="text-md text-primary-light">{{ auth()->user()->email }}</p>
                        </div>
                    </div>

                    <div class="mt-2 space-y-1 divide-y divide-primary-light">
                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('user.dashboard') }}" :active="request()->routeIs('user.dashboard')">
                            {{ __('Portfolio') }}
                        </x-responsive-nav-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @endauth
                @admin
                    <div class="flex justify-center items-center">
                        <x-link-one href="{{ route('admin.dashboard') }}">Control panel</x-link-one>
                    </div>
                @endadmin
                @guest
                    <div class="flex justify-center items-center">
                        <x-link-one href="/login" class="mr-4">Login</x-link-one>
                        <x-link-two href="/pricing">Get started</x-link-two>
                    </div>
                @endguest
            </div>
        </div>
    </div>
    {{-- <div class="cryptohopper-web-widget" data-id="2"></div> --}}
</div>
