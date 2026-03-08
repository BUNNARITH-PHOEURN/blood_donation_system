<x-filament-widgets::widget>
    <x-filament::section>
        
        <style>
            .blood-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
                gap: 16px;
            }

            .blood-card {
                background-color: #ffffff;
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 24px;
                text-align: center;
            }

            .blood-quantity {
                color: #e3342f; /* red */
                font-weight: bold;
                font-size: 24px;
            }

            .blood-type {
                color: #6b7280; /* gray */
                margin-top: 4px;
            }

            .low-stock {
                margin-top: 8px;
                padding: 4px 8px;
                background-color: #fed7aa; /* orange */
                color: #c05621; /* dark orange */
                border-radius: 6px;
                font-weight: 600;
                font-size: 14px;
            }
        </style>

        <!-- Blade content -->
        <div class="blood-grid">
            @forelse($this->getStart() as $inventory)
                <div class="blood-card">
                    <div class="blood-quantity">{{ $inventory->units_available }}</div>
                    <div class="blood-type">Type: {{ $inventory->blood_type }}</div>
                    @if($inventory->quantity < 3)
                        <div class="low-stock">Low Stock</div>
                    @endif
                </div>
            @empty
                <div class="blood-card">
                    <div class="blood-quantity">0</div>
                    <div class="blood-type">No Blood Inventory</div>
                </div>
            @endforelse
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
