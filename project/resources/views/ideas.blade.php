<x-layout title="Welcome">
    <h1 class="text-2xl font-bold mb-4">Welcome to the Laravel Application!</h1>
    <x-card class="max-w-400">
        <p>This is the ideas page.</p>
    </x-card>
    <form method="POST" action="/ideas" class="p-6">
        @csrf
        <div class="col-span-full">
            <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea id="idea" name="idea" rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save.</p>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
            <a href="/delete-ideas" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete All</a>

        </div>
    </form>
    @if (count($ideas))
       <div class="mt-6 text-white p-6 rounded-lg bg-gray-800">
        <h2 class="font-bold"> Your Ideas</h2>

        <ul class="mt-6 list-disc pl-5 mt-4 space-y-1 text-gray-200">
            @foreach ($ideas as $idea)
                <li class="text-sm"> {{ $idea }} </li>
            @endforeach
        <uL>
    </div>
    @endif
</x-layout>
