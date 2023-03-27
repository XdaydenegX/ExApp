<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    protected $table = 'clothes';

    public function types() {
        return $this->belongsToMany(Type::class, 'types_clothes');
    }

}
