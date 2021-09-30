<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
    public $fillable = ['day', 'hour', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
