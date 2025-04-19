@props(['currentPlan'])

<div class="col-span-6 sm:col-span-3 lg:col-span-2 flex bg-primary-dark text-primary-lighter rounded-xl">
    <div class="w-full p-6 text-primary-lighter">
        <div class="mb-10">
            <span
                class="px-6 py-2 futura-light text-primary-lighter uppercase border border-gray-600 rounded-2xl shadow">
                ${{ number_format($currentPlan->min) }} in assets
            </span>
        </div>
        <div class="flex items-center mb-6">
            <span class="sedan-regular text-2xl md:text-4xl ml-2">{{ $currentPlan->name }}</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 hover:w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </span>
        </div>
        <div class="mb-4">
            <p class="text-xl futura-bold capitalize">Interest rate: <span
                    class="ml-2">{{ round($currentPlan->perMonInt, 1) }}%</span></p>
        </div>
        <div class="mb-6">
            <p class="text-xl futura-bold capitalize">Duration: <span
                    class="ml-2">{{ $currentPlan->duration_str }}
                </span></p>
        </div>        

        <div class="border-0 border-t border-gray-700 pt-3">            
            @if ($currentPlan->features !== null && $currentPlan->features !== '')
                <h4 class="text-xl futura-book mb-2 text-teal-500 tracking-wide">Features</h4>
                @foreach (json_decode($currentPlan->features) as $feature)
                    <div class="flex items-start mb-px md:mb-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="ml-2">
                            {{ $feature }}
                        </span>
                    </div>
                @endforeach
            @endif
            <div class="w-full mt-6 flex items-center justify-center">
                <a href="{{ route('user.deposit.create', [$currentPlan->id]) }}"
                    class="px-6 py-2 md:px-8 md:py-3 rounded-xl border border-teal-600 hover:border-teal-500 text-teal-600 hover:text-teal-500">
                    {{ ($currentPlan->id !== auth()->user()->plan_id) ? 'upgrade' : 'deposit' }}
                </a>
            </div>
        </div>
    </div>
</div>
