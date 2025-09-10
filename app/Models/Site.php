<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id', 'name', 'locality', 'department',
        'power_capacity', 'storage_capacity', 'type', 'status', 'actions', 'image',
    ];
}
