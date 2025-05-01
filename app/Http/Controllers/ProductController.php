<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.scan');
    }

    public function verify(Request $request)
    {
        $productCode = $request->input('product_code');
        
        // In a real application, this would check against a database
        $isAuthentic = $this->checkProductAuthenticity($productCode);
        
        return view('products.verify', [
            'productCode' => $productCode,
            'isAuthentic' => $isAuthentic
        ]);
    }

    public function verifyPage()
    {
        return view('products.verify-page');
    }

    public function howItWorks()
    {
        return view('products.how-it-works');
    }

    public function forBusinesses()
    {
        return view('products.for-businesses');
    }

    public function getStarted()
    {
        return view('products.get-started');
    }

    public function learnMore()
    {
        return view('products.learn-more');
    }

    private function checkProductAuthenticity($code)
    {
        // This is a mock implementation
        // In a real application, this would check against a database
        // For demo purposes:
        // - Codes starting with "AUTH" are authentic
        // - Codes starting with "FAKE" are counterfeit
        // - All other codes are checked by length
        if (str_starts_with(strtoupper($code), 'AUTH')) {
            return true;
        }
        if (str_starts_with(strtoupper($code), 'FAKE')) {
            return false;
        }
        return strlen($code) > 5;
    }
} 