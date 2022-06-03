@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $empleado->roles_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $empleado->paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $empleado->materno }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $empleado->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $empleado->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $empleado->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empleado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Turno:</strong>
                            {{ $empleado->descripcion_turno }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Entrada:</strong>
                            {{ $empleado->hora_entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $empleado->hora_salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
