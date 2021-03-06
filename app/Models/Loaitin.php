<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $guarded = ['id','created_at','updated_at'];

    public function Theloai(){
        return $this->hasOne(Theloai::class,'id_theloai');
    }
    public function Tin(){
        return $this->hasMany(Tin::class,'id_laoitin');
    }
}
