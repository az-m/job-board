<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-3">
                <div class="col-start-2 col-span-1 space-y-3">

                    <x-form-label for="title">Title</x-form-label>
                    <x-form-input id="title" name="title" placeholder="Shift Leader" required />
                    <x-form-error name="title" />

                    <x-form-label for="salary">Salary</x-form-label>
                    <x-form-input id="salary" name="salary" placeholder="£35,000" required />                
                    <x-form-error name="salary" />

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/jobs" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</a>
                        <x-form-button>Save</x-form-button>
                    </div>

                </div>
            </div>
        </div>
    </form> 
</x-layout>