<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tea extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'brand',
        'qty',
        'flavors',
        'base_type'
    ];

    public function scopeWhereBaseType($query, $base_type)
    {
        if (empty($base_type)) {
            return false;
        }

        return $query->where('base_type', 'LIKE', "%$base_type%");
    }

    public function scopeWhereFlavors($query, $flavors)
    {
        if(empty($flavors)){
            return false;
        }

        return $query->where('flavors', 'LIKE', "%$flavors%");
    }
}
