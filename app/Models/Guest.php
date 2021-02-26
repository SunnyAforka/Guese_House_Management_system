<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'ref_no',
        'email',
        'phone_no',
        'room_no',
        'room_type',
        'amnt_pd',
        'balance',
    ];
}
