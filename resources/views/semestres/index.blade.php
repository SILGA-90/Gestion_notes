@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i>Semestres</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="#" data-toggle="modal" data-target="#semesterModal">
                        <i class="fas fa-plus-circle"></i>
                        Nouveau semestre
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('semestres.table')
                {!! Form::open(['route' => 'semestres.store']) !!}

                <div class="card-body">

                    <div class="row">
                        @include('semestres.fields')
                    </div>

                </div>

                {{-- <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('semestres.index') }}" class="btn btn-default">Cancel</a>
                </div> --}}

                {!! Form::close() !!}

                {{-- <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div> --}}
            </div>

        </div>
    </div>

@endsection

