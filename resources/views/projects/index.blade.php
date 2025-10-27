<x-layout>
    <div>
        <h1 class="text-3xl font-bold text-gray-900">Mes projets</h1>

        <ul class="list-disc list-inside mt-2">
            @foreach($projects as $id => $project)
                <li><a href="{{ url('/project/' . $id) }}">{{ $project['title'] }}</a></li>
            @endforeach
        </ul>

    </div>
</x-layout>
