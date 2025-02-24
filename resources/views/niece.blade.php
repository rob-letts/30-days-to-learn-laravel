<x-layout>
    <x-slot:heading>
        Niece Page!
    </x-slot:heading>
    <h1 class="text-yellow-500">Nieces</h1>

    <p>{{ $niece['name'] }} the {{ $niece['type'] }}</p>
    <p>They {{ $niece['can_talk'] ? 'can' : "can't" }} talk</p>
    <p>Their owner is {{ $niece->owner->name }} </p>
    <a href="/nieces">Back</a>
</x-layout>
