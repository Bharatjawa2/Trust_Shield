@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Product Authentication Scanner</h1>
            <p class="text-gray-600 mt-2">Scan QR code or upload an image to verify product authenticity</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Scanner/Upload Tabs -->
            <div class="border-b border-gray-200">
                <nav class="flex">
                    <button id="scanTab" class="flex-1 py-4 px-6 text-center border-b-2 border-trustshield-blue text-trustshield-blue font-semibold">
                        Scan QR Code
                    </button>
                    <button id="uploadTab" class="flex-1 py-4 px-6 text-center text-gray-500 font-semibold">
                        Upload Image
                    </button>
                </nav>
            </div>

            <!-- Scanner Section -->
            <div id="scannerSection" class="p-6">
                <div class="relative flex justify-center items-center">
                    <div id="reader" class="w-full max-w-2xl h-[500px] bg-black rounded-lg overflow-hidden relative">
                        <div class="scanning-animation absolute w-full h-1 bg-green-500"></div>
                        <div class="absolute inset-0 border-4 border-white rounded-lg"></div>
                    </div>
                </div>
                <div class="mt-4 text-center text-sm text-gray-500">
                    Position the QR code within the frame
                </div>
            </div>

            <!-- Upload Section -->
            <div id="uploadSection" class="p-6 hidden">
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                    <input type="file" id="imageUpload" accept="image/*" class="hidden">
                    <label for="imageUpload" class="cursor-pointer">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-600">Click to upload an image</span>
                            <span class="text-sm text-gray-500 mt-2">or drag and drop</span>
                        </div>
                    </label>
                </div>
                <div id="uploadPreview" class="mt-4 hidden">
                    <img id="previewImage" class="max-w-full h-auto rounded-lg" src="" alt="Preview">
                </div>
            </div>

            <!-- Result Section -->
            <div id="result" class="p-6 border-t border-gray-200 hidden">
                <div class="text-center">
                    <div id="status" class="text-2xl font-bold mb-2"></div>
                    <div id="details" class="text-gray-600"></div>
                    <div class="mt-4">
                        <button onclick="resetScanner()" class="bg-trustshield-blue text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                            Scan Another
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .scanning-animation {
        animation: scanning 2s infinite;
    }
    @keyframes scanning {
        0% { transform: translateY(0); }
        50% { transform: translateY(100%); }
        100% { transform: translateY(0); }
    }
    .authentic {
        animation: pulse-green 1s infinite;
    }
    .counterfeit {
        animation: pulse-red 1s infinite;
    }
    @keyframes pulse-green {
        0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
        70% { box-shadow: 0 0 0 20px rgba(34, 197, 94, 0); }
        100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }
    @keyframes pulse-red {
        0% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7); }
        70% { box-shadow: 0 0 0 20px rgba(239, 68, 68, 0); }
        100% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
    }
</style>

