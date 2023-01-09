<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['provinsi'] ?? false, function($query,$provinsi){
                return $query->whereHas('profinsi', function($query) use ($provinsi) {
                    $query->where('id', $provinsi);
                });
            });
    }

    public function provinsi(){
        return $this->belongsTo(provinsi::class);
    }

    public function kecamatan(){
        return $this->hasMany(kecamatan::class);
    }

    public function desa(){
        return $this->hasMany(desa::class);
    }

}
