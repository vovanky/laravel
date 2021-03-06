<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table = 'tin';
    protected $guarded = ['id','created_at','updated_at'];
    public $timestamps = true;

    public function Theloai(){
        return $this->hasOne(Theloai::class,'id_theloai');
    }
    public function Loaitin(){
        return $this->hasOne(Loaitin::class,'id_loaitin');
    }
}
