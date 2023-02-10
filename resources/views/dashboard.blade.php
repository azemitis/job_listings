<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-5">

        {{-- Custom made left dashboard sidebar in /components namespace --}}
        <x-sidebar />

        {{-- Flash message --}}
        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-5 rounded-lg flash-message w-1/2 fixed top-9 left-0 right-0 mx-auto z-50"
                id="flash-message">
                {{ session()->get('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById("flash-message").style.display = "none";
                }, 3000);
            </script>
        @endif

        {{-- Main block --}}
        <div class="py-6 col-span-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-6 text-4xl font-semibold text-center text-indigo-800">Job Listings Administration Panel</div>
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-xl text-left text-white dark:text-indigo-200">
                            <thead class="text-xl uppercase bg-indigo-900 bg-opacity-90 dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3" width="20%">
                                        Job Title
                                    </th>
                                    <th scope="col" class="px-6 py-3" width="20%">
                                        Organization
                                    </th>
                                    <th scope="col" class="px-6 py-3" width="20%">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3" width="15%">
                                        Valid
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center" width="25%">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr class="bg-indigo-900 bg-opacity-80 border-b border-indigo-500 hover:bg-indigo-800 "
                                        onclick="location.href='{{ route('show', $job->id) }}'">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-white dark:text-indigo-200">
                                            {{ $job->title }}
                                        </th>
                                        <td class="px-6 py-4 text-white">
                                            {{ $job->organization }}
                                        </td>
                                        <td class="px-6 py-4 text-white">
                                            {{ $job->locations }}
                                        </td>
                                        <td class="px-6 py-4 text-white">
                                            {{ $job->day }}-{{ $job->month }}-{{ $job->year }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('edit', $job->id) }}"
                                                class="bg-indigo-900 bg-opacity-90 hover:bg-indigo-800 text-white py-2 px-4 rounded">Edit</a>
                                            <form action="{{ route('destroy', $job->id) }}" method="post"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-gray-800 hover:bg-indigo-800 text-white py-2 px-4 rounded ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="w-full text-center py-9">
                    {{ $jobs->links('pagination::indigo') }}
                </div>
            </div>
</x-app-layout>
