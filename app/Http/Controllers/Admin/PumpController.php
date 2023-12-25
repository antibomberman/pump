<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PumpStoreRequest;
use App\Http\Requests\Admin\PumpUpdateRequest;
use App\Models\Pump;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PumpController extends Controller
{
    public function index()
    {
        return view('admin.pump.index');
    }

    public function show(Pump $pump)
    {

        return view('admin.pump.show', compact('pump'));
    }

    public function create()
    {
        $users = Pump::query()->orderBy('name')->get();

        return view('admin.pump.create', compact('users'));
    }

    public function store(PumpStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $pump = Auth::user()->pumps()->create(['name' => $request->validated('name')]);
            $pump->engineerParameter()->create($request->validated('engineer_parameter'));
            $pump->workingParameter()->create($request->validated('working_parameter'));
            DB::commit();
            return redirect()->route('admin.pump.show', $pump->id);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function edit(Pump $pump)
    {
        $users = User::orderBy('name')->get();

        return view('admin.pump.edit', compact('users', 'pump'));
    }

    public function update(PumpUpdateRequest $request, Pump $pump)
    {

        $pump->update($request->validated());

        return redirect()->route('admin.pump.show', $pump->id);
    }

    public function delete(Pump $pump)
    {
        $pump->delete();

        return redirect()->route('admin.user.index');
    }
}
