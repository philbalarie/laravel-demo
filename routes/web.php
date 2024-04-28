<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
            'id' => 1,
            'title' => 'Director',
            'salary' => "50000"
            ],
            [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => "40000"
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
        'id' => 1,
        'title' => 'Director',
        'salary' => "50000"
        ],
        [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => "40000"
        ]
        ];

    return view('job', ['job' => $jobs[0]]);
});