@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Modifier l'année académique</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($annees, ['route' => ['annees.update', $annees->annee_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('annees.fields') --}}
                     <div class="modal-body">
                        <!-- Annee Year Field -->
                        <div class="form-group">
                                {!! Form::label('annee_year', 'Année académique:') !!}
                                {!! Form::text('annee_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="{{ route('annees.index') }}" class="text-decoration-none text-light">Fermer</a></button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                        </div>
                </div>
            </div>

            {{-- <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('annees.index') }}" class="btn btn-default">Cancel</a>
            </div> --}}

           {!! Form::close() !!}

        </div>
    </div>
@endsection
