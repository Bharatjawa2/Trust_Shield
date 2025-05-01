@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-center mb-8">Verification Results</h1>
        
        <div class="text-center mb-8">
            <p class="text-gray-600 mb-4">Product Code: <span class="font-semibold">{{ $productCode }}</span></p>
            
            @if($isAuthentic)
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <span class="block sm:inline">✅ This product is authentic!</span>
                </div>
                <p class="text-green-600">This product has been verified as genuine. Thank you for using TrustShield!</p>
            @else
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <span class="block sm:inline">⚠️ Warning: This product may be counterfeit!</span>
                </div>
                <p class="text-red-600">This product code could not be verified. Please contact the manufacturer for further assistance.</p>
            @endif
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('products.index') }}" 
               class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-200">
                Verify Another Product
            </a>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">What to do next?</h2>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>If you believe this is a genuine product, please contact our support team</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span>Report suspicious products to help us improve our detection system</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection 