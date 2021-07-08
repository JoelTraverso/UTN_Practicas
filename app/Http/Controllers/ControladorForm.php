<?php
namespace App\Http\Controllers;
session_start ();
use Illuminate\Http\Request;
use DB;
class ControladorForm extends Controller
{
    public function cargar(Request $request)
    {
            $nombre = $request->input('TxtNombre');
            $apellido = $request->input('TxtApellido');
            $fec_nac = $request->input('TxtFec');
            $email = $request->input('TxtEmail');
            $t_doc = $request->input('TxtTDoc');
            $n_doc = $request->input('TxtDoc');
            $dom = $request->input('TxtDom');
            $loc = $request->input('TxtIdLoc');
            $prov = $request->input('TxtIdProv');
            $nac = $request->input('TxtNac');
            $e_civil = $request->input('TxtECiv');
            $t_par = $request->input('TxtTelP');
            $t_tra = $request->input('TxtTelT');
            $t_mov = $request->input('TxtTelM');
            $ocupacion = $request->input('TxtOcu');
            $id_emp = $request->input('TxtIdEmp');

            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_nombre' =>  $nombre ]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_apellido' => $apellido]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_fechanac' => $fec_nac]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_email' => $email]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_tipodoc' =>  $t_doc ]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_nrodoc' => $n_doc]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_domicilio' => $dom]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_idloc' => $loc]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_idprov' =>  $prov ]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_nacionalidad' => $nac]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_estadocivil' => $e_civil]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_telparticular' => $t_par]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_teltrabajo' =>  $t_tra]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_telmovil' => $t_mov]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_ocupacion' => $ocupacion]);
            DB::table('alumnos')->where('alum_idalumno', $_SESSION["id"] )->update(['alum_idempresa' => $id_emp]);
            return view('Home');
    }

    public function index()
    {
        $ID = $_POST["TxtID"];
        $alumno = DB::table('alumnos')->where('alum_idalumno',intval($ID))->first();
        $_SESSION["id"]=$alumno->alum_idalumno;
        $_SESSION["nombre"]=$alumno->alum_nombre;
        $_SESSION["n_doc"]=$alumno->alum_nrodoc;
        $_SESSION["apellido"]=$alumno->alum_apellido;
        $_SESSION["tip_doc"]=$alumno->alum_tipodoc;
        $_SESSION["domicilio"]=$alumno->alum_domicilio;
        $_SESSION["id_loc"]=$alumno->alum_idloc;
        $_SESSION["id_prov"]=$alumno->alum_idprov;
        $_SESSION["nacionalidad"]=$alumno->alum_nacionalidad;
        $_SESSION["est_civ"]=$alumno->alum_estadocivil;
        $_SESSION["tel_par"]=$alumno->alum_telparticular;
        $_SESSION["tel_tra"]=$alumno->alum_teltrabajo;
        $_SESSION["tel_mov"]=$alumno->alum_telmovil;
        $_SESSION["fec_nac"]=$alumno->alum_fechanac;
        $_SESSION["email"]=$alumno->alum_email;
        $_SESSION["ocupacion"]=$alumno->alum_ocupacion;
        $_SESSION["id_emp"]=$alumno->alum_idempresa;
        return view('Home');
    }
}
