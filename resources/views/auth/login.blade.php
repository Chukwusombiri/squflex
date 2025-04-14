<x-guest-layout>
    <div class="min-h-screen flex md:items-center bg-primary-dark">
        <div class="hidden md:block w-1/2 h-full p-8">
            <x-authentication-card-logo class="text-primary-lighter text-4xl" />
            <x-login-svg />
        </div>
        <div class="w-full md:w-1/2">
            <div class="h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4 text-primary-light">
                <div class="md:hidden">
                    <x-authentication-card-logo />
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-gray-600 hover:border-teal-600 shadow-lg overflow-hidden rounded-xl">
                    <h3 class="text-center futura-medium font-semibold text-2xl mb-6">
                        Welcome back
                    </h3>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf                        
                        <div>
                            <x-label for="email" value="{{ __('E-mail address') }}" class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="email" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500  text-primary-light" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" placeholder="Your email address..."/>
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="password" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500  text-primary-light" type="password" name="password" required
                                autocomplete="current-password" placeholder="Your password..."/>
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-primary-light">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-md text-primary-light hover:text-primary-lighter tracking-wide"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-secondary-button type="submit" class="ml-4 text-sm font-semibold">
                                {{ __('Log in') }}
                            </x-secondary-button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <p class="futura-light text-md">Are you new here? <a href="{{route('register')}}" class="futura-medium hover:underline">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>