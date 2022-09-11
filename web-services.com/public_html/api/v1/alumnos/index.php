<?

$response = new \stdClass();
$alumnos = [];

$alumno=new \stdClass();

$alumno->id="3a60c433-2636-4add-b0b8-c18a7bc6b291";
$alumno->codigo="A001";
$alumno->nombres="Luis Curo";

$alumnos[]=$alumno;

$response->success=true;
$response->data=$alumnos;

echo json_encode($response);

