<x-form-section submit="save">
    <x-slot name="title">
        {{ __('Demographic Informations') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your demographic information.') }}
    </x-slot>

    <x-slot name="form">        
        <!-- age -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="age" value="{{ __('Age') }}" />
            <x-input id="age" type="text" class="mt-1 block w-full" wire:model.defer="age" autocomplete="age" />
            <x-input-error for="age" class="mt-2" />
        </div>

        <!-- gender -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="gender" value="{{ __('Gender') }}" />
            <x-select name="gender" id="gender" wire:model.defer="gender" class="mt-1 block w-full">
                <option value="">choose gender</option>
                <option @if (auth()->user()->gender === 'male')
                    {{ 'selected' }}
                @endif value="male">Male</option>
                <option @if (auth()->user()->gender === 'female')
                    {{ 'selected' }}
                @endif value="female">Female</option>
                <option @if (auth()->user()->gender === 'others')
                    {{ 'selected' }}
                @endif value="others">Others</option>
            </x-select>
            <x-input-error for="gender" class="mt-2" />
        </div> 
         
        {{-- marital status --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="marital_status" value="{{ __('Marital status') }}" />
            <x-select wire:model.defer="marital_status" id="marital_status" class="mt-1 block w-full">
                <option value="">choose marital status</option>
                <option value="single" @if (auth()->user()->gender === 'single')
                    {{ 'selected' }}
                @endif>Single</option>
                <option value="married" @if (auth()->user()->gender === 'married')
                    {{ 'selected' }}
                @endif>Married</option>
                <option value="divorced" @if (auth()->user()->gender === 'divorced')
                    {{ 'selected' }}
                @endif>Divorced</option>
                <option value="others" @if (auth()->user()->gender === 'others')
                    {{ 'selected' }}
                @endif>Others</option>                                
            </x-select>
            <x-input-error for="marital_status" class="mt-2" />
        </div>

        {{-- occupation --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="occupation" value="{{ __('Occupation') }}" />
            <x-input id="occupation" type="text" class="mt-1 block w-full" wire:model.defer="occupation" autocomplete="occupation" />
            <x-input-error for="occupation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <button wire:loading.attr="disabled" class="inline-flex items-center px-4 py-2 my-bg-gradient border border-transparent rounded-md font-semibold text-xs text-primary-lighter uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition ease-in-out duration-150">
            {{ __('Save') }}
        </button>
    </x-slot>
</x-form-section>