<script src="https://unpkg.com/html5-qrcode"></script>
<script>
    let html5QrcodeScanner;
    const scanTab = document.getElementById('scanTab');
    const uploadTab = document.getElementById('uploadTab');
    const scannerSection = document.getElementById('scannerSection');
    const uploadSection = document.getElementById('uploadSection');
    const imageUpload = document.getElementById('imageUpload');
    const uploadPreview = document.getElementById('uploadPreview');
    const previewImage = document.getElementById('previewImage');

    // Tab switching
    scanTab.addEventListener('click', () => {
        scannerSection.classList.remove('hidden');
        uploadSection.classList.add('hidden');
        scanTab.classList.add('border-trustshield-blue', 'text-trustshield-blue');
        uploadTab.classList.remove('border-trustshield-blue', 'text-trustshield-blue');
        scanTab.classList.remove('text-gray-500');
        uploadTab.classList.add('text-gray-500');
        if (html5QrcodeScanner) {
            html5QrcodeScanner.resume();
        }
    });

    uploadTab.addEventListener('click', () => {
        scannerSection.classList.add('hidden');
        uploadSection.classList.remove('hidden');
        uploadTab.classList.add('border-trustshield-blue', 'text-trustshield-blue');
        scanTab.classList.remove('border-trustshield-blue', 'text-trustshield-blue');
        uploadTab.classList.remove('text-gray-500');
        scanTab.classList.add('text-gray-500');
        if (html5QrcodeScanner) {
            html5QrcodeScanner.pause();
        }
    });

    // Initialize scanner
    function initScanner() {
        html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", 
            { 
                fps: 10, 
                qrbox: 400,
                aspectRatio: 1.0,
                showTorchButtonIfSupported: true
            }
        );

        function onScanSuccess(decodedText, decodedResult) {
            const resultDiv = document.getElementById('result');
            const statusDiv = document.getElementById('status');
            const detailsDiv = document.getElementById('details');
            
            resultDiv.classList.remove('hidden');
            statusDiv.textContent = '🔍 Verifying...';
            detailsDiv.textContent = 'Analyzing product security features...';
            
            // Send to backend
            fetch('/verify-qr', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ qr_code: decodedText })
            })
            .then(response => response.json())
            .then(data => {
                if (data.authentic) {
                    resultDiv.classList.add('authentic');
                    resultDiv.classList.remove('counterfeit');
                } else {
                    resultDiv.classList.add('counterfeit');
                    resultDiv.classList.remove('authentic');
                }
                statusDiv.textContent = data.message;
                detailsDiv.textContent = data.details;
            })
            .catch(error => {
                statusDiv.textContent = '❌ COUNTERFEIT ALERT!';
                detailsDiv.textContent = 'WARNING: This product appears to be counterfeit. Please contact authorities.';
                resultDiv.classList.add('counterfeit');
            });
        }

        html5QrcodeScanner.render(onScanSuccess);
    }

    // Image upload handling
    imageUpload.addEventListener('change', async (e) => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = async (e) => {
                previewImage.src = e.target.result;
                uploadPreview.classList.remove('hidden');
                
                try {
                    // Use Html5Qrcode to decode from image
                    const html5Qrcode = new Html5Qrcode("reader");
                    const result = await html5Qrcode.scanFile(e.target.result, false);
                    
                    if (result) {
                        const resultDiv = document.getElementById('result');
                        const statusDiv = document.getElementById('status');
                        const detailsDiv = document.getElementById('details');
                        
                        resultDiv.classList.remove('hidden');
                        statusDiv.textContent = '🔍 Verifying...';
                        detailsDiv.textContent = 'Analyzing product security features...';
                        
                        // Send to backend
                        fetch('/verify-qr', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({ qr_code: result })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.authentic) {
                                resultDiv.classList.add('authentic');
                                resultDiv.classList.remove('counterfeit');
                            } else {
                                resultDiv.classList.add('counterfeit');
                                resultDiv.classList.remove('authentic');
                            }
                            statusDiv.textContent = data.message;
                            detailsDiv.textContent = data.details;
                        })
                        .catch(error => {
                            statusDiv.textContent = '❌ COUNTERFEIT ALERT!';
                            detailsDiv.textContent = 'WARNING: This product appears to be counterfeit. Please contact authorities.';
                            resultDiv.classList.add('counterfeit');
                        });
                    } else {
                        showError("No QR code found in the image");
                    }
                } catch (error) {
                    showError("Error scanning the image. Please try again.");
                }
            };
            reader.readAsDataURL(file);
        }
    });

    function showError(message) {
        const resultDiv = document.getElementById('result');
        const statusDiv = document.getElementById('status');
        const detailsDiv = document.getElementById('details');
        
        resultDiv.classList.remove('hidden');
        statusDiv.textContent = '❌ COUNTERFEIT ALERT!';
        detailsDiv.textContent = 'WARNING: This product appears to be counterfeit. Please contact authorities.';
        resultDiv.classList.add('counterfeit');
    }

    // Reset scanner
    function resetScanner() {
        const resultDiv = document.getElementById('result');
        resultDiv.classList.add('hidden');
        resultDiv.classList.remove('authentic', 'counterfeit');
        uploadPreview.classList.add('hidden');
        previewImage.src = '';
        imageUpload.value = '';
        
        if (html5QrcodeScanner) {
            html5QrcodeScanner.resume();
        }
    }

    // Initialize scanner when page loads
    document.addEventListener('DOMContentLoaded', initScanner);
</script>
@endsection 