<x-guest-layout>
    <div class="min-h-screen flex md:items-center justify-center bg-primary-dark text-primary-light pb-10">
        <div class="w-full md:w-1/2">
            <div class="h-full flex flex-col md:justify-center items-center pt-6 sm:pt-0 px-4">
                <div class="pt-10">
                    <x-authentication-card-logo />
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-gray-600 hover:border-teal-600 rounded-xl">                    
                    <h3 class="futura-medium font-semibold text-2xl mb-3">
                        Demographic information
                    </h3>
                    <p class="futura-book mb-6">
                        These pieces of information are crucial for ensuring compliance with legal regulations and policies applicable to your region.
                    </p>

                    <x-validation-errors class="mb-4" />
                    
                    <form method="POST" action="{{ route('user.info.demographic') }}">
                        @csrf 
                        
                        <div>
                            <x-label for="age" value="{{ __('Age') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="age" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" type="number" name="age" min="1"
                                :value="auth()->user()->age ?? old('age')" required autofocus autocomplete="age" placeholder="Enter your age"/>
                                <x-input-error for="age" />
                        </div>
                        <div class="mt-4">
                            <x-label for="gender" value="{{ __('Gender') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-select name="gender" id="gender" class="bg-transparent placeholder:text-gray-500 text-primary-light">
                                <option class="bg-gray-700" value="">choose gender</option>
                                <option class="bg-gray-700" @if (auth()->user()->gender === 'male')
                                    {{ 'selected' }}
                                @endif value="male">Male</option>
                                <option class="bg-gray-700" @if (auth()->user()->gender === 'female')
                                    {{ 'selected' }}
                                @endif value="female">Female</option>
                                <option class="bg-gray-700" @if (auth()->user()->gender === 'others')
                                    {{ 'selected' }}
                                @endif value="others">Others</option>
                            </x-select>
                            <x-input-error for="gender" />
                        </div>
                        <div class="mt-4">
                            <x-label for="marital_status" value="{{ __('Marital status') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-select name="marital_status" id="marital_status" class="bg-transparent placeholder:text-gray-500 text-primary-light focus:bg-primary-dark">
                                <option class="bg-gray-700" value="" class="bg-primary-dark">choose marital status</option>
                                <option class="bg-gray-700" value="single" @if (auth()->user()->gender === 'single')
                                    {{ 'selected' }}
                                @endif>Single</option>
                                <option class="bg-gray-700" value="married" @if (auth()->user()->gender === 'married')
                                    {{ 'selected' }}
                                @endif>Married</option>
                                <option class="bg-gray-700" value="divorced" @if (auth()->user()->gender === 'divorced')
                                    {{ 'selected' }}
                                @endif>Divorced</option>
                                <option class="bg-gray-700" value="others" @if (auth()->user()->gender === 'others')
                                    {{ 'selected' }}
                                @endif>Others</option>                                
                            </x-select>
                            <x-input-error for="marital_status" />
                        </div>
                        <div class="mt-4">
                            <x-label for="occupation" value="{{ __('Occupation') }}"  class="text-primary-light text-sm uppercase tracking-wide"/>
                            <x-input id="occupation" :value="auth()->user()->occupation ?? old('occupation')" class="block mt-1 w-full px-4 py-2 md:py-4 bg-transparent placeholder:text-gray-500 text-primary-light" type="text" name="occupation" required
                                autocomplete="occupation" placeholder="Enter your occupation"/>
                                <x-input-error for="occupation" />
                        </div>

                        <div class="flex items-center justify-center mt-4">                           
                            <x-secondary-button type="submit" class="ml-4 text-sm font-semibold">
                                {{ __('submit') }}
                            </x-secondary-button>
                        </div>                        
                    </form>
                    <div class="flex justify-center mt-4">
                        <a href="{{route('user.get.contact')}}" class="inline-flex gap-2 flex-nowrap hover:underline outline-none border-0 text-teal-500 hover:text-teal-600 cursor-pointer text-base futura-medium tracking-wide"><span>Not right now, maybe later!</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                            <path d="M5 12l14 0"></path>
                            <path d="M15 16l4 -4"></path>
                            <path d="M15 8l4 4"></path>
                          </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>