<x-layout title="Welcome">
    <x-create />
    {{-- @if (count($ideas)) --}}
    @if ($ideas->count())
        <div class="mt-6 text-white p-6 rounded-lg bg-gray-800">
            <h2 class="font-bold"> Your Ideas</h2>

            <ul class="grid grid-cols-2 gap-x-6 gap-y-6 mt-6 text-gray-200">
                @foreach ($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet. <a href="/ideas/create" class="udnerline">Create a new one</a></p>
    @endif
</x-layout>
