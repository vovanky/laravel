<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $fillable =[
        'name',
        'status',
        'id_theloai',
    ];

    public function Category(){
        return $this->belongsTo(Category::class,'id_theloai');
    }
    public function News(){
        return $this->hasMany(News::class);
    }
    public function Advertisement(){
        return $this->hasMany(Advertisement::class);
    }
}
