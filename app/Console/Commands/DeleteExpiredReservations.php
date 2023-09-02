<?php

namespace App\Console\Commands;

use App\Models\Reservation_hotel;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteExpiredReservations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete expired reservations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Reservation_hotel::query()->where('check_out', '<=', Carbon::now())->delete();
    }
}
