@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold mb-4">Product Verification</h1>
        <p class="text-gray-600">Ensure your product is authentic by verifying its unique identification code</p>
    </div>

    <!-- Verification Options -->
    <div class="flex gap-4 mb-8">
        <button class="flex-1 py-4 px-6 bg-white rounded-lg border-2 border-trustshield-blue text-trustshield-blue font-semibold flex items-center justify-center gap-2">
            <span class="text-xl">1</span>
            Enter Code
        </button>
        <a href="{{ route('scanner') }}" class="flex-1 py-4 px-6 bg-gray-50 rounded-lg border-2 border-gray-200 text-gray-500 font-semibold flex items-center justify-center gap-2 hover:bg-gray-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Scan QR Code
        </a>
    </div>

    <!-- Verification Form -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-12">
        <div class="flex justify-center mb-6">
            <svg class="w-12 h-12 text-trustshield-blue" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2L4 5v6.09c0 5.05 3.41 9.76 8 10.91 4.59-1.15 8-5.86 8-10.91V5l-8-3z"/>
            </svg>
        </div>
        <h2 class="text-xl font-semibold text-center mb-2">Verify Product Authenticity</h2>
        <p class="text-gray-600 text-center mb-6">Enter the verification code to authenticate your product</p>
        
        <form action="{{ route('products.verify') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="relative mb-2">
                <input type="text" 
                       name="product_code" 
                       placeholder="Enter verification code"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-trustshield-blue"
                       required>
                <button type="submit" 
                        class="absolute right-2 top-2 bg-trustshield-blue text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Verify
                </button>
            </div>
            <p class="text-sm text-gray-500 text-center">Example: Try "AUTH123" for authentic or "FAKE123" for counterfeit</p>
        </form>
    </div>

    <!-- Where to find codes section -->
    <div>
        <h2 class="text-xl font-semibold mb-8">Where to find verification codes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="bg-gray-200 rounded-lg h-32 mb-4 flex items-center justify-center">
                    <span class="text-gray-400"><img src="https://thumbs.dreamstime.com/b/isolated-vector-icon-white-background-qr-code-pictogram-scanning-reading-qrcode-234131823.jpg"/></span>
                </div>
                <p class="text-gray-600">Look for the QR code on the product packaging</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="bg-gray-200 rounded-lg h-32 mb-4 flex items-center justify-center">
                    <span class="text-gray-400"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6RCaPEviUQMGt5HZnVUz4Y5rSO0Mb5nJxRRc4nhUTngwirkmtLB4Yr_6AAQhlzged4Uw&usqp=CAU"/></span>
                </div>
                <p class="text-gray-600">Find the unique code on the security label</p>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="bg-gray-200 rounded-lg h-32 mb-4 flex items-center justify-center">
                    <span class="text-gray-400"><img src="https://www.keyfactor.com/wp-content/uploads/1034503.png"/></span>
                </div>
                <p class="text-gray-600">Check the authenticity certificate for the verification code</p>
            </div>
        </div>
    </div>
</div>
@endsection 