<x-layout>
    <div>
        <h1 class="text-3xl font-bold text-gray-900">{{ $project['title'] }}</h1>

        <h2>Technologies utilisées</h2>
        <ul class="list-disc list-inside mt-2">
            @foreach ($project['technologies'] as $tech)
                <li>{{ $tech }}</li>
            @endforeach
        </ul>

    </div>
</x-layout>
