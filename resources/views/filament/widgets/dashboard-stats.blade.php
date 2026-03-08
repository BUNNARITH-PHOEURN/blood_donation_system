<div class="grid grid-cols-4 gap-6">

@foreach($this->getStats() as $stat)

<div class="flex items-center justify-between p-6 bg-white rounded-xl shadow">

    <div>
        <p class="text-sm text-gray-500">
            {{ $stat['title'] }}
        </p>

        <h2 class="text-3xl font-bold">
            {{ $stat['value'] }}
        </h2>
    </div>

    <div class="p-3 rounded-lg {{ $stat['color'] }}">
        <x-filament::icon :icon="$stat['icon']" class="w-6 h-6 {{ $stat['iconColor'] }}" />
    </div>

</div>

@endforeach

</div>