<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsertableModal extends Model
{
    use HasFactory;

    protected $table ="usertablemodals";
    protected $fillable = ['id' ,'address', 'company', 'job_title'];
}
