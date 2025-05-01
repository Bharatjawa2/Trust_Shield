@extends('layouts.app')

@section('content')
<div class="bg-gray-50 pt-16 pb-8">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-3">How TrustShield Works</h1>
        <p class="text-gray-600 text-center text-lg">Understanding our anti-counterfeit system from end to end</p>
    </div>
</div>

<div class="max-w-6xl mx-auto px-4 py-16">
    <!-- Secure Product Database Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <div>
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-trustshield-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold">Secure Product Database</h2>
            </div>
            <p class="text-gray-600 mb-6">
                Every authentic product is registered in our secure, blockchain-based database with a unique identifier. The database stores crucial information about the product, including:
            </p>
            <ul class="space-y-4">
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-trustshield-blue mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>Product origin and manufacturing details</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-trustshield-blue mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>Supply chain checkpoints and timestamps</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-trustshield-blue mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>Unique verification codes for each individual item</span>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 text-trustshield-blue mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>Product specifications and authentication markers</span>
                </li>
            </ul>
            <p class="text-gray-600 mt-6">
                This immutable database ensures that product information cannot be tampered with, creating a reliable reference for all verification requests.
            </p>
        </div>
        <div class="bg-gray-50 rounded-xl p-8 flex items-center justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-4"></div>
                <div class="bg-white rounded-lg shadow-sm p-4 mb-4"></div>
                <div class="bg-white rounded-lg shadow-sm p-3 mb-4"></div>
                <p class="text-sm text-gray-500 text-center">Secure, tamper-proof database for product authentication</p>
            </div>
        </div>
    </div>

    <!-- Verification Process Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <div class="order-2 md:order-1 bg-gray-50 rounded-xl p-8 flex items-center justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-lg shadow-sm p-6 flex items-center justify-center mb-4">
                    <svg class="w-16 h-16 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                    </svg>
                </div>
                <div class="bg-white rounded-lg shadow-sm p-4 mb-4"></div>
                <div class="bg-white rounded-lg shadow-sm p-3 mb-4"></div>
                <p class="text-sm text-gray-500 text-center">Simple verification interface for consumers and retailers</p>
            </div>
        </div>
        <div class="order-1 md:order-2">
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-100 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-trustshield-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold">Verification Process</h2>
            </div>
            <p class="text-gray-600 mb-8">
                Our verification process is designed to be simple and effective, allowing anyone to quickly authenticate products:
            </p>
            <div class="space-y-8">
                <div class="flex gap-4">
                    <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-trustshield-blue font-semibold">1</span>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Scan or Enter Code</h3>
                        <p class="text-gray-600">Use our app or website to scan the QR code or enter the alphanumeric code found on the product.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-trustshield-blue font-semibold">2</span>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Instant Verification</h3>
                        <p class="text-gray-600">Our system quickly compares the code against our secure database to determine authenticity.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-trustshield-blue font-semibold">3</span>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">View Results</h3>
                        <p class="text-gray-600">Receive instant feedback on whether the product is authentic or potentially counterfeit.</p>
                    </div>
                </div>
            </div>
            <p class="text-gray-600 mt-8">
                Our system is constantly updated to stay ahead of counterfeiters, employing advanced machine learning to detect suspicious verification patterns.
            </p>
        </div>
    </div>

    <!-- Understanding Results Section -->
    <div>
        <h2 class="text-2xl font-bold text-center mb-3">Understanding Verification Results</h2>
        <p class="text-gray-600 text-center mb-12">Our system provides clear, easy-to-understand verification results to help users make informed decisions</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-green-50 rounded-xl p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="bg-green-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Authentic Product</h3>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold mb-2">What it means:</h4>
                    <p class="text-gray-600">The product has been verified as authentic and comes from the legitimate manufacturer. All security features match our database records.</p>
                </div>
            </div>
            
            <div class="bg-red-50 rounded-xl p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="bg-red-100 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Counterfeit Alert</h3>
                </div>
                <div class="mb-4">
                    <h4 class="font-semibold mb-2">What it means:</h4>
                    <p class="text-gray-600">The product could not be verified or has been flagged as potentially counterfeit. The code may be invalid or has been duplicated.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 