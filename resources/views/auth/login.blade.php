@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-white to-blue-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-300 border border-blue-100">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-blue-800 mb-2">
                 Welcome back
            </h2>
            <p class="text-blue-600">✨ Sign in to continue your journey</p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-blue-700 mb-1">📧 Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required 
                        class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition duration-200 shadow-sm hover:shadow-md @error('email') border-red-500 @enderror" 
                        placeholder="Enter your email">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-blue-700 mb-1">🔒 Password</label>
                    <input id="password" name="password" type="password" required 
                        class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition duration-200 shadow-sm hover:shadow-md @error('password') border-red-500 @enderror" 
                        placeholder="Enter your password">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" 
                        class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-blue-200 rounded transition duration-200">
                    <label for="remember" class="ml-2 block text-sm text-blue-700">
                         Remember me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-blue-500 hover:text-blue-600 transition duration-200">
                        🔑 Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg hover:shadow-xl text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 transition duration-200 transform hover:scale-[1.02]">
                     Sign in
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-blue-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-blue-500 hover:text-blue-600 transition duration-200">
                        👉 Sign up
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection 