<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referal extends Model
{
    use HasFactory;
    protected $table= "referal";
    
    public function user_reffered(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
