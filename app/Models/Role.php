<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $table = 'd3ti_role';
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name'
    ];
}

