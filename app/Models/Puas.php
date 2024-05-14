<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puas extends Model
{
    use HasFactory;

    protected $table = 'puas';
    protected $primaryKey = 'id_pua';
    //public $incrementing = true;
    public $timestamps = false;
}