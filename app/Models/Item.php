<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'jumlah',
        'company_item',
        'stored_in',
        'area_used'
    ];

    public function stored(){
        return $this->belongsTo(Warehouse::class, 'stored_in', 'id');
    }
}
