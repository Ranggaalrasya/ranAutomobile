<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MobilBaru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mesin(){
        return $this->belongsTo(Mesin::class);
    }

    public function scopeFilter($query, array $filters)
    {

        if (isset($filters['mesin_id'])) {
            $query->where('mesin_id', $filters['mesin_id']);
        }

        if (isset($filters['search'])) {
            $query->where('nama', 'like', '%' . $filters['search'] . '%')
                ->orWhere('transmisi', 'like', '%' . $filters['search'] . '%');
        }
    }
}
