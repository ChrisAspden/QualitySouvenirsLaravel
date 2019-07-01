<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souvenir extends Model
{
    protected $fillable=[

        "name", "description", "supplier_id", "category_id", "Quantity", "ItemPrice", "ImagePath", "IsInCart"
    ];



    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo{

        return $this->belongsTo("app/Supplier", "supplier_id", "supplier_id");
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo{

        return $this->belongsTo("app/Category", "category_id", "category_id");
    }


}
