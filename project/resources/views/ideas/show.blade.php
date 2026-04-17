<x-layout title="Welcome">
    <h1 class="text-2xl font-bold mb-4">Welcome to the Laravel Application!</h1>
    <x-card class="max-w-400">
        <p>This is the ideas page.</p>
    </x-card>
       <div class="mt-6 text-white p-6 rounded-lg bg-gray-800">
        <h2 class="font-bold"> Your Ideas</h2>

        <ul class="mt-6 list-disc pl-5 mt-4 space-y-1 text-gray-200">
            {{-- <li class="text-sm"> {{ $idea }} </li> --}}
            <li class="text-sm"> {{ $idea->description }} </li>
        </ul>
        <a href="/ideas/{{ $idea->id }}/edit" ckass="ounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
        </div>
</x-layout>
