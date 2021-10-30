<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected  $fillable=[
        'id','book_id','client_id','start_date','end_date'
    ];
    public function Book(){
        return $this->belongsTo(book::class,'book_id');
    }
    public function Client(){
        return $this->belongsTo(client::class,'client_id');
    }
}
