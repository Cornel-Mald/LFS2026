<x-layout title="About">
        <h1>About the Laravel Application</h1>
    <x-card>
        <p>This is the about page.</p>
    </x-card>
    @dump($tasks)
    @if (count($tasks))
	<p> Yes you have <?= count($tasks) ?> tasks.</p>
    @endif
    
    {{-- @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    @unless ( count($tasks))
	    <p>There aro no active tasks </p>
	@endunless --}}

     @forelse($tasks as $task)
        <li>{{ $task }}</li>
    @empty
	    <p>There aro no active tasks </p>
    @endforelse
    

</x-layout>