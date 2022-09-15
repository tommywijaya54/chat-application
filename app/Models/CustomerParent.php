<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerParent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'birthdate',
        'nik',
        'note'
    ];

    public function students()
    {
        return $this->hasMany(CustomerStudent::class, 'customer_parent_id');
    }
}
