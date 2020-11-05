<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'warehouse',
        'location',
        'company',
        'area'
    ];

    public function items(){
        return$this->hasMany(Item::class, 'stored_in', 'id');
    }
}
