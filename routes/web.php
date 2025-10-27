<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function() {
    $projects = [
        1 => [
            'title' => 'Développement web app',
            'technologies' => ['Laravel', 'Blade', 'Tailwind CSS', 'Alpine JS']
        ],
        2 => [
            'title' => 'To Do List',
            'technologies' => ['Laravel', 'Livewire', 'Alpine JS', 'SQLite']
        ]
    ];
    return view('projects.index', compact('projects'));
})->name('projects');

Route::get('/project/{id}', function ($id) {
    $projects = [
        1 => [
            'title' => 'Développement web app',
            'technologies' => ['Laravel', 'Blade', 'Tailwind CSS', 'Alpine JS']
        ],
        2 => [
            'title' => 'To Do List',
            'technologies' => ['Laravel', 'Livewire', 'Alpine JS', 'SQLite']
        ]
    ];

    // Si $id n'existe pas, retourne la valeur par défaut
    $project = Arr::get($projects, $id, [
        'title' => 'Projet non trouvé',
        'technologies' => []
    ]);

    return view('projects.show', compact('project'));
});
