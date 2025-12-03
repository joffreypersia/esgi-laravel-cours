<x-layout>
    <div class="flex justify-between gap-4">
        <h1>Bienvenue sur la page Projects</h1>
        <flux:button :href="route('projects.create')">Créer un nouveau projet</flux:button>
    </div>

    @if(session()->has('success'))
    <flux:callout icon="check-circle" variant="success">
        <flux:callout.heading>{{ session('success') }}</flux:callout.heading>
    </flux:callout>
    @endif

    <ul class="mt-4 list-disc list-inside">
        @foreach ($projects as $project)
            <li><a href="{{ route('projects.show', $project->id) }}" class="underline text-blue-800">{{ $project['title'] }}</a></li>
        @endforeach
    </ul>
</x-layout>
