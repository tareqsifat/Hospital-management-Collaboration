<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
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
    {   $doctors=Doctor::create($request->all());
        $validator =Validator::make($request->all(),[
        'user_id'=> ['required'],
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
        $doctors= new Doctor();

        $doctors->user_id = $request->user_id;
        $doctors->year_of_experience = $request->year_of_experience;
        $doctors->previous_job_place = $request->previous_job_place;
        $doctors->certificate_1 = $request->certificate_1;
        $doctors->certificate_2 = $request->certificate_2;
        $doctors->certificate_3 = $request->certificate_3;
        $doctors->certificate_4 = $request->certificate_4;
        $doctors->ssc_year = $request->ssc_year;
        $doctors->hsc_year = $request->hsc_year;
        $doctors->mbbs_year = $request->mbbs_year;
        $doctors->school = $request->school;
        $doctors->college = $request->college;
        $doctors->medical_college = $request->medical_college;
        $doctors->institute_1 = $request->institute_1;
        $doctors->institute_2 = $request->institute_2;
        $doctors->present_address_id = $request->present_address_id;
        $doctors->permanent_address_id = $request->permanent_address_id;
        $doctors->bank_data_id = $request->bank_data_id;
        $doctors->is_active = $request->is_active;
        $doctors->is_blocked = $request->is_blocked;
        $doctors->slug = $request->slug;
        $doctors->status = $request->status;
        $doctors->creator = $request->creator;
        $doctors->save;
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
       $doctor=Doctor::find($id);
       if(isset($doctor) != 0){
           return response()->json('$doctor');
       }else{
           return response()->json([
               'Message'=>'Doctor Not Found'
           ]);
       }
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
            $doctors=Doctor::find($id);
            If(isset($doctors)!= 0){
            $doctors->update($request->all());
            $validator =Validator::make($request->all(),[
            'user_id'=> ['required'],
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
            $doctors->user_id = $request->user_id;
            $doctors->year_of_experience = $request->year_of_experience;
            $doctors->previous_job_place = $request->previous_job_place;
            $doctors->certificate_1 = $request->certificate_1;
            $doctors->certificate_2 = $request->certificate_2;
            $doctors->certificate_3 = $request->certificate_3;
            $doctors->certificate_4 = $request->certificate_4;
            $doctors->ssc_year = $request->ssc_year;
            $doctors->hsc_year = $request->hsc_year;
            $doctors->mbbs_year = $request->mbbs_year;
            $doctors->school = $request->school;
            $doctors->college = $request->college;
            $doctors->medical_college = $request->medical_college;
            $doctors->institute_1 = $request->institute_1;
            $doctors->institute_2 = $request->institute_2;
            $doctors->present_address_id = $request->present_address_id;
            $doctors->permanent_address_id = $request->permanent_address_id;
            $doctors->bank_data_id = $request->bank_data_id;
            $doctors->is_active = $request->is_active;
            $doctors->is_blocked = $request->is_blocked;
            $doctors->slug = $request->slug;
            $doctors->status = $request->status;
            $doctors->creator = $request->creator;
            $doctors->save;
            $message='Doctor Successfully Added';
            return response()->json(['message'=>$message],201);
            }else{
                return response()->json([
                    'Message'=>'Doctor Not Found'
                ]);
            }
        }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors=Doctor::find($id);
        $doctor=Doctor::destroy($id);
        if(isset($doctors) != 0){
            return response()->json(['message'=>'Doctor deleted Successfully.']);
        }else{
            return response()->json([
                'Message'=>'Doctor not found.'
            ]);
        }

    }
}
