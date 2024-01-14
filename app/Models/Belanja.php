<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function Produks()
    {
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
