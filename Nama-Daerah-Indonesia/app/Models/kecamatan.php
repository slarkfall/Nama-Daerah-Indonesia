<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['id','name'];
    public $timestamps = false;

    public function kabupaten(){
        return $this->belongsTo(kabupaten::class);
    }

    public function desa(){
        return $this->hasMany(desa::class);
    }

}
