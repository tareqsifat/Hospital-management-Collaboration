<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Validator;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctor::all();
        if(isset($doctor) != 0){
          return response()->json($doctor);
        }else{
            return response()->json([
                'Message'=>'There is no doctor.'
            ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'user_id'=> 'required',
        'year_of_experience'=> 'required',
        'previous_job_place'=> 'required',
        'certificate_1'=>'required',
        'certificate_2' => 'required',
        'certificate_3'=> 'required',
        'certificate_4'=> 'required',
        'ssc_year'=> 'required',
        'hsc_year'=> 'required',
        'mbbs_year'=> 'required',
        'school'=> 'required',
        'college'=> 'required',
        'medical_college'=> 'required',
        'institute_1'=> 'required',
        'institute_2'=> 'required',
        'present_address_id'=> 'required',
        'permanent_address_id'=> 'required',
        'bank_data_id'=> 'required',
        'is_active'=> 'required',
        'is_blocked'=> 'required',
        'creator'=> 'required',
        'slug'=> 'required',
        'status'=> 'required'
        ]);
        if($validator->fails()){
            return response()->json([$validator->errors()]);
        }
        $doctor= new Doctor();

        $doctor->user_id = $request->user_id;
        $doctor->year_of_experience = $request->year_of_experience;
        $doctor->previous_job_place = $request->previous_job_place;
        $doctor->certificate_1 = $request->certificate_1;
        $doctor->certificate_2 = $request->certificate_2;
        $doctor->certificate_3 = $request->certificate_3;
        $doctor->certificate_4 = $request->certificate_4;
        $doctor->ssc_year = $request->ssc_year;
        $doctor->hsc_year = $request->hsc_year;
        $doctor->mbbs_year = $request->mbbs_year;
        $doctor->school = $request->school;
        $doctor->college = $request->college;
        $doctor->medical_college = $request->medical_college;
        $doctor->institute_1 = $request->institute_1;
        $doctor->institute_2 = $request->institute_2;
        $doctor->present_address_id = $request->present_address_id;
        $doctor->permanent_address_id = $request->permanent_address_id;
        $doctor->bank_data_id = $request->bank_data_id;
        $doctor->is_active = $request->is_active;
        $doctor->is_blocked = $request->is_blocked;
        $doctor->slug = $request->slug;
        $doctor->status = $request->status;
        $doctor->creator = $request->creator;
        $doctor->save;
        $message='Doctor Successfully Added';
        return response()->json(['message'=>$message],201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor=Doctor::find($id);
        $doctor->update($request->all());
        return $doctor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Doctor::destroy($id);
    }
}
