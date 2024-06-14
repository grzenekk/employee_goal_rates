<?php

namespace App\DB\Models;

use App\DB\Casts\TrimPathSlash;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends BaseModel
{
    protected $table = 'employees';
    public $fillable = [
        'first_name',
        'last_name',
    ];

    protected $casts = [

    ];

    /**
     * =====================================
     *              CONFIG kolumn
     * =====================================
     */

    public static function configColumns()
    {
        return [
            'aliases' => [

            ],
            'labels' => [

            ]
        ];
    }
    /**
     * =====================================
     *              Relacje
     * =====================================
     */

    public function object(): BelongsTo
    {
        return $this->belongsTo(ProjectObject::class, 'id', 'id_sterownik');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(ObjectDriverGroup::class, 'id', 'id_sterownik');
    }

    public function getIpSimpleAttribute()
    {
        $array = explode('--', $this->attributes['ip']);
        return $array[0] ?? '';
    }
    public function getIpPrefixAttribute()
    {
        $array = explode('--', $this->attributes['ip']);
        return $array[1] ?? '';
    }
}
