<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-5">

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

        {{-- Main Index block --}}
        <div class="py-6 col-span-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-6 text-4xl font-semibold text-center text-indigo-800">User Administration Panel</div>

                {{-- Search box --}}
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="my-2">
                        <form action="{{ route('users.search') }}" method="get">
                            <input type="text" name="search"
                                class="ml-2 form-control border-indigo-100 rounded-sm focus:ring-0"
                                placeholder="Search by name or email"
                                value="{{ old('search') ?? ($searchTerm ?? '') }}">
                            <input type="submit"
                                class="bg-indigo-900 bg-opacity-80 hover:bg-indigo-700 text-white py-2 px-4 rounded"
                                value="Search">
                        </form>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-xl text-left text-white dark:text-indigo-200  no-hover">
                            <thead class="text-xl uppercase bg-indigo-900 bg-opacity-90 dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3" width="20%">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3" width="20%">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3" width="15%">
                                        Total Listings
                                    </th>
                                    <th scope="col" class="px-4 py-3" width="25%">
                                        Has Admin Role
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center" width="10%">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr
                                        class="bg-indigo-900 bg-opacity-80 border-b border-indigo-500 no-hover 
                                    @if ($user->role === 1) admin-color @endif">
                                        <td scope="row"
                                            class="px-6 py-4 font-medium text-white dark:text-indigo-200">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 text-white">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4 text-white">
                                            {{ $user->jobs->count() }}
                                        </td>
                                        <td class="p-4 flex justify-between items-center">
                                            <form method="POST" 
                                                {{-- adds current search query string to the form action so that the search results are preserved after the form is submitted --}}
                                                action="{{ route('users.update', $user->id) }}{{ request()->getQueryString() ? '?' . request()->getQueryString() : '' }}">
                                                @method('PUT')
                                                @csrf
                                                <div class="mx-4 items-center">
                                                    <input type="hidden" name="role" value="0">
                                                    <input type="checkbox" name="role" value="1"
                                                        {{ $user->role == 1 ? 'checked' : '' }}
                                                        style="margin-right: 15px">
                                                    <input type="submit" value="Update"
                                                        class="bg-indigo-900 bg-opacity-90 hover:bg-indigo-800 text-white py-2 px-4 rounded"
                                                        style="margin-left: 15px">
                                                </div>
                                            </form>
                                        </td>

                                        <td class="px-6 py-4 text-center">
                                            <form method="POST" 
                                                {{-- adds current search query string to the form action so that the search results are preserved after the form is submitted --}}
                                                action="{{ route('users.destroy', $user->id) }} {{ request()->getQueryString() ? '?' . request()->getQueryString() : '' }}"
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
                    {{ $users->links('pagination::indigo') }}
                </div>
            </div>
</x-app-layout>
