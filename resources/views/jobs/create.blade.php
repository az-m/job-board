<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-3">
                <div class="col-start-2 col-span-1 space-y-3">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Title</label>
                    <div class="rounded-md bg-white pl-3 dark:bg-white/5">
                        <input id="title" 
                        type="text" 
                        name="title" 
                        placeholder="Shift Leader" 
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-transparent dark:text-white dark:placeholder:text-gray-500" 
                        required />
                    </div>
                    @error('title')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <label for="salary" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Salary</label>
                    <div class="rounded-md bg-white pl-3 dark:bg-white/5">
                        <input id="salary" 
                        type="text" 
                        name="salary" 
                        placeholder="£35,000" 
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-transparent dark:text-white dark:placeholder:text-gray-500" 
                        required />
                    </div>                
                    @error('salary')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/jobs" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:focus-visible:outline-indigo-500 dark:hover:bg-green-700">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
</x-layout>