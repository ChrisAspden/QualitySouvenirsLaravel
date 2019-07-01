<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable=[

        "Order_ID", "Souvenir_ID", "Price", "Quantity", "TotalCost"
    ];

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo{

        return $this->belongsTo("app/Order", "Order_ID", "Order_ID");
    }

    public function souvenir(): \Illuminate\Database\Eloquent\Relations\BelongsTo{

        return $this->belongsTo("app/Souvenir", "Souvenir_ID", "Souvenir_ID");
    }
}
