@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-trustshield-blue py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Protect Your Brand From Counterfeits</h1>
                <p class="text-xl mb-8">Our advanced verification system helps brands and consumers detect counterfeit products with a simple scan or code check.</p>
                <div class="flex space-x-4">
                    <a href="/for-businesses" class="bg-white text-trustshield-blue px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-200 flex items-center">
                        For Businesses
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="bg-white/10 p-8 rounded-2xl">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-trustshield-blue" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-center mb-4">Verify Product Authenticity</h2>
                    <p class="text-gray-600 text-center mb-6">Enter the verification code to authenticate your product</p>
                    <form action="{{ route('products.verify') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="relative">
                            <input type="text" 
                                   name="product_code" 
                                   placeholder="Enter verification code"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-trustshield-blue"
                                   required>
                            <button type="submit" 
                                    class="absolute right-2 top-2 bg-trustshield-blue text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                                Verify
                            </button>
                        </div>
                        <p class="text-sm text-gray-500 text-center">Example: Try "AUTH123" for authentic or "FAKE123" for counterfeit</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-3xl font-bold text-trustshield-blue mb-2">$1.8T</div>
                <div class="text-gray-600">Global cost of counterfeits yearly</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-trustshield-blue mb-2">99.9%</div>
                <div class="text-gray-600">Verification accuracy rate</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-trustshield-blue mb-2">500+</div>
                <div class="text-gray-600">Brands protected</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-trustshield-blue mb-2">50M+</div>
                <div class="text-gray-600">Products verified monthly</div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-4">Comprehensive Anti-Counterfeit Solution</h2>
        <p class="text-xl text-gray-600 text-center mb-12">Protect your brand with our end-to-end counterfeit detection system</p>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-trustshield-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Secure Verification</h3>
                <p class="text-gray-600">Our unique verification codes use advanced encryption to ensure each product can be authenticated.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Mobile Authentication</h3>
                <p class="text-gray-600">Quick and easy verification through our mobile app or website using QR code scanning.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Tamper-Proof Database</h3>
                <p class="text-gray-600">All product data is stored in a secure, blockchain-based database that cannot be altered.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
                <p class="text-gray-600">Gain insights into product authenticity checks and identify potential counterfeit hotspots.</p>
            </div>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-4">How It Works</h2>
        <p class="text-xl text-gray-600 text-center mb-12">Our simple three-step process makes verification easy</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-2xl font-bold text-trustshield-blue mb-2">01</div>
                <h3 class="text-xl font-semibold mb-4">Secure Product Labeling</h3>
                <p class="text-gray-600">Every authentic product receives a unique, tamper-proof verification label with a QR code and alphanumeric code.</p>
            </div>
            
            <div class="text-center">
                <div class="text-2xl font-bold text-trustshield-blue mb-2">02</div>
                <h3 class="text-xl font-semibold mb-4">Simple Verification</h3>
                <p class="text-gray-600">Consumers scan the QR code or enter the verification code on our platform to check authenticity instantly.</p>
            </div>
            
            <div class="text-center">
                <div class="text-2xl font-bold text-trustshield-blue mb-2">03</div>
                <h3 class="text-xl font-semibold mb-4">Instant Authentication</h3>
                <p class="text-gray-600">Our system instantly verifies the product against our secure database and shows detailed authentication results.</p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/learn-more" class="text-trustshield-blue font-semibold hover:text-blue-700 transition duration-200 flex items-center justify-center">
                Learn More
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-trustshield-blue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to protect your brand?</h2>
        <p class="text-xl text-white/80 mb-8">Join the growing number of businesses safeguarding their products and customers.</p>
        <a href="/get-started" class="bg-white text-trustshield-blue px-8 py-3 rounded-lg hover:bg-gray-100 transition duration-200 inline-flex items-center">
            Get Started Now
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>
@endsection 