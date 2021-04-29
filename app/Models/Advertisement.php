<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'quangcao';
    protected $guarded = [ 'id','created_at','updated_at' ];
    public function NewsType(){
        return $this->belongsTo(NewsType::class, 'id_loaitin');
    }
}
