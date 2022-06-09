<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipModel extends Model
{
    use HasFactory;
    protected $table= "membership";

    public function getmembershipfiles(){
        return $this->hasMany(MembershipFileStorageModel::class,'membership_id','id');
    }
}
