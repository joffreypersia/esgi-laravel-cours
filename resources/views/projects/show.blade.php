<x-layout>
    <a
        href="{{ route('projects.index') }}"
        class="italic text-slate-500"
    >← Retour aux projets</a>
    <h1>{{ $project->title }}</h1>
    <ul class="mt-4 list-disc list-inside">
        @foreach ($project['technologies'] as $technologie)
            <li>{{ $technologie }}</li>
        @endforeach
    </ul>
</x-layout>
