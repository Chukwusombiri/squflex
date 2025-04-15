<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-primary-light">
            {{ __('Please confirm your email by clicking the link we sent. Can\'t find it? Check your spam folder. Still nothing? We\'re happy to resend it!') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('We’ve sent a new verification link to the email you provided in your profile.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit" class="text-primary-light">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div>                
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-primary-light hover:text-primary-lighter rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-600 ml-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>