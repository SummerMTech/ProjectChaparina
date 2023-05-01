<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Animales;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $animals = Animales::where('edad', '>', 10)->get();
    
            foreach ($animals as $animal) {
                $notification = new Notification();
                $notification->type = 'AnimalAgeNotification';
                $notification->data = [
                    'animal_id' => $animal->id,
                    'message' => 'El animal ' . $animal->name . ' superó los 10 años de edad',
                ];
    
                $animal->notifications()->save($notification);
            }
        })->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

   

}
