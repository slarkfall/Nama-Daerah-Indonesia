<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    use HasFactory;
    protected $fillable = ['id','name'];
    public $timestamps = false;

    public function provinsi(){
        return $this->belongsTo(provinsi::class);
    }

    public function kabupaten(){
        return $this->belongsTo(kabupaten::class);
    }

    public function kecamatan(){
        return $this->belongsTo(kecamatan::class);
    }
}
