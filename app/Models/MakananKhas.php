<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananKhas extends Model
{
    use HasFactory;
    public function Province(){
        return $this->belongsTo(Province::class, 'province_id');
    }
}
