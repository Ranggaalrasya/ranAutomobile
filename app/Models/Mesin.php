<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mobil(){
        return $this->hasMany(MobilBaru::class);
    }
}
