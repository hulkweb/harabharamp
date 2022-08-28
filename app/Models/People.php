<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "peoples";
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'pincode',
        'place',
        'gender',
        'birthday',

        'event_id'
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
