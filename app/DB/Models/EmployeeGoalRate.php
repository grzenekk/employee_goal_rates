<?php

namespace App\DB\Models;

use App\DB\Casts\TrimPathSlash;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeGoalRate extends BaseModel
{
    protected $table = 'employee_goal_rates';
    public $fillable = [
        'progress',
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

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'id', 'employee_id');
    }

    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class, 'id', 'goal_id');
    }
}
