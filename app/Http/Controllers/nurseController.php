<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nurse;

class nurseController extends Controller
{
    public function index()
    {
    	return Nurse::all();
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'user_id' => 'required'
    	]);
    	return Nurse::create($request->all());
    }
    public function update(Request $request,$id)
    {
    	$nurse = Nurse::find($id);
    	$nurse->update($request->all());
    	return $nurse;
    }
    public function destroy($id)
    {
    	return Product::destroy($id);
    }
}
