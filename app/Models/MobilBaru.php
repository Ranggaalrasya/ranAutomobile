<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilBaru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {

        if (isset($filters['id'])) {
            $query->where('id', $filters['id']);
        }

        if (isset($filters['search'])) {
            $query->where('nama', 'like', '%' . $filters['search'] . '%')
                ->orWhere('transmisi', 'like', '%' . $filters['search'] . '%');
        }
    }
}
