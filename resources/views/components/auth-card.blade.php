<div class="min-h-screen flex flex-col sm:justify-center items-center pt-4 sm:pt-0 bg-white">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white border-t border-indigo-100 rounded shadow-lg shadow-indigo-800/50 lg:max-w-md">
        {{ $slot }}
    </div>
</div>
