@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Modifier la classe</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($classrooms, ['route' => ['classrooms.update', $classrooms->classroom_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('classrooms.fields') --}}
                        <!-- Classroom Name Field -->
                        <div class="form-group  col-md-6">
                            {!! Form::label('classroom_name', '  Nom de la classe:') !!}
                            {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Classroom Code Field -->
                        <div class="form-group  col-md-6">
                            {!! Form::label('classroom_code', 'Code de la classe:') !!}
                            {!! Form::text('classroom_code', null, ['placeholder' => 'Veuillez saisir le code de la classe', 'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Classroom Description Field -->
                        <div class="form-group  col-md-6">
                            {!! Form::label('classroom_description', 'Description de la classe:') !!}
                            {!! Form::textarea('classroom_description', null,['placeholder' => 'Veuillez entrer une description de la matière', 'class' => 'form-control', 'cols'=> 40, 'rows'=>2]) !!}
                        </div>

                        <!-- Status Field -->
                        <div class="form-group col-md-3 d-flex">
                            {!! Form::label('status', 'Statut:') !!}
                            {!! Form::hidden('classroom_statut', 0) !!}
                            {!! Form::checkbox('classroom_status', '1', null, ['class' => 'form-control']) !!} 
                        </div>       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="{{ route('classrooms.index') }}" class="text-decoration-none text-light">Fermer</a></button>
                        {!! Form::submit('Actualiser la classe', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
           {!! Form::close() !!}

        </div>
    </div>
@endsection
