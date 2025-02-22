<x-layout>
    <x-slot:heading>
        Nieces Page!
    </x-slot:heading>

    <h1 class="text-yellow-500">Nieces</h1>

    @foreach ($nieces as $niece)
        <a href="/niece/{{ $niece['id'] }}">{{ $niece['name'] }} the {{ $niece['type'] }}</a>
    @endforeach
</x-layout>
