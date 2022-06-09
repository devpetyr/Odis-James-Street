<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table= "orders";

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function membership(){
        return $this->hasOne(MembershipModel::class,'id','membership_id');
    }

}
