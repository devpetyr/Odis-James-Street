<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipFileStorageModel extends Model
{
    use HasFactory;
    protected $table= "membership_filestorage";

    public function getMentorship(){
        return $this->hasOne(MembershipModel::class,'id','membership_id');
    }
}
