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
                <div class="p-4 border rounded-lg text-center">
                    <div class="text-red-600 font-bold text-xl">20</div>
                    <div class="text-gray-500">Type O+</div>
                    
                        <div class="mt-2 px-2 py-1 bg-orange-200 text-orange-800 rounded">Low Stock</div>
                    
                </div>
                <div class="col-md-3">
                    <div class="card border-0 container-fluid" style="background:#f5f6fa;">
                        <div class="card-body">
                            <h4 class="text-danger text-center">120</h4>
                            <p class="text-muted text-center small">Type O+</p>
                            <p class="text-danger text-center small alert alert-warning mt-2 p-2">Low Stock</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 text-center text-gray-500">No Blood Inventory Data</div>
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>

