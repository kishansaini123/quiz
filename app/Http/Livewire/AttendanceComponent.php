<?php

namespace App\Http\Livewire;

use App\Models\Attendance;
use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;

class AttendanceComponent extends Component
{
    public $employee;
    public $attendance_date;
    public $clockin;
    public $clockout;

    protected $rules = [
        'employee' => 'required',
        'attendance_date' => 'required',
        'clockin' => 'required',
        'clockout' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetValues()
    {
        $this->employee = '';
        $this->attendance_date = '';
        $this->clockin = '';
        $this->clockout = '';
    }

    public function saveAttendance()
    {
        //dd($this->clockin);
        $this->validate();
        $inTime1 = Carbon::createFromTimeString('10:20');
        $inTime2 = Carbon::createFromTimeString('10:40');
        $outTime = Carbon::createFromTimeString('19:25');

        $clockin = Carbon::createFromTimeString($this->clockin);
        $clockout = Carbon::createFromTimeString($this->clockout);
        
        if($clockin >= $inTime1 && $clockin <= $inTime2){
            $clockin = 'In Time';
        } else{
            $clockin = 'Late In';
        }

        if($clockout > $outTime){
            $clockout = 'On Time';
        } else{
            $clockout = 'Early Out';
        }

        $status = $clockin.'/'.$clockin;

        Attendance::create([
            'user_id'   => $this->employee,
            'date'      => $this->attendance_date,
            'clockin'   => $this->clockin,
            'clockout'  => $this->clockout,
            'status'    => $status,
        ]);

        $this->reset(['employee', 'attendance_date', 'clockin', 'clockout']);
        $this->dispatchBrowserEvent('show-msg-modal', ['msg' => 'Attendance sucessfully created.']);
    }
    public function render()
    {
        $attendances = Attendance::latest()->get();
        $users = User::where('role_id', '!=', 1)->latest()->get(['id','name']);
        return view('livewire.attendance-component', compact('attendances', 'users'));
    }
}
