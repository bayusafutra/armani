<?php

namespace App\Models;

use App\Models\User;
use App\Models\SukuAdat;
use App\Models\RumahAdat;
use App\Models\MakananKhas;
use App\Models\PakaianAdat;
use App\Models\TarianDaerah;
use App\Models\SenjataDaerah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Province extends Model
{
    use HasFactory, Sluggable;

    protected $guarded=['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name_provinsi', 'like', '%' . $search . '%')
                           ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });
    }

    public function makanankhas(){
        return $this->hasMany(MakananKhas::class, 'province_id');
    }

    public function pakaianadat(){
        return $this->hasMany(PakaianAdat::class, 'province_id');
    }

    public function rumahadat(){
        return $this->hasMany(RumahAdat::class, 'province_id');
    }

    public function senjatadaerah(){
        return $this->hasMany(SenjataDaerah::class, 'province_id');
    }

    public function sukuadat(){
        return $this->hasMany(SukuAdat::class, 'province_id');
    }

    public function tariandaerah(){
        return $this->hasMany(TarianDaerah::class, 'province_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_provinsi'
            ]
        ];
    }
}
