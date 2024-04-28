<x-layout title="Jobs">
    <h1>Jobs</h1>
    <ul>
        <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
        <p><strong>Salary:</strong> {{ $job['salary'] }} $</p>
    </ul>
</x-layout>
