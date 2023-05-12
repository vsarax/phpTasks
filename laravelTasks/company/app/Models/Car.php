<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'year', 'available', 'customer_id'];
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
