<div
    class="relative w-full lg:w-7/12 mx-auto flex flex-col min-w-0 mt-6 px-4 py-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
    <x-alert />
    <x-action-overlay />
    <h3 class="futura-medium text-2xl mb-3 tracking-wide">
        Complete Deposit
    </h3>

    <div class="mt-4">
        <x-label for="amount"
            class="font-semibold">{{ "Amount to deposit ($" . number_format($plan->min) . " -- $" . number_format($plan->max) . ')' }}</x-label>
        <x-input id="amount" class="block mt-1 w-full px-4 py-2 md:py-4 shadow-none" type="number"
            wire:model="amount" required autocomplete="amount" placeholder="Enter amount to  deposit" />
        <x-input-error for="amount" />
    </div>
    <div class="mt-4">
        <x-label for="selectedWallet" class="font-semibold" value="{{ __('Choose your funding source') }}" />
        <p class="text-sm text-gray-800">Click on any crypto to choose your preferred funding source</p>
        <x-input-error for="selectedWallet" />
        <x-input-error for="selectedAddress" />
        @if ($allWallets && count($allWallets) > 0)
            <div class="mt-2 flex flex-wrap" x-data="{ selectedWallet: @entangle('selectedWallet') }">
                @foreach ($allWallets as $element)
                    <div class="p-px md:p-2">
                        <div class="flex items-center">
                            <button wire:click='tryValue("{{ $element->id }}")'
                                x-bind:class="{ 'bg-primary-dark text-gray-100 border-primary-dark': selectedWallet === '{{ $element->name }}', 'border-gray-300 text-gray-700': selectedWallet !== '{{ $element->name }}' }"
                                class="select-none cursor-pointer flex items-center justify-center rounded-lg border py-[4px] px-4 font-semibold text-sm transition-colors duration-200 ease-in-out">
                                <span>{{ $element->name }}</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="hidden"></div>
        @endif
    </div>

    <div class="flex items-center justify-center mt-4">
        <x-secondary-button type="button" wire:click="deposit"
            class="inline-block px-6 py-2.5 bg-primary-dark font-semibold leading-normal text-center text-white align-middle transition-all rounded-lg cursor-pointer text-sm ease-in shadow-md hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-wider">
            {{ __('Deposit') }}
        </x-secondary-button>
    </div>
</div>
