<?php

namespace App\Console\Commands;

use App\Models\Doctor;
use App\Models\DoctorsDegree;
use App\Models\DoctorSlot;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Exception;
use Error;

class CrateDoctorSlot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:doctorslot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this Command for creating the the slot of the doctor';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
        $doctors =  Doctor::where('deleted_at', null)->where('status', 'active')->get();
        foreach ($doctors as $doctor) {
            $doctor_slot = DoctorSlot::where('doctor_id', $doctor->id)->where('status', 'active')->where('deleted_at', null)->orderByDesc('id')->first();
            //   calculating the time according to the
            $prievious_date = date('Y-m-d', strtotime($doctor_slot->start_date . ' - ' . ($doctor_slot->in_week_no_of_days - 1) . ' days'));
            $doctor_id = $doctor->id;
            $start_date = $doctor_slot->start_date;
            // try...catch
            try {
            // DB::beginTransaction(); //start transaction

            $all_slot_data =   DoctorSlot::where('doctor_id', $doctor_id)->where('status', 'active')->where('deleted_at', null)->whereBetween('start_date', [$prievious_date, $start_date])->get()->toArray();
            foreach ($all_slot_data as $slots) {
                unset($slots['created_at']);
                unset($slots['updated_at']);
                unset($slots['id']);
                $slots['start_date'] = date('Y-m-d', strtotime($slots['start_date'] . ' + ' . ($slots['in_week_no_of_days']) . ' days'));
                $slots['end_date'] =$slots['start_date'];

                DoctorSlot::create($slots);
            }
            } catch (Exception | Error $exception) {
                DB::rollBack();
            }
        }
    }catch(Exception $e){
        return info($e->getMessage());
    }
        return Command::SUCCESS;
    }
}
