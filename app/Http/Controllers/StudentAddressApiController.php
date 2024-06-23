<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAddressApiModel;

class StudentAddressApiController extends Controller
{
    //Get data from student_address by id
    public function getStudentAddress($id = null)
    {
        return ($id) ? StudentAddressApiModel::find($id) : StudentAddressApiModel::all();
    }
    
    // Add data into student_address table by JSON format
    public function addStudentAddress(Request $request)
    {
        $apidata = new StudentAddressApiModel;
        $apidata->address = $request->address;
        if ($apidata->save()) {
            return StudentAddressApiModel::all();;
        } else {
            return ["Result" => "Failed"];
        }
    }

}
  