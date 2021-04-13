@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-registered"></i>Profeseurs</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="#" data-toggle="modal" data-target="#teacherModal">
                       <i class="fas fa-plus-circle"></i>
                        Nouveau Professeur
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
                @include('profeseurs.table')
                {{-- {!! Form::open(['route' => 'profeseurs.store']) !!} --}}
                <form action="{{route('profeseurs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">

                        <div class="row">
                            @include('profeseurs.fields')
                            
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

                {{-- <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('profeseurs.index') }}" class="btn btn-default">Cancel</a>
                </div> --}}

                

                {{-- <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div> --}}
            

       

