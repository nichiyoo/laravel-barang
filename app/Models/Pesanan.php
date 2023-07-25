<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'pesanan';
    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}
