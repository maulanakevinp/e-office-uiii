<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    protected $protected = ['id'];

    public function lokasi()
    {
        return $this->belongsTo(lokasi::class);
    }
}
