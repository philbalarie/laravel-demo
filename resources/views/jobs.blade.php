<x-layout title="Jobs">
    <h1>Jobs</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
                <p><strong>Salary:</strong> {{ $job['salary'] }} $</p>
            </li>
        @endforeach
    </ul>
</x-layout>
