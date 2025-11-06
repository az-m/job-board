<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-200 dark:bg-zinc-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="relative bg-gray-800 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-x-0 dark:after:bottom-0 dark:after:h-px dark:after:bg-white/10 mb-0">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                </button>
            </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex shrink-0 items-center">
            <img src="https://laracasts.com/images/logo/logo-triangle.svg" alt="Your Company" class="h-8 w-auto" />
            </div>
            <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
            </div>
        </div>
        </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
        <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <x-nav-link href="/" :mob="true" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :mob="true" :active="request()->is('jobs')">Jobs</x-nav-link>
        <x-nav-link href="/about" :mob="true" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :mob="true" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </el-disclosure>
    </nav>

    <header class="border-b border-zinc-700 bg-white/80 dark:bg-zinc-800 py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-gray-800 dark:text-white/95 sm:flex sm:justify-between align-middle">
            <h1 class="text-3xl font-bold tracking-tight">{{ $heading }}</h1>
            <x-button href="/jobs/create">Create Job</x-button>
        </div>
    </header>
    
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-gray-950 dark:text-white/95 m-10">
    {{ $slot }}
    </main>
</body>
</html>