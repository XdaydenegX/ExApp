<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PassKeys;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function passkey() {
        return $this->hasOne(PassKeys::class, 'id', 'passkey_id');
    }
}
