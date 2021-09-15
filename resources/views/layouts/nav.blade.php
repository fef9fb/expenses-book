<nav x-data="{ open: false }" class="nav">
    <!-- Primary Navigation Menu -->
    <div class="nav__inner-wrapper">
        <div class="nav__logo">
            <a href="{{ route('home') }}">
                Expenses Book
            </a>
        </div>

        <div class="nav__menu">
            <!-- Settings Dropdown -->
            @if (Route::has('login'))
                @auth
                    <div class="nav__menu--item">
                        <a href="#">
                            入力
                        </a>
                    </div>
                    <div class="nav__menu--item">
                        <a href="#">
                            レポート
                        </a>
                    </div>
                    <div class="nav__menu--item">
                        <a href="#">
                            設定
                        </a>
                    </div>
                    <div class="nav__menu--item">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                    <div class="nav__menu--item">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="nav__menu--item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    </div>

                    @if (Route::has('register'))
                        <div>
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        </div>
                    @endif

                @endauth
            @endif
        </div>


        <!-- Hamburger -->
        {{--        <div class="-mr-2 flex items-center sm:hidden">--}}
        {{--            <button @click="open = ! open"--}}
        {{--                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
        {{--                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
        {{--                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"--}}
        {{--                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
        {{--                          d="M4 6h16M4 12h16M4 18h16"/>--}}
        {{--                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"--}}
        {{--                          stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>--}}
        {{--                </svg>--}}
        {{--            </button>--}}
        {{--        </div>--}}
    </div>

    <!-- Responsive Navigation Menu -->
    {{--    <div :class="{'block': open, 'hidden': ! open}" class="">--}}
    {{--        <div class="pt-2 pb-3 space-y-1">--}}
    {{--            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
    {{--                {{ __('Dashboard') }}--}}
    {{--            </x-responsive-nav-link>--}}
    {{--        </div>--}}

    {{--        <!-- Responsive Settings Options -->--}}

    {{--        @if (Route::has('login'))--}}
    {{--            @auth--}}
    {{--                <div class="pt-4 pb-1 border-t border-gray-200">--}}
    {{--                    <div class="px-4">--}}
    {{--                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
    {{--                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
    {{--                    </div>--}}

    {{--                    <div class="mt-3 space-y-1">--}}
    {{--                        <!-- Authentication -->--}}
    {{--                        <form method="POST" action="{{ route('logout') }}">--}}
    {{--                            @csrf--}}

    {{--                            <x-responsive-nav-link :href="route('logout')"--}}
    {{--                                                   onclick="event.preventDefault();--}}
    {{--                                        this.closest('form').submit();">--}}
    {{--                                {{ __('Log Out') }}--}}
    {{--                            </x-responsive-nav-link>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @else--}}
    {{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

    {{--                @if (Route::has('register'))--}}
    {{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
    {{--                @endif--}}
    {{--            @endauth--}}
    {{--        @endif--}}
    {{--    </div>--}}
</nav>
