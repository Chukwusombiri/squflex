<x-user-layout>
    <x-user-nav page="Funds transfer" />
    <div class="futura-book w-full px-6 py-6 mx-auto">
        <!-- content -->
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                @livewire('user.create-transfer')
            </div>
        </div>
        {{-- footer --}}
        <x-user-footer />
    </div>
</x-user-layout>
