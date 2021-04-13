@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Roles</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($roles, ['route' => ['roles.update', $roles->role_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('roles.fields') --}}
                    <div class="modal-body">
                        <!-- Name Field -->
                        <div class="form-group col-md-12">
                            {!! Form::label('name', 'Nom du nouveau rôle:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <a href="{{ route('roles.index') }}" class="text-decoration-none text-light">fermer</a></button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
            </div>
            
            {{-- <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('roles.index') }}" class="btn btn-default">fermer</a>
            </div> --}}

           {!! Form::close() !!}

        </div>
    </div>
@endsection
