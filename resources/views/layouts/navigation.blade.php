<!-- Navigation -->
<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <svg class="w-8 h-8 text-trustshield-blue" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3zm0 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                    </svg>
                    <span class="ml-2 text-xl font-bold text-gray-900">TrustShield</span>
                </a>
            </div>

            <!-- Navigation Links - Centered -->
            <div class="flex-1 flex items-center justify-center">
                <div class="flex space-x-8">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-gray-900 hover:text-trustshield-blue">
                        Home
                    </a>
                    <a href="{{ route('products.verify-page') }}" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-gray-900 hover:text-trustshield-blue">
                        Verify Product
                    </a>
                    <a href="{{ route('products.how-it-works') }}" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-gray-900 hover:text-trustshield-blue">
                        How It Works
                    </a>
                    <a href="{{ route('scanner') }}" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-gray-900 hover:text-trustshield-blue">
                        QR Scanner
                    </a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 text-sm font-bold text-gray-900 hover:text-trustshield-blue">
                            Dashboard
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Login/Signup Buttons -->
            <div class="flex items-center sm:ml-6">
                @guest
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="ml-4 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-trustshield-blue rounded-lg hover:bg-blue-700">
                        Sign up
                    </a>
                @else
                    <div class="ml-3 relative" x-data="{ open: false }" @click.away="open = false">
                        <div>
                            <button @click="open = !open" type="button" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none">
                                <span>Hi, {{ Auth::user()->name }}</span>
                                <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" style="display: none;">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                Home
            </a>
            <a href="{{ route('products.verify-page') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                Verify Product
            </a>
            <a href="{{ route('products.how-it-works') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                How It Works
            </a>
            <a href="{{ route('scanner') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                QR Scanner
            </a>
            @auth
                <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                    Dashboard
                </a>
            @endauth
        </div>

        <!-- Mobile Login/Signup -->
        @guest
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="space-y-1">
                    <a href="{{ route('login') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                        Sign up
                    </a>
                </div>
            </div>
        @else
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">Hi, {{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @endguest
    </div>
</nav> 