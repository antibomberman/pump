<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PumpUpdateRequest;
use App\Models\Pump;
use App\Models\PumpWorkingParameter;

class PumpController extends Controller
{
    public function show($number)
    {
        $pump = Pump::query()
            ->where('number', $number)
            ->with(['engineerParameter', 'workingParameter'])
            ->first();
        if (! $pump) {
            return response()->json(['message' => 'Pump not found'], 404);
        }

        return response()->json($pump);
    }

    public function update(PumpUpdateRequest $request, $number)
    {
        $pump = Pump::query()
            ->where('number', $number)
            ->first();
        if (! $pump) {
            return response()->json(['message' => 'Pump not found'], 404);
        }
        $workingParameter = PumpWorkingParameter::query()->wherePumpId($pump->id)->first();
        if (! $workingParameter) {
            return response()->json(['message' => 'Pump working parameter not found'], 404);
        }

        $workingParameter->fill($request->validated());
        $workingParameter->save();



        return response()->json([
            'message' => 'Pump updated successfully',
        ]);
    }
}
