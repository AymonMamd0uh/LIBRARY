<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'content','user_id',
      
    ];
    //note belongsTo one user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
