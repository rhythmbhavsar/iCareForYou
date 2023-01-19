<?php

namespace App\Http\Controllers;

use App\Models\LabAdd;
use App\Models\AppointmentModel;
use Illuminate\Http\Request;
use Session;

class LabAddController extends Controller
{
    //
    public function add_address(){
        $address = LabAdd::all();
        return view('labpanel.add_address',compact('address'));
    }

    public function insrtadd(Request $request){

        $validated=$request->validate(['address'=>'required|max:50']);

        $s= new LabAdd;
        $s-> address=$request->input('address');
        $s->save();
        return redirect('/add_address')->with('status','Address Added Succesfully');
    }

    public function appointment(){
        $address = LabAdd::all();
        return view('customerpanel.appointment',compact('address'));
    }

    public function editadd($id) {
        $add = LabAdd::find($id);
        // $delete->delete();
        return view('labpanel.editadd',compact('add'));
    }

    public function updateadd(Request $request, $id){

        $validated=$request->validate(['address'=>'required|max:50']);

        $s= LabAdd::find($id);
        $s-> address=$request->input('address');
        $s->update();
        return redirect('/add_address')->with('status','Address Updated Succesfully');
    }

    public function deleteadd($id) {
        $delete = LabAdd::find($id);
        $delete->delete();
        return redirect('/add_address')->with('status','Address Deleted Succesfully');
    }

    public function add_app(Request $request){

        // $validated=$request->validate(['name'=>'required|max:50','email'=>'required|max:50','mobile'=>'required|max:10','password'=>'required|max:50','lab_code'=>'required|max:50']);
        $s= new AppointmentModel;
        $s-> user_id=$request->input('user_id');
        $s-> name=$request->input('name');
        $s-> email=$request->input('email');
        $s-> mobile=$request->input('mobile');
        $s-> address=$request->input('address');
        $s-> t_type=$request->input('t_type');
        $s-> date=$request->input('date');
        $s-> time_slot=$request->input('time_slot');
        $s->save();
        return redirect('/view_appointment')->with('status', 'Appointment Request Sent');
    }

    public function view_appointment(){
        $id=Session::get('CustomerLoginId')['id'];
        $appo = AppointmentModel::where('user_id',$id)->get();
        return view('customerpanel.view_appointment',compact('appo'));
    }
    
    
    public function update_appo_cancel(Request $request, $id) {
        $update = AppointmentModel::find($id);
        $update-> cancel_status=$request->input('cancel_appo');
        $update-> status=$request->input('up_status');
        $update->update();
        return redirect('/view_appointment')->with('status', 'Appointment Cancelled');
    }
    
    public function l_view_appointment(){
        $appo = AppointmentModel::all();
        return view('labpanel.l_view_appointment',compact('appo'));
    }
    
    public function l_update_appo_status(Request $request, $id) {
        $update = AppointmentModel::find($id);
        $update-> status=$request->input('accept');
        $update->update();
        return redirect('/l_view_appointment')->with('status', 'Appointment Accepted');
    }
    
    public function patients(){
        $appo = AppointmentModel::where('status',1)->get();
        return view('labpanel.patients',compact('appo'));
    }

    public function submit_result($id){
        $patient = AppointmentModel::find($id);
        return view('labpanel.submit_result',compact('patient'));
    }
}
