<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function notes_log()
    {
        return $this->hasOne(TransactionLog::class);
    }

    public function coupon()
    {
        return $this->hasOne(Coupon::class,'id','coupon_id');
    }
}
