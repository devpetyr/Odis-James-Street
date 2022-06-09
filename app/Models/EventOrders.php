<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventOrders extends Model
{
    use HasFactory;
    protected $table= "event_orders";

    public function eventDetail(){
        return $this->hasOne(EventsModel::class,'id','event_id')->OrderBy('id','Desc');
    }

}
