<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot>

    <ul>
    @foreach ($jobs as $job)
        <li class="my-1 hover:underline">
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>    
    @endforeach
    </ul>
</x-layout>
