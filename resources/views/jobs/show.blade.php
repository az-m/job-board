<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot>

    <h2 class="font-semibold text-2xl mb-2">{{ $job->title }}</h2>
    <p>This job pays {{ $job->salary }} per year.</p>

    <p class="mt-8">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
