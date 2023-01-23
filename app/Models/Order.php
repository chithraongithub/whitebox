<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customerNumber','customerNumber');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'orderNumber','orderNumber');
    }
}
