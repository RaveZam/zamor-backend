<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory; 

    protected $fillable = [
        'user_id',
        'address_id',
        'status',
        'total_amount',
        'payment_method'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function address(){

        return $this->belongsTo(Address::class);
    }

    public function orderItems(){

        return $this->hasMany(OrderItem::class);
    }
        
}