<aside class="bg-indigo-900 bg-opacity-80">
    <nav class="p-5">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
        <div>
            <div class="flex flex-col w-56 bg-indigo-900  text-white rounded-r-3xl overflow-hidden mt-7">
                <div class="flex items-center justify-center h-20 shadow-md">
                    <h1 class="text-3xl uppercase text-white">Corp</h1>
                </div>
                <ul class="flex flex-col py-4">
                    <li>
                        <a href="/dashboard"
                            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-200">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white">
                                <i class="bx bx-home"></i></span>
                            <span class="text-lg font-medium">All Jobs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('create') }}"
                            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-200">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white">
                                <i class="bx bx-plus"></i>
                            </span>
                            <span class="text-lg font-medium">Create New Job</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}"
                            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-200">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white">
                                <i class="bx bxs-user"></i>
                            </span>
                            <span class="text-lg font-medium">Users</span>
                        </a>
                    </li>                    
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <i class=""></i></span>
                        <span class="text-sm font-medium"></span>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-200"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i
                                    class="bx bx-log-out"></i></span>
                            <span class="text-lg font-medium">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</aside>
