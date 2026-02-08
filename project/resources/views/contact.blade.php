<x-layout title="Contact">
        <h1>Contact the Laravel Application</h1>

    <x-card>
        <p>This is the contact page.</p>
        <x-card class="max-w-400">
            <p>{{ str_replace(':name', $person, $greeting) }}</p>
            {{-- {{ $greeting }} , <?= $person ?> --}}
            {{-- {{ $greeting }}, {!! $person !!}! --}}
            {{-- {!! str_replace(':name', $person, $greeting) !!} --}}
        </x-card>
    </x-card>
</x-layout>