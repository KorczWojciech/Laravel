<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected  $fillable=[
        'id','title','author','date'
    ];
    public function Author(){
        return $this->belongsTo(author::class,'author');
    }
}
