<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'tin';
    protected $guarded = ['id','created_at','updated_at'];


    public function NewsType(){
        return $this->belongsTo(NewsType::class, 'id_loaitin');
    }
    public function Users(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
