<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Pump extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $fillable = [
        'number',
        'user_id',
    ];
    protected $hidden = [
        'id',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function engineerParameter(): HasOne
    {
        return $this->hasOne(PumpEngineerParameter::class, 'pump_id', 'id');
    }

    public function workingParameter(): HasOne
    {
        return $this->hasOne(PumpWorkingParameter::class, 'pump_id', 'id');
    }
}
