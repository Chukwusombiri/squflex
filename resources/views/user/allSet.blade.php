<x-guest-layout>
    <div class="min-h-screen md:h-screen flex md:items-center">        
        <div class="w-full md:w-1/2">
            <div class="h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4">
                <div class="md:hidden">
                    <x-authentication-card-logo />
                </div>

                <div class="w-full sm:max-w-md mt-6 py-4 flex flex-col md:justify-center items-center">
                    <x-allset-svg />
                    <h2 class="futura-medium text-2xl mt-5 mb-7">Excellent! You are all set.</h2>
                    <div class="flex justify-center items-center flex-wrap">
                        <div class="p-2">
                            <x-link-two href="{{route('user.dashboard')}}" class="rounded-lg">View portfolio</x-link-two>
                        </div>
                        <div class="p-2">
                            <x-link-one href="{{route('guestHome')}}" class="rounded-lg">Return home</x-link-one>
                        </div>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>