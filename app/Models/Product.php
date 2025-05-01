<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_code',
        'name',
        'brand',
        'batch_number',
        'production_date',
        'origin',
        'manufacturer',
        'category',
        'description',
        'is_authentic',
        'scan_count',
        'last_scanned_at'
    ];

    protected $casts = [
        'production_date' => 'date',
        'is_authentic' => 'boolean',
        'last_scanned_at' => 'datetime'
    ];

    public function incrementScanCount()
    {
        $this->update([
            'scan_count' => $this->scan_count + 1,
            'last_scanned_at' => now()
        ]);
    }
} 