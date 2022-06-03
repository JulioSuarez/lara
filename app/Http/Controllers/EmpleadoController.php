<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Role;
use Illuminate\Http\Request;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('rol','id');
        $empleado = new Empleado();
        return view('empleado.create', compact('empleado','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleado::$rules);

        $empleado = Empleado::create($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $roles = Role::pluck('rol','id');
        return view('empleado.edit', compact('empleado','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        request()->validate(Empleado::$rules);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id)->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado deleted successfully');
    }

    public function cambiarContraseña(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->password = bcrypt($request->password);
        $empleado->save();

        return redirect()->route('empleados.index')
            ->with('success', 'Contraseña cambiada correctamente');
    }

    public function compararId(Request $request)
    {
        $empleado = Empleado::find($request->id);
        if ($empleado) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function buscarEmpleado(Request $request)
    {
        $empleados = Empleado::where('nombre', 'like', '%' . $request->nombre . '%')
            ->orWhere('apellido', 'like', '%' . $request->nombre . '%')
            ->orWhere('cedula', 'like', '%' . $request->nombre . '%')
            ->paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function buscarEmpleadoPorRol(Request $request)
    {
        $empleados = Empleado::where('rol_id', $request->rol_id)
            ->paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function buscarEmpleadoPorNombre(Request $request)
    {
        $empleados = Empleado::where('nombre', 'like', '%' . $request->nombre . '%')
            ->orWhere('apellido', 'like', '%' . $request->nombre . '%')
            ->orWhere('cedula', 'like', '%' . $request->nombre . '%')
            ->paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function buscarEmpleadoPorId(Request $request)
    {
        $empleados = Empleado::where('id', $request->id)
            ->paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function cambiarColorSidebar(Request $request)
    {
        $empleado = Empleado::find($request->id);
        $empleado->color_sidebar = $request->color_sidebar;
        $empleado->save();

        return response()->json(['success' => true]);
    }
}
