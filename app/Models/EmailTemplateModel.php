<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplateModel extends Model
{
    use HasFactory;
    protected $table= "email_templates";
}
