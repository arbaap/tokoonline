<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    public function sliders()
    {
        return $this->hasMany(slider::class, 'slider_id', 'id');
    }
}
