<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter (Builder $builder, null|string $filter)
    {
        return $builder->when($filter != null,
            function ($q) use ($filter) {
                $q->where(function ($query) use ($filter) {
                    $query->where('name', 'LIKE', '%' . $filter . '%')
                        ->orWhere('full_name', 'LIKE', '%' . $filter . '%')
                        ->orWhere('publisher', 'LIKE', '%' . $filter . '%');
                });
            });
    }
}
