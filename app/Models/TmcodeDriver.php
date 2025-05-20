<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmcodeDriver extends Model
{
    use HasFactory;
    protected $table = 'tmcode_driver';

    protected $fillable = ['driver_id', 'tm_code_id', 'status'];

}
