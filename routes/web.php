<?php
use App\Alumno;
use App\Ciclo_modulo;
use App\Informe;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource("/alumnos","AlumnoController");
Route::resource("/users","UserController");
Route::resource("/matriculas","MatriculaController");
Route::get('/alumnos/form/{id_modulo}/{id}','AlumnoController@form');
Route::get("/matriculas/create/{id}","MatriculaController@create");
Route::resource("/informes","InformeController")->middleware('auth');
Route::get("/informes/create/{id}/{id_modulo}","InformeController@create")->middleware('auth');
Route::post("/informes/{id}","InformeController@update")->middleware('auth');
Route::post("/matriculas/create2","MatriculaController@create2")->name('matriculas.create2');



Route::get('enviar/{email}/{id_modulo}/{id}/{valoracion}/{apreciacion}/{actividades}/{evaluacion}',function($email,$id_modulo,$id,$valoracion,$apreciacion,$actividades,$evaluacion){
       
       
	   $data = array('email' => $email, 'id_modulo'=>$id_modulo, 'valoracion'=>$valoracion,
        'apreciacion'=>$apreciacion,'actividades'=>$actividades,'evaluacion'=>$evaluacion); // Empty array
      
Mail::send('alumnos.enviar',$data, function($message) use ($data){
         
         $message->from('rodpeisa@gmail.com','Isa');
         $message->to($data['email'])->subject('Informe del Modulo '.$data['id_modulo']);
         
    
});

    return redirect()->back()->with('message', 'El informe a sido enviado');
	  
	}
);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


