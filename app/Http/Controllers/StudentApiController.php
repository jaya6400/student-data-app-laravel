<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentApiModel;

class StudentApiController extends Controller
{
     // Get data from student_data by id
     public function getStudentData($id = null)
     {
        return ($id) ? StudentApiModel::find($id) : StudentApiModel::all();
     }

    
     // Add data into student_data table by JSON format
     public function addStudentData(Request $request)
     {
         $apidata = new StudentApiModel;
         $apidata->id = $request->id;
         $apidata->name = $request->name;
         $apidata->email = $request->email;
         $apidata->course = $request->course;
         $apidata->department = $request->department;
         if ($apidata->save()) {
             return StudentApiModel::all();
         } else {
             return ["Result" => "Failed"];
         }
     }

    // Update data into student_data by using JSON format
    public function updateStudentData(Request $request)
    {
        $apidata = StudentApiModel::find($request->id);
        $apidata->name = $request->name;
        $apidata->email = $request->email;
        $apidata->course = $request->course;
        $apidata->department = $request->department;
        if ($apidata->save()) {
            return StudentApiModel::all();
        } else {
            return ["Result" => "Failed"];
        }
    }

}
