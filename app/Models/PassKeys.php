<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;

class PassKeys extends Model
{
    use HasFactory;

    protected $table = 'passkeys';
    
    public function student() {
        return $this->belongsTo(Students::class);
    }
}
