<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
class AppointmentController extends Controller
{
    public function getAppointments(){
        return ['name' => 'laldinpuia'];
    }
}
