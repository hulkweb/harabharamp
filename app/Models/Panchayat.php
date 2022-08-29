<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panchayat extends Model
{
    use HasFactory;
    public function parliament()
    {
        return $this->belongsTo(Parliament::class,'parliament');
    }
    protected $fillable = ['name', 'pincode', 'phone', 'email', 'user_id', 'parliament', 'district', 'mandal'];
}
