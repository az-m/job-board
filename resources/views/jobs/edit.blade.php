<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-3">
                <div class="col-start-2 col-span-1 space-y-3">

                    <x-form-label for="title">Title</x-form-label>
                    <x-form-input id="title" name="title" required value="{{ $job->title }}" />
                    <x-form-error name="title" />

                    <x-form-label for="salary">Salary</x-form-label>
                    <x-form-input id="salary" name="salary" required value="{{ $job->salary }}" />
                    <x-form-error name="salary" />

                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <div class="flex items-center">
                            <button form="delete-form" class="text-red-500 text-sm/6 font-semibold px-3">Delete</button>
                        </div>
                        <div class="flex items-center gap-x-6">
                            <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</a>
                            <x-form-button>Update</x-form-button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>