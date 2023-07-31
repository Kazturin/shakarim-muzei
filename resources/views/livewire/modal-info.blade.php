<x-modal>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {!! $content !!}
    </x-slot>

    <x-slot name="buttons">
        <button class="bg-amber-600 rounded text-white p-2" wire:click="$emit('closeModal')">Жабу</button>
    </x-slot>
</x-modal>
