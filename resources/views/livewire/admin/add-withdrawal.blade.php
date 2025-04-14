<div class="w-full flex flex-col items-center">
    <x-admin-alert class="w-full mb-4"/>
    <div class="bg-white w-full md:w-7/12 rounded-xl px-4 py-4 relative">
        <div wire:loading.delay.long wire:target="submit">
            <div class="absolute top-1/2 left-1/2 h-24 w-24 flex" style="transform: translate(-50%, -50%);">
                <div class="relative rounded-full w-full h-full border-t-8 border-b-8 border-blue-500 animate-spin"></div>
            </div>
        </div>
        <h2 class="futura-medium text-lg text-gray-700 text-center mb-4">Create new withdrawal</h2>
        <div class="relative w-full mb-4">
            <x-label for="user" value="{{ __('User') }}" />
            <x-input type="text" wire:focus="handleFocus" wire:model="search" class="block w-full mt-2" placeholder="Search by username or email" />
            @if (count($allUsers) > 0)
                <div id="allUsers"
                    class="absolute top-full z-50 bg-white w-full border border-gray-300 mt-1 rounded-xl shadow-md">
                    @foreach ($allUsers as $n => $nuser)
                        <button type="button" wire:click="setUser('{{ $nuser->id }}')"
                            class="block w-full py-1 px-4 text-start outline-none border-none hover:bg-gray-100 @if($n==0) {{"rounded-t-xl"}} @endif @if($n===(count($allUsers)-1)) {{"rounded-b-xl"}} @endif">{{ $nuser->username }} <span class="ml-2 futura-light">{{$nuser->email}}</span></button>
                    @endforeach
                </div>
            @else
                <div id="allUsers" class="hidden"></div>
            @endif
            <x-input-error for="user" class="mt-1" />
        </div>   
        <div class="w-full mb-4">
            <x-label for="wallet" value="{{ __('Payment method') }}" />
            <x-select wire:model="wallet" class="block w-full mt-2" id="wallet">
                <option value="">select wallet</option>
                @foreach ($userWallets as $wallet)
                    <option value="{{ $wallet->name }}" wire:key="wallet-{{ $wallet->id }}">{{ $wallet->name }}</option>
                @endforeach
            </x-select>
            <x-input-error for="wallet" class="mt-1" />
        </div>
        <div class="w-full mb-4">
            <x-label for="amount" value="{{ __('Amount') }}" />
            <x-input type="number" wire:model="amount" class="block w-full mt-2" />
            <x-input-error for="amount" class="mt-1" />
        </div>
        <div class="w-full flex justify-end items-center p-2">        
            <button wire:click="submit" class="px-4 py-2 bg-gray-700 rounded-md text-sm text-gray-100 active:bg-gray-900">create withdrawal</button>
        </div>
    </div>
</div>