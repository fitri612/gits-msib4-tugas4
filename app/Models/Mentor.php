<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentorgits';

    protected $fillable = [
        'id_mentor',
        'name',
        'role',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id_mentor';
}
