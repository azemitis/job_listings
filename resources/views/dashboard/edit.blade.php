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
                <div class="my-4 text-bold text-3xl text-indigo-800 text-left">UPDATE JOB LISTING</div>
                <div class="bg-indigo-800 bg-opacity-10 overflow-hidden shadow-md sm:rounded-lg">
                    {{-- Validation errors --}}
                    @if ($errors->any())
                        <div class="w-4/8 m-auto text-center">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 list-none">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('update', $job->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2 px-4 py-4">
                            <div>
                                <label for="title"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Title</label>
                                <input type="text" id="title" name="title" value="{{ $job->title }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="organization"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Organization</label>
                                <input type="text" id="organization" name="organization"
                                    value="{{ $job->organization }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="degree"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Degree</label>
                                <input type="text" id="degree" name="degree" value="{{ $job->degree }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="jobType"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Type</label>
                                <input type="text" id="jobType" name="jobType" value="{{ $job->jobType }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="location"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Location</label>
                                <input type="text" id="location" name="location" value="{{ $job->locations }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div>
                                <label for="email"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Send
                                    letter to:</label>
                                <input type="text" id="email" name="email" value="{{ $job->email }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div>
                                <label for="remote"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Remote</label>
                                <select name="remote" id="remote"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="yes" {{ $job->remote == 'yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="no" {{ $job->remote == 'no' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div>
                                <label for="validThrough"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Valid:
                                    Day/Month/Year</label>
                                <input type="number" id="day" name="day" value="{{ $job->day }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 mr-1 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="1" max="31" style="width:80px">
                                <input type="number" id="month" name="month" value="{{ $job->month }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 mr-1 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="1" max="12" style="width:80px">
                                <input type="number" id="year" name="year" value="{{ $job->year }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    min="2023" max="2024" style="width:100px">
                            </div>

                            <div>
                                <label for="aboutJob"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Description</label>
                                <textarea id="aboutJob
                                " name="aboutJob"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ $job->aboutJob }}</textarea>
                            </div>

                            <div>
                                <label for="minimumQualifications"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Minimum
                                    Qualifications</label>
                                <textarea id="minimumQualifications" name="minimumQualifications"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ str_replace("\n", '', $job->minimumQualifications) }}</textarea>
                            </div>

                            <div>
                                <label for="preferredQualifications"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Preferred
                                    Qualifications</label>
                                <textarea id="preferredQualifications" name="preferredQualifications"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ str_replace("\n", '', $job->preferredQualifications) }}</textarea>
                            </div>

                            <div>
                                <label for="responsibilities"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Responsibilities</label>
                                <textarea id="responsibilities" name="responsibilities"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ str_replace("\n", '', $job->responsibilities) }}</textarea>
                            </div>

                        </div>
                        <div class="block mb-2 ml-4 text-indigo-800 text-lg font-semibold dark:text-white">Created:
                            {{ $job->created_at->format('d M Y') }} by {{ $job->user->name }}.</label>
                        </div>
                        <div class="inline-block px-2 py-2">
                            <button type="submit"
                                class="bg-indigo-600 text-white ml-2 px-4 py-2 rounded-lg hover:bg-indigo-700">Update</button>
                        </div>
                    </form>

                    <form action="{{ route('destroy', $job->id) }}" method="post"
                        class="inline-block px-2 pb-2">
                        @csrf
                        @method('DELETE')
                        <!-- Delete button -->
                        <button type="submit"
                            class="delete-modal bg-gray-800 text-white ml-2 px-4 py-2 rounded-lg hover:bg-gray-700">Delete</button>
                        {{-- Custom built delete conformation modal --}}
                        <div id="popup-modal" tabindex="-1" 
                            {{-- If app shows a Css conflict, do not fix the repating style error, those are not the same css properties --}}
                            class="bg-indigo-900 bg-opacity-50 fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto h-screen flex items-center justify-center">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-hide="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
