<x-layout>
    <div class="max-w-2xl mx-auto py-8 w-full">
        @if(session()->has('success'))
            <flux:callout icon="check-circle" variant="success" class="mb-4">
                <flux:callout.heading>{{ session('success') }}</flux:callout.heading>
            </flux:callout>
        @endif

        <a
            href="{{ route('projects.index') }}"
            class="italic text-slate-500"
        >← Retour aux projets</a>
        <div class="w-full flex justify-between gap-4">
            <h1>{{ $project->title }}</h1>
            <flux:button href="{{ route('projects.edit', $project->id) }}">Modifier</flux:button>
        </div>
        <p class="my-4">{{ $project->description }}</p>
        @if(isset($project['technologies']) && count($project['technologies']) > 0)
        <ul class="mt-4 list-disc list-inside">
            @foreach ($project['technologies'] as $technologie)
                <li>{{ $technologie }}</li>
            @endforeach
        </ul>
        @endif
        <flux:separator class="my-8" />

        <h2 class="text-xl font-bold mb-4">Tâches à faire</h2>

        @if($project->tasks->isEmpty())
            <p class="text-slate-500 italic">Aucune tâche pour ce projet.</p>
        @else
            <div class="space-y-4">
                @foreach($project->tasks as $task)
                    <div class="flex items-center justify-between p-4 rounded-lg border {{ $task->is_done ? 'bg-slate-50 border-slate-200 dark:bg-zinc-900 dark:border-zinc-800' : 'bg-white border-slate-200 shadow-sm dark:bg-zinc-800 dark:border-zinc-700' }}">
                        <div class="flex items-center gap-3">
                            @if($task->is_done)
                                <flux:icon.check-circle class="w-6 h-6 text-green-500" />
                            @else
                                <div class="w-6 h-6 rounded-full border-2 border-slate-300 dark:border-zinc-500"></div>
                            @endif
                            
                            <span class="{{ $task->is_done ? 'line-through text-slate-400 dark:text-zinc-500' : 'font-medium text-zinc-900 dark:text-zinc-100' }}">
                                {{ $task->title }}
                            </span>
                        </div>

                        <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            @if($task->is_done)
                                <button 
                                    type="submit" 
                                    class="btn text-sm font-medium border border-slate-300 dark:border-zinc-600 cursor-pointer"
                                >
                                    Annuler
                                </button>
                            @else
                                <button 
                                    type="submit" 
                                    class="btn btn-primary text-sm font-medium cursor-pointer"
                                >
                                    Valider
                                </button>
                            @endif
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div> 
</x-layout>
