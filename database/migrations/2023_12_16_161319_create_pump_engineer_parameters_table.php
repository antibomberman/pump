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
        Schema::create('pump_engineer_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pump_id')->constrained('pumps')->cascadeOnDelete();
            $table->timestamps();

            $table->integer('TypeHP')->nullable()->comment('Тип Устройства');
            $table->integer('rekupMode')->nullable()->comment('Режим устройства');
            //Датчики
            $table->boolean('blockPLow')->nullable()->comment('Максимальное давление датчика');
            $table->boolean('blockPHigh')->nullable()->comment('Максимальное давление датчика');
            $table->boolean('blockT0')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT1')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT2')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT3')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT4')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT5')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT6')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT7')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT8')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT9')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT10')->nullable()->comment('Блокировка отсутствующих датчиков');
            $table->boolean('blockT11')->nullable()->comment('Блокировка отсутствующих датчиков');

            $table->integer('p1_lo')->nullable()->comment('Блокировка датчиков давления');
            $table->integer('p2_hi')->nullable()->comment('Блокировка датчиков давления');
            //Компрессор и драйвер BLDC

            $table->float('ustavOverheat')->nullable()->comment('Установка перегрева рабочего газа, °С:');
            $table->integer('typeComp')->nullable()->comment('Тип компрессора');
            $table->integer('minfrequency1')->nullable()->comment('Частота, ГЦ: минимальная');
            $table->integer('maxfrequency1')->nullable()->comment('Частота, ГЦ: максимальная');
            $table->float('ustavkiPredAlarm')->nullable()->comment('предаварийная уставка Традиатора драйвера компрессора, °С');
            $table->integer('minTimeStop')->nullable()->comment('Мин. время от момента последнего останова, сек');
            $table->integer('maxDavlenie')->nullable()->comment('Максимальное давление, бар');
            $table->boolean('povtorniyPusk')->nullable()->comment('Выполнить контроль условий повторного пуска');

            //Настройки значения ЭРВИ
            $table->integer('shagPriVkl')->nullable()->comment('Шаг октрытия при включении ТН');
            $table->integer('maxStep')->nullable()->comment('Максимальное значение шагов');
            $table->integer('gistStep')->nullable()->comment('Гистерезис шагов');
            $table->integer('intervalEEV')->nullable()->comment('Интервал цикла проверки, сек');
            $table->integer('stepEEV')->nullable()->comment('Шаг ЭРВ в выключенном состоянии');

            //  Вентилятор АО1
            $table->boolean('saveMinRPM1')->nullable()->comment('Сохранить Min обороты при работе:');
            $table->boolean('autoRPM1')->nullable()->comment('Автоматическое управление оборотами:');
            $table->integer('minRPM1')->nullable()->comment('Минимальные обороты, RPM:');
            $table->integer('maxRPM1')->nullable()->comment('Максимальные обороты,RPM:');
            $table->boolean('ogrMinMax1')->nullable()->comment('Ограничить [Min...Max]:');
            $table->integer('voltageMinRPM1')->nullable()->comment('U(AO) для Мин. оборотов, В:');
            $table->integer('voltageMaxRPM1')->nullable()->comment('U(AO) для Макс. оборотов, В:');
            $table->integer('KRPM1')->nullable()->comment('К-т нелинейности U(RPM), %');
            $table->integer('P351')->nullable()->comment('Завис-ть оборотов Вентилятора от F(компрессора)');
            $table->integer('P361')->nullable()->comment('Завис-ть оборотов Вентилятора от F(компрессора)');

            //  Вентилятор АО2
            $table->boolean('saveMinRPM2')->nullable()->comment('Сохранить Min обороты при работе:');
            $table->boolean('autoRPM2')->nullable()->comment('Автоматическое управление оборотами:');
            $table->integer('minRPM2')->nullable()->comment('Минимальные обороты, PRM:');
            $table->integer('maxRPM2')->nullable()->comment('Максимальные обороты,PRM:');
            $table->boolean('ogrMinMax2')->nullable()->comment('Ограничить [Min...Max]:');
            $table->integer('voltageMinRPM2')->nullable()->comment('U(AO) для Мин. оборотов, В:');
            $table->integer('voltageMaxRPM2')->nullable()->comment('U(AO) для Макс. оборотов, В:');
            $table->float('KRPM2')->nullable()->comment('К-т нелинейности U(RPM), %');
            $table->integer('P352')->nullable()->comment('Завис-ть оборотов Вентилятора от F(компрессора)');
            $table->integer('P362')->nullable()->comment('Завис-ть оборотов Вентилятора от F(компрессора)');

            // Антилегионелла
            $table->integer('PeriodLeg')->nullable()->comment('Периодичность операции, сут.');
            $table->integer('timeHLeg')->nullable()->comment('Время суток начала нагрева');
            $table->float('ustavTempBakGVS')->nullable()->comment('Установка температуры в баке ГВС');
            $table->integer('viderzhka')->nullable()->comment('Длительность выдержки, минут');
            //Параметры регуляторов
            $table->float('P41')->nullable()->comment('Пид регулятор Задания Тт\н по Твнутр.воздуха');
            $table->float('I42')->nullable()->comment('Пид регулятор Задания Тт\н по Твнутр.воздуха');
            $table->float('D43')->nullable()->comment('Пид регулятор Задания Тт\н по Твнутр.воздуха');
            $table->float('P44')->nullable()->comment('ПИД-регулятор Fкомпрессора');
            $table->float('I45')->nullable()->comment('ПИД-регулятор Fкомпрессора');
            $table->float('D46')->nullable()->comment('ПИД-регулятор Fкомпрессора');
            $table->float('P47')->nullable()->comment('ПИД-регулятор контура Ц.О. зима');
            $table->float('I48')->nullable()->comment('ПИД-регулятор контура Ц.О. зима');
            $table->float('D49')->nullable()->comment('ПИД-регулятор контура Ц.О. зима');

            $table->float('zNaruzhTempObogrevMin')->nullable()->comment('за пределеами которых ТН не работает на обогрев от');
            $table->float('zNaruzhTempObogrevMax')->nullable()->comment('за пределеами которых ТН не работает на обогрев до');
            $table->float('zNaruzhTempOhlazhMin')->nullable()->comment('за пределеами которых ТН не работает на охлаждение от');
            $table->float('zNaruzhTempOhlazhMax')->nullable()->comment('за пределеами которых ТН не работает на охлаждение До');
            $table->integer('OtPhiBar')->nullable()->comment('Высокому(Phi)');
            $table->integer('DoPhiBar')->nullable()->comment('Высокому(Phi)');
            $table->integer('OtPloBar')->nullable()->comment('низкому(Plo)');
            $table->integer('DoPloBar')->nullable()->comment('низкому(Plo)');
            $table->float('zFreonTempNagMin')->nullable()->comment('Нагнетание(Т8 - Вых.компр)');
            $table->float('zFreonTempNagMax')->nullable()->comment('Нагнетание(Т8 - Вых.компр)');
            $table->float('zFreonTempVozMin')->nullable()->comment('Возвратной(Т4 - Вх.компр)');
            $table->float('zFreonTempVozMax')->nullable()->comment('Возвратной(Т4 - Вх.компр)');
            $table->float('zTeplonosMin')->nullable()->comment('Диапозон допустимых Тт/н,°С: (Т5)');
            $table->float('zTeplonosMax')->nullable()->comment('Диапозон допустимых Тт/н,°С: (Т5)');
            $table->float('zGVSMax')->nullable()->comment('max(ГВС)');
            $table->integer('zadderzhkaDatProtoka')->nullable()->comment('Задержка контроля датчиков протока, сек');
            $table->float('zBoilerSpeed')->nullable()->comment('Защита по макс. скорости изменения Тводы в баке ГВС,°С/мин:');
            $table->float('zBoilerTempMax')->nullable()->comment('Защита по максимальной Тводы в баке ГВС,°С:');
            $table->float('zTeplonosPrevBoiler')->nullable()->comment('Превышение уставки Тт/носителя над задание Тбака ГВС,°С');
            $table->float('zMaxPerepadTempNaCond')->nullable()->comment('Макс.перепад темп. на конденсаторе (T5-T6)');

            //Управление ТЭН и E.V.I.
            $table->integer('TENintervalVkl')->nullable()->comment('Интервал включения, сек:');
            $table->integer('PredelSpeedTen')->nullable()->comment('Предел Тн/t для ВКЛ ТЭН, °С/мин');
            $table->float('OttaikaTOTempStart')->nullable()->comment('Т запуска оттайки,°С');
            $table->float('OttaikaTOTempStop')->nullable()->comment('Т завершение оттайки,°С:');
            $table->integer('zTOTime')->nullable()->comment('Защита по времени оттайки, мин:');
            $table->float('OttaikaPoddonTempStart')->nullable()->comment('Т запуска оттайки,°С');
            $table->float('OttaikaPoddonTempStop')->nullable()->comment('Т завершение оттайки,°С');
            $table->integer('zPoddonTime')->nullable()->comment('Защита по времени оттайки, мин');
            $table->float('EVITempIsparitel')->nullable()->comment('Тиспаритель(Т4),С');
            $table->float('EVITempCondensator')->nullable()->comment('Тконденсатор(Т6),С');
            //Гидромодуль
            $table->float('zGidromoduleT2Min')->nullable()->comment('Установки защиты по Т2(подачи в гидроконтур), °С');
            $table->float('zGidromoduleT2Max')->nullable()->comment('Установки защиты по Т2(подачи в гидроконтур), °С');
            $table->float('zGidromoduleT3Min')->nullable()->comment('Уставки защиты по Т3(возврат из гидроконтура), °С');
            $table->float('zGidromoduleT3Max')->nullable()->comment('Уставки защиты по Т3(возврат из гидроконтура), °С');
            //Гелиомодуль
            $table->float('zGeliokollector')->nullable()->comment('Верхний аварийный предел температуры гелиоколлектора, °С');
            //ТН-Рекуператор (ПВУ)
            $table->boolean('rotorTeplo')->nullable()->comment('роторный теплообменник');
            $table->boolean('oxygenBypass')->nullable()->comment('Воздушный байпас(пластинчатый ТО');
            $table->boolean('FileStop')->nullable()->comment('Использовать DI5 (СomprFail)  как FileStop');
            $table->float('ottaikaTempT3')->nullable()->comment('Значение Т3 для запуска оттайк, °С');
            $table->float('ottaikaDeltaTempT3')->nullable()->comment('Дельта Т3 для завершения оттайки, °С');
            $table->integer('dlitelnostOttaiki')->nullable()->comment('Мин.длительность оттайки, минут');
            $table->integer('OborotyRotorOttaiki')->nullable()->comment('Обороты ротора при оттайке, %');
            $table->float('zashitaT9Min')->nullable()->comment('Установки защиты по Т9 (теплоносителя Ц.О.), °С');
            $table->float('zashitaT9Max')->nullable()->comment('Установки защиты по Т9 (теплоносителя Ц.О.), °С');
            $table->integer('P93')->nullable()->comment('Степень открытия регулир.клапана Ц.О. в сост.останова, %');
            $table->integer('P94')->nullable()->comment('Ограничение скорости изменения выхода упр.клапаном, %/сек');
            $table->float('P95')->nullable()->comment('Оттайка теплового насоса ПВУ');
            $table->float('P96')->nullable()->comment('Оттайка теплового насоса ПВУ');
            $table->integer('P97')->nullable()->comment('Оттайка теплового насоса ПВУ');
            $table->integer('P98')->nullable()->comment('Оттайка теплового насоса ПВУ');
            $table->integer('P99')->nullable()->comment('Граница Fкомпрессора в Гц, выше которой в режиме ЗИМА закрываються');
            $table->integer('DurationMin')->nullable()->comment('Длительность удержания МИНИМ частоты перекл.ГВС и РЕВЕРС');
            $table->integer('P101')->nullable()->comment('Верхний предел частоты КОМПР при работе на ГВС');
            $table->integer('P102')->nullable()->comment(' Нет пассивного охлаждения /  Пассивное охлаждение');
            $table->integer('SposobFComp')->nullable()->comment('Способ управления FКомпрессора');
            $table->integer('SposobVE')->nullable()->comment('Способо упр. вентиляторами ВИ:');
            $table->integer('SposobERV')->nullable()->comment('Способ управления ЭРВ');
            $table->boolean('Zapret')->nullable()->comment('Запрет работы компрессора ТН/инвертор:');
            $table->boolean('Zapret_Razr')->nullable()->comment('отключить авт.управление клапаном E.V.I.');
            $table->boolean('TEN')->nullable()->comment('Включить ТЭН1 догрев');
            $table->boolean('TEN2')->nullable()->comment('Включить ТЭН2 догрев');
            $table->boolean('GVSBox')->nullable()->comment('Включить ТЭН ГВС');
            $table->boolean('P111')->nullable()->comment('Отключить авт.управление ТЭН вентилятора');
            $table->boolean('P112')->nullable()->comment('Отключить авт.управление ТЭН компрессора');
            $table->float('Gista')->nullable()->comment('Гистерезис температуры теплоносителя,С');
            $table->boolean('P78')->nullable()->comment('Запрет работы компрессора ТН');
            $table->boolean('P114')->nullable()->comment('Включить "ГИДРИД"');
            $table->float('P115')->nullable()->comment('Установка ТО');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pump_engineer_parameters');
    }
};
