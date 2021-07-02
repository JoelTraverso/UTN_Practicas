<?php
namespace App\Http\Controllers;
session_start ();
use Illuminate\Http\Request;
use DB;
class ControladorForm extends Controller
{
    public function guardar(Request $request)
    {
            $nombre = $request->input('TxtNombre');
            $apellido = $request->input('TxtApellido');
            $dni = $request->input('TxtDni');
            $sexo = $request->get('Sexo');
            $fec_nac = $request->input('TxtFec');
            $tel = $request->input('TxtTel');
            $email = $request->input('TxtEmail');
            $data=array('nombre'=>$nombre,"apellido"=>$apellido,"dni"=>$dni,"fecha_nacimiento"=>$fec_nac,"sexo"=>$sexo,"telefono"=>$tel,"email"=>$email);
            DB::table('personas')->insert($data);
            echo "Registro Guardado con exito<br/>";
            return view('Home');
    }

    public function cargar(Request $request)
    {
            $nombre = $request->input('TxtNombre');
            $apellido = $request->input('TxtApellido');
            $sexo = $request->get('Sexo');
            $fec_nac = $request->input('TxtFec');
            $tel = $request->input('TxtTel');
            $email = $request->input('TxtEmail');
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['nombre' =>  $nombre ]);
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['telefono' =>  $tel]);
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['email' => $email]);
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['apellido' => $apellido]);
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['sexo' =>  $sexo]);
            DB::table('personas')->where('dni', $_SESSION["dni"] )->update(['fecha_nacimiento' => $fec_nac]);
            
            return view('Home');
    }

    public function index()
    {
        $dni = $_POST["TxtDni"];
        $persona = DB::table('personas')->where('dni',intval($dni))->first();
        $_SESSION["nombre"]=$persona->nombre;
        $_SESSION["dni"]=$persona->dni;
        $_SESSION["apellido"]=$persona->apellido;
        $_SESSION["sexo"]=$persona->sexo;
        $_SESSION["fec_nac"]=$persona->fecha_nacimiento;
        $_SESSION["tel"]=$persona->telefono;
        $_SESSION["email"]=$persona->email;
        return view('Home');
    }
}
