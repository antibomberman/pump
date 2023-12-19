<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PumpWorkingParameter extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'ON',
        'TrgT',
        'Boiler',
        'BoilerTRG',
        'table',
        'engParams',
        'resetParams',
        'T0',
        'T1',
        'T2',
        'T3',
        'T4',
        'T5',
        'T6',
        'T7',
        'T8',
        'T9',
        'T10',
        'T11',
        'readParams',
        'modeHP',
        'error',
        'errcode',
        'status',
        'WORK',
        'listProf',
        'PL',
        'PH',
        'OverheatData',
        'TrgtTN',
        'EEVdata',
        'CentralOtop',
        'TempHum',
        'TargetHum',
        'directionn',
        'compWork1',
        'compWork2',
        'tenDog1',
        'tenDog2',
        'tenPod',
        'pumpOUT',
        'pumpIN',
        'pumpHelio',
        'fan',
        'mode3x',
        'fan1',
        'fan2',
        'airValve1',
        'airValve2',
        'airValve3',
        'airValve4',
        'TempAmb',
        'TempModule',
        'Current',
        'CurrentHz',
        'AO1',
        'AO2',
    ];
}
