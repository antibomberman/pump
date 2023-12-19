<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pump_working_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pump_id')->constrained('pumps')->cascadeOnDelete();
            $table->timestamps();

            $table->boolean('ON')->nullable();
            $table->float('TrgT')->nullable();
            $table->boolean('Boiler')->nullable();
            $table->float('BoilerTRG')->nullable();
            $table->text('table')->nullable();
            $table->text('engParams')->nullable();
            $table->string('resetParams')->nullable();
            $table->float('T0')->nullable();
            $table->float('T1')->nullable();
            $table->float('T2')->nullable();
            $table->float('T3')->nullable();
            $table->float('T4')->nullable();
            $table->float('T5')->nullable();
            $table->float('T6')->nullable();
            $table->float('T7')->nullable();
            $table->float('T8')->nullable();
            $table->float('T9')->nullable();
            $table->float('T10')->nullable();
            $table->float('T11')->nullable();
            $table->string('readParams')->nullable();
            $table->integer('modeHP')->nullable();
            $table->text('error')->nullable();
            $table->text('errcode')->nullable();
            $table->text('status')->nullable();
            $table->string('WORK')->nullable();
            $table->text('listProf')->nullable();
            $table->integer('PL')->nullable();
            $table->integer('PH')->nullable();
            $table->integer('OverheatData')->nullable();
            $table->float('TrgtTN')->nullable();
            $table->integer('EEVdata')->nullable();
            $table->boolean('CentralOtop')->nullable();
            $table->float('TempHum')->nullable();
            $table->float('TargetHum')->nullable();
            $table->boolean('directionn')->nullable();
            $table->boolean('compWork1')->nullable();
            $table->boolean('compWork2')->nullable();
            $table->boolean('tenDog1')->nullable();
            $table->boolean('tenDog2')->nullable();
            $table->boolean('tenPod')->nullable();
            $table->boolean('pumpOUT')->nullable();
            $table->boolean('pumpIN')->nullable();
            $table->boolean('pumpHelio')->nullable();
            $table->boolean('fan')->nullable();
            $table->boolean('mode3x')->nullable();
            $table->boolean('fan1')->nullable();
            $table->boolean('fan2')->nullable();
            $table->boolean('airValve1')->nullable();
            $table->boolean('airValve2')->nullable();
            $table->boolean('airValve3')->nullable();
            $table->boolean('airValve4')->nullable();
            $table->float('TempAmb')->nullable();
            $table->float('TempModule')->nullable();
            $table->float('Current')->nullable();
            $table->integer('CurrentHz')->nullable();
            $table->integer('AO1')->nullable();
            $table->integer('AO2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pump_working_parameters');
    }
};
