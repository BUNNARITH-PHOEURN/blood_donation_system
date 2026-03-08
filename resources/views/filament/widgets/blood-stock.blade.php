<x-filament-widgets::widget>
    <x-filament::section>
        <div class="grid grid-cols-4 gap-4">
            @foreach($this->getStats() as $units_available)
                <div class="p-4 border rounded-lg text-center">
                    <div class="text-red-600 font-bold text-xl">{{ $units_available->quantity }}</div>
                    <div class="text-gray-500">Type {{ $units_available->type }}</div>
                    @if($units_available->quantity < 3)
                        <div class="mt-2 px-2 py-1 bg-orange-200 text-orange-800 rounded">Low Stock</div>
                    @endif
                </div>
            @endforeach
            @if($this->getStats()->isEmpty())
                <div class="col-span-4 text-center text-gray-500">No Blood Inventory Data</div>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
