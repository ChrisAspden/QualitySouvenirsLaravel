<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[

        "Customer_ID", "OrderStatus", "Subtotal", "GrandTotal", "Date"
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo{

        return $this->belongsTo("App/Customer", "Customer_ID", "Customer_ID");
    }
}
