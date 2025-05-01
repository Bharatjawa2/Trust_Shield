@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-8">Enterprise Authentication Solutions</h1>
            <p class="text-xl text-gray-600 mb-12">Protect your brand and products with our advanced authentication system</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold mb-2">Advanced Security</h3>
                <p class="text-gray-600">State-of-the-art QR code authentication system with real-time verification and counterfeit detection.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
                <p class="text-gray-600">Track product authentication attempts, identify counterfeit hotspots, and monitor your brand's security.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="text-xl font-semibold mb-2">Global Protection</h3>
                <p class="text-gray-600">Protect your products worldwide with our cloud-based authentication system.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-xl p-8 mb-12">
            <h2 class="text-2xl font-bold mb-6">How It Works</h2>
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            1
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Unique QR Codes</h3>
                        <p class="mt-2 text-gray-600">Each product receives a unique, encrypted QR code that cannot be replicated.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            2
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Real-time Verification</h3>
                        <p class="mt-2 text-gray-600">Instant authentication checks against our secure database.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            3
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium">Counterfeit Detection</h3>
                        <p class="mt-2 text-gray-600">Advanced algorithms detect and flag suspicious authentication attempts.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h2 class="text-2xl font-bold mb-6">Ready to Protect Your Brand?</h2>
            <p class="text-gray-600 mb-8">Contact our sales team to learn more about our enterprise solutions.</p>
            <a href="/contact" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                Contact Sales
            </a>
        </div>
    </div>
</div>
@endsection 