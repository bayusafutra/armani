<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Province;
use App\Models\SukuAdat;
use App\Models\RumahAdat;
use App\Models\MakananKhas;
use App\Models\PakaianAdat;
use App\Models\TarianDaerah;
use App\Models\SenjataDaerah;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function province(){
        return $this->hasMany(Province::class, 'user_id');
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
}
