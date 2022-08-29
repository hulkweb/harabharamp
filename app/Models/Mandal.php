<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandal extends Model
{
    use HasFactory;
    protected $fillable = ['mandal', 'district_id', 'assembly_id'];
}
