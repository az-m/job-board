<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot>

    <div class="space-y-2 py-2">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 bg-gray-50 dark:bg-transparent border border-gray-300 dark:border-zinc-600 rounded-sm shadow-sm shadow-black/50 dark:shadow-black dark:hover:bg-transparent/10">
                <div class="text-lg text-indigo-500">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
