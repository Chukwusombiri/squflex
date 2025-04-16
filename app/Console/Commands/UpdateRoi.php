<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UpdateRoi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:roi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update investors ROI';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('acBal', '>', 0)
            ->has('activePlan')
            ->with('activePlan')
            ->get();

        if ($users->isEmpty()) {
            return $this->info('No active investors!');
        }

        foreach ($users as $user) {
            $counter = $user->earningCounter;
            $plan = $user->activePlan;
            $duration = $plan->duration;
            $planRate = $plan->interest / 100;
            $hourlyrate = $planRate/$duration;
            $interest = ($hourlyrate) * $user->acBal;

            if ($counter < $duration) {
                $isLastTopUp = $duration-$counter==1;
                $user->update([
                    'earningCounter' => $counter + 1,
                    'acRoi' => $isLastTopUp ? ceil($user->acRoi + $interest) : round(($user->acRoi + $interest), 2) ,
                    'isEarning' => true,
                    'perMonInt' =>$isLastTopUp ? ceil($user->perMonInt + $interest) : round(($user->perMonInt + $interest),2) ,
                ]);
            } elseif ($counter === $duration) {
                $user->update([
                    'earningCounter' => 0,
                    'acBal' => 0,
                    'isEarning' => false,
                    'plan_id' => null,
                    'prev_plan_id' => $plan->id
                ]);
            }
        }

        return $this->info('ROI updated successfully');
    }
}
