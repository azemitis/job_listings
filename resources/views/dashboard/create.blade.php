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
                <div class="my-4 text-bold text-3xl text-indigo-800 text-left">CREATE JOB LISTING</div>
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

                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2 px-4 py-4">
                            <div>
                                <label for="title"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="organization"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Organization</label>
                                <input type="text" id="organization" name="organization" value="{{ old('organization') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="degree"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Degree</label>
                                <input type="text" id="degree" name="degree" value="{{ old('degree') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="jobType"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Type</label>
                                <input type="text" id="jobType" name="jobType" value="{{ old('jobType') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="locations"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Location</label>
                                <input type="text" id="locations" name="locations" value="{{ old('locations') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Send
                                    email to:</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="remote"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Remote</label>
                                    <select name="remote" id="remote" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="no" {{ old('remote', $job->remote) == 'no' ? 'selected' : '' }}>No</option>
                                    <option value="yes" {{ old('remote', $job->remote) == 'yes' ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>
                            <div>
                                <label for="closingDate"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Valid:
                                    Day/Month/Year</label>
                                    <input type="date" id="closingDate" name="closingDate" onchange="setDayMonthYear()"
                                    min="{{ now()->toDateString() }}" max="{{ now()->addMonths(3)->toDateString() }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ old('closingDate', $job->closingDate) }}">
                                <input type="number" id="day" name="day" hidden>
                                <input type="number" id="month" name="month" hidden>
                                <input type="number" id="year" name="year" hidden>

                                {{-- Combines 3 integers to form date --}}
                                <script>
                                    function setDayMonthYear() {
                                        let closingDate = new Date(document.getElementById("closingDate").value);
                                        document.getElementById("day").value = closingDate.getDate();
                                        document.getElementById("month").value = closingDate.getMonth() + 1;
                                        document.getElementById("year").value = closingDate.getFullYear();
                                    }
                                </script>
                            </div>
                            <div>
                                <label for="aboutJob"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Job
                                    Description</label>
                                <textarea id="aboutJob" name="aboutJob" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ old('aboutJob') }}</textarea>
                            </div>
                            <div>
                                <label for="minimumQualifications"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Minimum
                                    Qualifications</label>
                                <textarea id="minimumQualifications" name="minimumQualifications"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;"> {{ old('minimumQualifications') }} </textarea>
                            </div>
                            <div>
                                <label for="preferredQualifications"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Preferred
                                    Qualifications</label>
                                <textarea id="preferredQualifications" name="preferredQualifications" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ old('preferredQualifications') }}</textarea>
                            </div>
                            <div>
                                <label for="responsibilities"
                                    class="block mb-2 ml-2 text-indigo-800 text-lg font-semibold dark:text-white">Responsibilities</label>
                                <textarea id="responsibilities" name="responsibilities" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    style="resize: none; width: 100%; height: 300px; padding: 5px;">{{ old('responsibilities') }}</textarea>
                            </div>
                        </div>
                        <div class="text-center my-4">
                            <button type="submit" style="width: 100%"
                                class="bg-indigo-800 text-white py-2 px-4 rounded-lg hover:bg-indigo-700">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
