<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::orderBy('id', 'ASC')->get();
        return view('seguridad.user.index', compact('usuarios'));
    }

    public function nueva()
    {
        return view('seguridad.user.form');
    }
    public function crear(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $password = $request->input('password');
        $user->password = bcrypt($password);
        $user->save();
        return redirect()->route('user.index');
    }

    public function buscar($id)
    {
        $user = User::find($id);
        $data = [];
        $data['perfil_id'] = $user->perfil_id;
        $data['is_active'] = $user->is_active;
        $data['centro_id'] = 0;
        $data['departamento_id'] = 0;
        if ($user->entidades()->count()) {
            if ($user->entidades[0]->entidad_tipo == 2) {
                $data['centro_id'] = $user->entidades[0]->id;
            } elseif ($user->entidades[0]->entidad_tipo == 3) {
                $centro_id = Entidad::find($user->entidades[0]->id);
                $data['centro_id'] = $centro_id->entidad_id;
                $data['departamento_id'] = $user->entidades[0]->id;
            }
        }

        return response()->json($data, 200);
    }

    public function modificar(Request $request, $id)
    {
        $user = User::find($id);
        $user->nombre = $request->input('nombre');
        $user->apellidos = $request->input('apellidos');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->perfil_id = $request->input('perfil_id');
        $user->email = $request->input('email');
        $user->is_active = $request->input('is_active');
        $user->save();

        $centro = ($request->has('centro_id')) ? $request->get('centro_id') : '';
        if ($centro != '') {
            $entidad_id = $request->get('centro_id');
        }

        $departamento = ($request->has('departamento_id')) ? $request->get('departamento_id') : '';
        if ($departamento != '' && $departamento > 0) {
            $entidad_id = $request->get('departamento_id');
        }

        $user->entidades()->sync($entidad_id, ['user_created' => auth()->user()->id]);

        return response()->json(['code' => 200, 'msg' => 'Actualizacion exitoso'], 200);
    }

    public function chagedPassword(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->changed_password = 1;
        $user->save();

        return response()->json(['code' => 200], 200);
    }

    public function eliminar($id)
    {
        $existe_hijo = Encuestas::where('user_id', $id)->exists();
        if (!$existe_hijo) {
            $entidad = User::find($id);
            $entidad->delete();

            return response()->json(['code' => 200, 'msg' => 'success'], 200);
        } else {
            return response()->json(['code' => 400, 'msg' => 'existe_hijo'], 200);
        }
    }
}
