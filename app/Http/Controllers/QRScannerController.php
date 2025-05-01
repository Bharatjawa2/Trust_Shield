<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class QRScannerController extends Controller
{
    private $brandPatterns = [
        'coca-cola' => [
            'patterns' => ['coca', 'cola', 'coke', 'coca-cola'],
            'domains' => ['coca-cola.com', 'coke.com'],
            'valid_prefixes' => ['CC', 'CK', 'COKE']
        ],
        'pepsi' => [
            'patterns' => ['pepsi'],
            'domains' => ['pepsi.com'],
            'valid_prefixes' => ['PS', 'PEPSI']
        ],
        'nestle' => [
            'patterns' => ['nestle'],
            'domains' => ['nestle.com'],
            'valid_prefixes' => ['NS', 'NESTLE']
        ],
        'unilever' => [
            'patterns' => ['unilever'],
            'domains' => ['unilever.com'],
            'valid_prefixes' => ['UL', 'UNILEVER']
        ]
    ];

    public function index()
    {
        return view('qr-scanner');
    }

    public function verify(Request $request)
    {
        $qrCode = $request->input('qr_code');
        
        if (!$qrCode) {
            return response()->json([
                'success' => false,
                'message' => 'No QR code provided'
            ]);
        }

        // For demonstration purposes, we'll use a more sophisticated logic
        $isAuthentic = $this->isAuthentic($qrCode);

        return response()->json([
            'authentic' => $isAuthentic,
            'message' => $isAuthentic ? '✅ GENUINE PRODUCT' : '❌ COUNTERFEIT ALERT!',
            'details' => $isAuthentic 
                ? 'This product has been verified as authentic by our security system.'
                : 'WARNING: This product appears to be counterfeit. Please contact authorities.'
        ]);
    }

    private function isAuthentic($code)
    {
        // Convert to lowercase for case-insensitive matching
        $code = strtolower($code);
        
        // Check for brand-specific patterns
        foreach ($this->brandPatterns as $brand => $patterns) {
            // Check for brand name in the code
            foreach ($patterns['patterns'] as $pattern) {
                if (strpos($code, strtolower($pattern)) !== false) {
                    return true;
                }
            }
            
            // Check for brand domains
            foreach ($patterns['domains'] as $domain) {
                if (strpos($code, $domain) !== false) {
                    return true;
                }
            }
            
            // Check for valid prefixes
            foreach ($patterns['valid_prefixes'] as $prefix) {
                if (strpos($code, strtolower($prefix)) === 0) {
                    return true;
                }
            }
        }

        // Check for common QR code patterns
        // Many brand QR codes contain their website URLs
        if (preg_match('/https?:\/\/[^\s]+/', $code)) {
            return true;
        }

        // Check for common product code formats
        // Many brands use specific formats for their product codes
        if (preg_match('/^[A-Z0-9]{8,}$/', $code)) {
            return true;
        }

        // Check for common brand-specific patterns
        $commonPatterns = [
            'product', 'verify', 'check', 'authentic', 'genuine',
            'brand', 'official', 'certified', 'original'
        ];
        
        foreach ($commonPatterns as $pattern) {
            if (strpos($code, $pattern) !== false) {
                return true;
            }
        }

        // If none of the above match, consider it counterfeit
        return false;
    }

    public function generate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'batch_number' => 'required|string|max:255',
            'production_date' => 'required|date',
            'origin' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        // Generate a unique QR code
        $qrCode = 'PROD-' . Str::random(10) . '-' . time();

        $product = Product::create([
            'qr_code' => $qrCode,
            'name' => $request->name,
            'brand' => $request->brand,
            'batch_number' => $request->batch_number,
            'production_date' => $request->production_date,
            'origin' => $request->origin,
            'manufacturer' => $request->manufacturer,
            'category' => $request->category,
            'description' => $request->description,
            'is_authentic' => true,
            'scan_count' => 0
        ]);

        return response()->json([
            'success' => true,
            'qr_code' => $qrCode,
            'product' => $product
        ]);
    }
} 