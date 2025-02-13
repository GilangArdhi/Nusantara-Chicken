<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFeedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'idUser',
        'feedback'
    ];
    use HasFactory;
}
