@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i>Classes</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="#" data-toggle="modal" data-target="#classroomModal">
                       <i class="fas fa-plus-circle"></i>
                        Nouvelle classe
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
                    @include('classrooms.table')
                    {!! Form::open(['route' => 'classrooms.store']) !!}

                    <div class="card-body">

                        <div class="row">
                            @include('classrooms.fields')
                        </div>

                    </div> 

                    {!! Form::close() !!}

                    {{-- <div class="card-footer clearfix float-right">
                        <div class="float-right">
                            
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

