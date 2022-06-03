@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Cargo</th>
										<th>Nombre</th>
										<th>Paterno</th>
										<th>Materno</th>
										<th>Sexo</th>
										<th>Fecha Nacimiento</th>
										<th>Fecha Ingreso</th>
										<th>Telefono</th>
										<th>Estado</th>
										<th>Descripcion Turno</th>
										<th>Hora Entrada</th>
										<th>Hora Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $empleado->role->rol }}</td>
											<td>{{ $empleado->nombre }}</td>
											<td>{{ $empleado->paterno }}</td>
											<td>{{ $empleado->materno }}</td>
											<td>{{ $empleado->sexo }}</td>
											<td>{{ $empleado->fecha_nacimiento }}</td>
											<td>{{ $empleado->fecha_ingreso }}</td>
											<td>{{ $empleado->telefono }}</td>
											<td>
											    <p class="btn btn-success btn-sm"> {{ $empleado->estado }}</p>
                                                @if (1 == "activo")
                                                    hola

                                                @else
                                                    adios

                                                @endif
                                            </td>
                                            <td>{{ $empleado->descripcion_turno }}</td>
											<td>{{ $empleado->hora_entrada }}</td>
											<td>{{ $empleado->hora_salida }}</td>

                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleados->links() !!}
            </div>
        </div>
    </div>
@endsection
