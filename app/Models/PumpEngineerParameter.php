<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PumpEngineerParameter extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'TypeHP',
        'rekupMode',
        'blockPLow',
        'blockPHigh',
        'blockT0',
        'blockT1',
        'blockT2',
        'blockT3',
        'blockT4',
        'blockT5',
        'blockT6',
        'blockT7',
        'blockT8',
        'blockT9',
        'blockT10',
        'blockT11',
        'p1_lo',
        'p2_hi',
        'ustavOverheat',
        'typeComp',
        'minfrequency1',
        'maxfrequency1',
        'ustavkiPredAlarm',
        'minTimeStop',
        'maxDavlenie',
        'povtorniyPusk',
        'shagPriVkl',
        'maxStep',
        'gistStep',
        'intervalEEV',
        'stepEEV',
        'saveMinRPM1',
        'autoRPM1',
        'minRPM1',
        'maxRPM1',
        'ogrMinMax1',
        'voltageMinRPM1',
        'voltageMaxRPM1',
        'KRPM1',
        'P351',
        'P361',
        'saveMinRPM2',
        'autoRPM2',
        'minRPM2',
        'maxRPM2',
        'ogrMinMax2',
        'voltageMinRPM2',
        'voltageMaxRPM2',
        'KRPM2',
        'P352',
        'P362',
        'PeriodLeg',
        'timeHLeg',
        'ustavTempBakGVS',
        'viderzhka',
        'P41',
        'I42',
        'D43',
        'P44',
        'I45',
        'D46',
        'P47',
        'I48',
        'D49',
        'zNaruzhTempObogrevMin',
        'zNaruzhTempObogrevMax',
        'zNaruzhTempOhlazhMin',
        'zNaruzhTempOhlazhMax',
        'OtPhiBar',
        'DoPhiBar',
        'OtPloBar',
        'DoPloBar',
        'zFreonTempNagMin',
        'zFreonTempNagMax',
        'zFreonTempVozMin',
        'zFreonTempVozMax',
        'zTeplonosMin',
        'zTeplonosMax',
        'zGVSMax',
        'zadderzhkaDatProtoka',
        'zBoilerSpeed',
        'zBoilerTempMax',
        'zTeplonosPrevBoiler',
        'zMaxPerepadTempNaCond',
        'TENintervalVkl',
        'PredelSpeedTen',
        'OttaikaTOTempStart',
        'OttaikaTOTempStop',
        'zTOTime',
        'OttaikaPoddonTempStart',
        'OttaikaPoddonTempStop',
        'zPoddonTime',
        'EVITempIsparitel',
        'EVITempCondensator',
        'zGidromoduleT2Min',
        'zGidromoduleT2Max',
        'zGidromoduleT3Min',
        'zGidromoduleT3Max',
        'zGeliokollector',
        'rotorTeplo',
        'oxygenBypass',
        'FileStop',
        'ottaikaTempT3',
        'ottaikaDeltaTempT3',
        'dlitelnostOttaiki',
        'OborotyRotorOttaiki',
        'zashitaT9Min',
        'zashitaT9Max',
        'P93',
        'P94',
        'P95',
        'P96',
        'P97',
        'P98',
        'P99',
        'DurationMin',
        'P101',
        'P102',
        'SposobFComp',
        'SposobVE',
        'SposobERV',
        'Zapret',
        'Zapret_Razr',
        'TEN',
        'TEN2',
        'GVSBox',
        'P111',
        'P112',
        'Gista',
        'P78',
        'P114',
        'P115',
    ];

    protected $hidden = [
        'id',
        'pump_id',
    ];
}
