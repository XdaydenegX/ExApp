<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    public function clothes() {
        return $this->hsaMany(Clothes::class, 'types_clothes');
    }

}
