<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-5">
        <x-sidebar class="col-span-2" />

        <div class="py-12 col-span-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="my-4 text-bold text-3xl text-indigo-800 text-left">Job Listing: {{ $job->title }}</div>
                <div class="bg-indigo-800 bg-opacity-10 overflow-hidden shadow-md sm:rounded-lg">

                    <form action="{{ route('update', $job->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2 px-4 py-4">
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Title</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->title }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Organization</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->organization }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Degree</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->degree }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Type</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->jobType }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Location</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->locations }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Send
                                    letter to:</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->email }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Remote</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->remote }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Valid: Day/Month/Year</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->day }} / {{ $job->month }} / {{ $job->year }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Description</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->aboutJob }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Minimum Qualifications</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->minimumQualifications }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Preferred Qualifications</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->preferredQualifications }}
                                </div>
                            </div>
                            <div>
                                <div class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">
                                    Responsibilities</div>
                                <div
                                    class=" text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{ $job->responsibilities }}
                                </div>
                            </div>
                        </div>
                        <div class="block mb-2 ml-4 text-indigo-800 text-lg font-semibold dark:text-white">Created:
                            {{ $job->created_at->format('d M Y') }} by {{ $job->user->name }}.</label>
                        </div>
                        <div class="inline-block px-2 py-5">
                            <a href="{{ route('edit', $job->id) }}"
                                class="bg-indigo-600 text-white ml-2 px-5 py-3 rounded-lg hover:bg-indigo-700">Edit</a>
                        </div>
                    </form>

                    <form action="{{ route('destroy', $job->id) }}" method="post"
                        class="inline-block px-2 pb-2">
                        @csrf
                        @method('DELETE')
                        <!-- Delete button -->
                        <button type="submit"
                            class="delete-modal bg-gray-800 text-white ml-2 px-5 py-3 rounded-lg hover:bg-gray-700">Delete</button>

                        {{-- Custom built delete conformation modal --}}
                        <div id="popup-modal" tabindex="-1" 
                            {{-- If app shows a Css conflict, do not fix the repating style error, those are not the same css properties --}}
                            class="bg-indigo-900 bg-opacity-50 fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto h-screen flex items-center justify-center">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-hide="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>

                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true"
                                            class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-700 dark:text-gray-400">Are you
                                            sure you want to delete this job?</h3>
                                        <button data-modal-hide="popup-modal" type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button"
                                            class="text-gray-800 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-lg font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:border-gray-800 dark:hover:bg-gray-900 dark:hover:text-white">
                                            No, cancel
                                        </button>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const deleteButtons = document.querySelectorAll('.delete-modal');
                                                deleteButtons.forEach(function(button) {
                                                    button.addEventListener('click', function(e) {
                                                        e.preventDefault();
                                                        const modal = document.getElementById('popup-modal');
                                                        modal.classList.remove('hidden');
                                                        const yesButton = modal.querySelector('.text-white');
                                                        yesButton.addEventListener('click', function() {
                                                            const form = button.parentElement;
                                                            form.submit();
                                                        });
                                                    });
                                                });
                                                const closeButtons = document.querySelectorAll('[data-modal-hide]');
                                                closeButtons.forEach(function(button) {
                                                    button.addEventListener('click', function() {
                                                        const modalId = button.getAttribute('data-modal-hide');
                                                        const modal = document.getElementById(modalId);
                                                        modal.classList.add('hidden');
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
