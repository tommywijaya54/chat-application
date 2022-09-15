<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStudent extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(CustomerParent::class, 'customer_parent_id');
    }
}
