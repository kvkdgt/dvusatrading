<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiries';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'contactNumber',
        'message',
        'pending'
    ];
}
