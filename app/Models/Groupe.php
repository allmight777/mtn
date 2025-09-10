<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable = ['nom', 'libelle'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
