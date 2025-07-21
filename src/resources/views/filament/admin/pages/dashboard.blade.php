{{-- resources/views/filament/admin/pages/dashboard.blade.php --}}
<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <x-filament::card>
            <div class="text-lg font-semibold">Total Booking</div>
            <div class="text-2xl text-primary mt-2">
                {{ \App\Models\Booking::count() }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-semibold">Last Booking</div>
            <div class="text-sm text-gray-600 mt-2">
                {{ \App\Models\Booking::latest()->first()?->name ?? 'Belum ada' }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-semibold">Today</div>
            <div class="text-sm text-gray-600 mt-2">
                {{ now()->format('d M Y') }}
            </div>
        </x-filament::card>
    </div>
</x-filament-panels::page>
