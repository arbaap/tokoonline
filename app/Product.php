<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function outdoor()
    {
        return $this->belongsTo(Outdoor::class, 'outdoor_id', 'id');
    }
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'product_id', 'id');
    }
}
