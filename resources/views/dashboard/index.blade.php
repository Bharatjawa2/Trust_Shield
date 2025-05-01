@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p class="text-gray-600">Overview of your anti-counterfeit system</p>
        </div>
        <div class="flex gap-4">
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Export Data
            </button>
            <button class="px-4 py-2 bg-trustshield-blue text-white rounded-lg hover:bg-blue-700">
                Generate Report
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 border border-gray-100">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-gray-500">Total Verifications</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <div class="mb-2">
                <span class="text-2xl font-bold">867,493</span>
            </div>
            <div class="text-sm text-green-600">+12.5% from last month</div>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-gray-500">Authentic Verified</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="mb-2">
                <span class="text-2xl font-bold">842,619</span>
            </div>
            <div class="text-sm text-gray-600">97.1% success rate</div>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-gray-500">Counterfeit Alerts</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <div class="mb-2">
                <span class="text-2xl font-bold">24,874</span>
            </div>
            <div class="text-sm text-red-600">2.9% of total verifications</div>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-100">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-gray-500">Global Reach</h3>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                </svg>
            </div>
            <div class="mb-2">
                <span class="text-2xl font-bold">142</span>
            </div>
            <div class="text-sm text-gray-600">Countries with active users</div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-8">
        <nav class="flex gap-8">
            <button class="border-b-2 border-trustshield-blue text-trustshield-blue pb-4 font-medium">Overview</button>
            <button class="text-gray-500 pb-4 font-medium">Analytics</button>
            <button class="text-gray-500 pb-4 font-medium">Reports</button>
        </nav>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Verifications -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl border border-gray-100 p-6">
                <h2 class="text-lg font-semibold mb-6">Recent Verifications</h2>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Premium Watch</h3>
                                <p class="text-sm text-gray-500">ID: VRF-8761</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">2 minutes ago</p>
                            <p class="text-sm">New York, USA</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Designer Handbag</h3>
                                <p class="text-sm text-gray-500">ID: VRF-8760</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">15 minutes ago</p>
                            <p class="text-sm">London, UK</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Luxury Perfume</h3>
                                <p class="text-sm text-gray-500">ID: VRF-8759</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">47 minutes ago</p>
                            <p class="text-sm">Beijing, China</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Branded Sunglasses</h3>
                                <p class="text-sm text-gray-500">ID: VRF-8758</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">1 hour ago</p>
                            <p class="text-sm">Paris, France</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Premium Headphones</h3>
                                <p class="text-sm text-gray-500">ID: VRF-8757</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">2 hours ago</p>
                            <p class="text-sm">Mumbai, India</p>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-6 py-3 text-center text-gray-600 hover:text-gray-900 font-medium">
                    View All Verifications
                </button>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-8">
            <!-- Verification Methods -->
            <div class="bg-white rounded-xl border border-gray-100 p-6">
                <h2 class="text-lg font-semibold mb-6">Verification Methods</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">QR Code Scans</span>
                            <span class="font-medium">589,295</span>
                        </div>
                        <div class="h-2 bg-gray-100 rounded-full">
                            <div class="h-2 bg-trustshield-blue rounded-full" style="width: 68%"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">68% of total</p>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Manual Code Entry</span>
                            <span class="font-medium">208,198</span>
                        </div>
                        <div class="h-2 bg-gray-100 rounded-full">
                            <div class="h-2 bg-trustshield-blue rounded-full" style="width: 24%"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">24% of total</p>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">NFC Tag Scans</span>
                            <span class="font-medium">69,999</span>
                        </div>
                        <div class="h-2 bg-gray-100 rounded-full">
                            <div class="h-2 bg-trustshield-blue rounded-full" style="width: 8%"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">8% of total</p>
                    </div>
                </div>
            </div>

            <!-- Top Product Categories -->
            <div class="bg-white rounded-xl border border-gray-100 p-6">
                <h2 class="text-lg font-semibold mb-6">Top Product Categories</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                            <span>Luxury Accessories</span>
                        </div>
                        <span class="font-medium">231,455</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>Electronics</span>
                        </div>
                        <span class="font-medium">186,331</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span>Cosmetics</span>
                        </div>
                        <span class="font-medium">145,223</span>
                    </div>
                </div>
            </div>

            <!-- Trends -->
            <div class="bg-white rounded-xl border border-gray-100 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-semibold">Trends</h2>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                    </svg>
                </div>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium mb-1">Counterfeit Detection Rate</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-bold">2.9%</span>
                            <span class="text-sm text-red-600">+0.3% this month</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium mb-1">Verification Growth</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-bold">+12.5%</span>
                            <span class="text-sm text-green-600">Compared to last month</span>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium mb-1">Monthly Active Users</h3>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-bold">243,897</span>
                            <span class="text-sm text-green-600">+8.2% this month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Verification Map -->
    <div class="mt-8">
        <div class="bg-white rounded-xl border border-gray-100 p-6">
            <h2 class="text-lg font-semibold mb-6">Global Verification Map</h2>
            <div class="h-96 bg-gray-50 rounded-lg mb-6"></div>
            <div class="grid grid-cols-4 gap-4 text-center">
                <div>
                    <h3 class="font-medium">North America</h3>
                    <p class="text-gray-500">267,482</p>
                </div>
                <div>
                    <h3 class="font-medium">Europe</h3>
                    <p class="text-gray-500">288,921</p>
                </div>
                <div>
                    <h3 class="font-medium">Asia</h3>
                    <p class="text-gray-500">247,355</p>
                </div>
                <div>
                    <h3 class="font-medium">Other</h3>
                    <p class="text-gray-500">63,735</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 