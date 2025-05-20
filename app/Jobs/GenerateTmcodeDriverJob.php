<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\DriverVisit;
use App\Models\TmcodeDriver;
use Carbon\Carbon;



class GenerateTmcodeDriverJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $today = Carbon::now();

        $visits = DriverVisit::with('mechanism.driver', 'code')->get();

        foreach ($visits as $visit) {
            $createdAt = Carbon::parse($visit->created_at);
            $daysPassed = $createdAt->diffInDays($today);

            $shouldInsert = false;

            switch ($visit->visit_type) {
                case 'روزانه':
                    $shouldInsert = $daysPassed >= 1;
                    break;
                case 'هفتگی':
                    $shouldInsert = $daysPassed >= 7;
                    break;
                case 'ماهانه':
                    $shouldInsert = $daysPassed >= 30;
                    break;
            }

            if ($shouldInsert && $visit->mechanism && $visit->mechanism->driver && $visit->code) {
                TmcodeDriver::firstOrCreate([
                    'driver_id'  => $visit->mechanism->driver->id,
                    'tm_code_id' => $visit->code->id,
                    'status'     => 'بازدید نشده',
                ]);
            }
        }

    }
}
