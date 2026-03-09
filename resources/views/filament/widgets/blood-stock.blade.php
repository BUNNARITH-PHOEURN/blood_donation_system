<x-filament-widgets::widget>
    <x-filament::section class="custom-section" style="width:70vw; padding: 0; margin: 0;">
        
        <style>

            .blood-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 16px;
                width: 100%;
            }

            .blood-card {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border: 0.2px solid rgb(211, 211, 211);
                padding: 24px;
                text-align: center;
                transition: transform 0.2s;
                width: 100%;
            }

            .blood-card:hover {
                transform: translateY(-4px);
            }

            .blood-quantity {
                color: #e3342f;
                font-weight: bold;
                font-family: 'DM Serif Display', serif;
                font-size: 35px;
            }

            .blood-type {
                color: #6b7280;
                margin-top: 4px;
                font-size: 16px;
            }

            .low-stock {
                margin-top: 8px;
                padding: 4px 8px;
                background-color: #fed7aa;
                color: #c05621;
                border-radius: 6px;
                font-weight: 600;
                font-size: 12px;
                display: inline-block;
            }
            .h2{
                font-weight: 600;
                font-size: 17px;
            }
        </style>
        <div class="h2">Blood Stock by Type</div>
        <div class="blood-grid" style=" padding-top:20px;">
            @forelse($this->bloodStock() as $inventory)
                <div class="blood-card">
                    <div class="blood-quantity">{{ $inventory->units_available }}</div>
                    <div class="blood-type">Type: {{ $inventory->blood_type }}</div>
                    @if($inventory->quantity < 3)
                        <div class="low-stock">Low Stock</div>
                    @endif
                </div>
            @empty
                @php
                    $bloodTypes = ['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
                @endphp
                @foreach ($bloodTypes as $type)
                    <div class="blood-card">
                        <div class="blood-quantity">0</div>
                        <div class="blood-type">Type: {{ $type }}</div>
                        <div class="low-stock">Low Stock</div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </x-filament::section>
</x-filament-widgets::widget>