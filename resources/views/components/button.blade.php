<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-indigo-900 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-900']) }}>
    {{ $slot }}
</button>
