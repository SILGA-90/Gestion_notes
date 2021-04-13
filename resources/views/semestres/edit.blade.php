@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Modifier le Semestre</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($semestres, ['route' => ['semestres.update', $semestres->semester_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('semestres.fields') --}}
                    <!-- Name Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('name', 'Nom dun semestre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Start Date Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('start_date', 'Début du semestre:') !!}
                        {!! Form::text('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
                    </div>

                    @push('page_scripts')
                        <script type="text/javascript">
                            $('#start_date').datetimepicker({
                                format: 'YYYY-MM-DD HH:mm:ss',
                                useCurrent: true,
                                sideBySide: true
                            })
                        </script>
                    @endpush

                    <!-- End Date Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('end_date', 'Fin du semestre:') !!}
                        {!! Form::text('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
                    </div>

                    @push('page_scripts')
                        <script type="text/javascript">
                            $('#end_date').datetimepicker({
                                format: 'YYYY-MM-DD HH:mm:ss',
                                useCurrent: true,
                                sideBySide: true
                            })
                        </script>
                    @endpush

                    <!-- Status Field -->
                    <div class="form-group col-sm-3">
                        {!! Form::label('status', 'Status:') !!}
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', '1', null, ['class' => 'form-control']) !!} 
                    </div> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="{{ route('semestres.index') }}" class="text-decoration-none text-light">Fermer</a></button>
                    {!! Form::submit('Actualiser semestre', ['class' => 'btn btn-primary']) !!}
                </div>
                </div>
            </div>

            {{-- <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('semestres.index') }}" class="btn btn-default">Cancel</a>
            </div> --}}

           {!! Form::close() !!}

        </div>
    </div>
@endsection
