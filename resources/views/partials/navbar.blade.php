    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#" class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open">
                Menu <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div
                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-start text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="/"
                    class="hover:text-purple-700 py-2 px-4 mx-2 focus:ring focus:ring-purple-500 active:text-purple-800">Home</a>
                <a href="/" class="hover:text-purple-700 py-2 px-4 mx-2">About</a>
                <a href="/" class="hover:text-purple-700 py-2 px-4 mx-2">Profile</a>
                <a href="/posts" class="hover:text-purple-700 py-2 px-4 mx-2">Blog</a>
            </div>
            <div
                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-end text-sm font-bold uppercase mt-0 px-6 py-2">
                @if (Route::has('login'))
                    {{-- <a class="hover:text-slate-400 py-2 px-10 mx-52"> --}}
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-purple-700 py-2 px-4 mx-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-purple-700 py-2 px-4 mx-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-white py-2 px-4 mx-2 bg-purple-700 rounded-xl shadow hover:bg-purple-800 focus:ring focus:ring-purple-400">Register</a>
                        @endif
                    @endauth
                    {{-- </a> --}}
                @endif
            </div>
        </div>
    </nav>
