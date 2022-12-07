<?php

namespace App\Models;

use App\Models\User;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class TarianDaerah extends Model
{
    use HasFactory, Sluggable;
    protected $guarded=['id'];

    public function province(){
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_tarian'
            ]
        ];
    }
}
