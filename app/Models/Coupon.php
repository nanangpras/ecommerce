<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'code',
        'type',
        'discount_rate',
        'counter',
        'start_date',
        'end_date',
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'id');
    }
}
