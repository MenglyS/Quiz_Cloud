<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'messages'
    ];
}
