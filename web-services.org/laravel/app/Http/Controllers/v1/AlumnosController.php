<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class AlumnosController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getAll()
    {
       /* return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);*/

        $response = new \stdClass();
        
        $alumnos = [];

        $alumno=new \stdClass();

        $alumno->id="3a60c433-2636-4add-b0b8-c18a7bc6b291";
        $alumno->codigo="A001";
        $alumno->nombres="Luis Curo";

        $alumnos[]=$alumno;

        $response->success=true;
        $response->data=$alumnos;

        return response()->json($response,200);

    }
}