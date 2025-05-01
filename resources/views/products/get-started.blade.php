@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900 mb-8">Get Started with TrustShield</h1>
                
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trustshield-blue text-white">
                                <span class="text-xl font-bold">1</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Create an Account</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Sign up for a TrustShield account to start protecting your products. Choose between our free and premium plans based on your needs.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trustshield-blue text-white">
                                <span class="text-xl font-bold">2</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Register Your Products</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Add your products to the TrustShield system. Each product will receive a unique QR code and serial number for authentication.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trustshield-blue text-white">
                                <span class="text-xl font-bold">3</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Print and Apply Labels</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Print the unique QR codes and apply them to your products. Each label contains tamper-proof features to prevent counterfeiting.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-trustshield-blue text-white">
                                <span class="text-xl font-bold">4</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Start Protecting</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Your products are now protected! Customers can verify authenticity by scanning the QR code with their smartphones.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-trustshield-blue hover:bg-blue-700">
                        Create Your Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 