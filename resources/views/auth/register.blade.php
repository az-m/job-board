<x-layout>
    <x-slot:heading>
        Register
    </x-slot>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="mt-10 grid grid-cols-3">
                <div class="col-start-2 col-span-1 space-y-3 border p-6 bg-gray-300 border-black/50 dark:bg-zinc-900/50 dark:border-white/50">

                    <x-form-label for="first_name">First Name</x-form-label>
                    <x-form-input id="first_name" name="first_name" required />
                    <x-form-error name="first_name" />

                    <x-form-label for="last_name">Last Name</x-form-label>
                    <x-form-input id="last_name" name="last_name" required />
                    <x-form-error name="last_name" />

                    <x-form-label for="email">Email</x-form-label>
                    <x-form-input id="email" name="email" type="email" required />                
                    <x-form-error name="email" />

                    <x-form-label for="password">Password</x-form-label>
                    <x-form-input id="password" name="password" type="password" required />                
                    <x-form-error name="password" />

                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />                
                    <x-form-error name="password_confirmation" />

                    <div class="flex items-center justify-end gap-x-6 pt-4">
                        <a href="/" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Cancel</a>
                        <x-form-button>Register</x-form-button>
                    </div>

                </div>
            </div>
        </div>
    </form> 
</x-layout>