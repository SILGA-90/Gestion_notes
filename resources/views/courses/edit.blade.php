@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editer les matière</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($courses, ['route' => ['courses.update', $courses->course_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <!-- Course Name Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('course_name', 'Course Name:') !!}
                        {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Course Code Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('course_code', 'Course Code:') !!}
                        {!! Form::text('course_code', null, ['placeholder' => 'Veuillez saisir le code de la matière', 'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Course Description Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('course_description', 'Course Description:') !!}
                        {!! Form::textarea('course_description', null,['placeholder' => 'Veuillez entrer une description de la matière', 'class' => 'form-control', 'cols'=> 40, 'rows'=>2]) !!}
                    </div>

                    <!-- Status Field -->
                    <div class="form-group col-md-2 d-flex">
                        {!! Form::label('status', 'Status:') !!}
                        {!! Form::hidden('statut', 0) !!}
                        {!! Form::checkbox('status', '1', null, ['class' => 'form-control']) !!} 
                    </div>       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="{{ route('courses.index') }}" class="text-decoration-none text-light">Fermer</a></button>
                    {!! Form::submit('Actualiser matière', ['class' => 'btn btn-primary']) !!}
                </div>
                </div>   
            </div>
            </div>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
