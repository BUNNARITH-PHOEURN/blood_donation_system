<x-filament-panels::page>
    <form wire:submit.prevent="register">
        {{ $this->form }}
        <x-filament::button type="submit">
            Register
        </x-filament::button>
    </form>
</x-filament-panels::page>
