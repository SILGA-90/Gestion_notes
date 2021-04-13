@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Profeseurs</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($profeseurs, ['route' => ['profeseurs.update', $profeseurs->teacher_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    {{-- @include('profeseurs.fields') --}}
                        <div class="panel panel-default">
                            <div class="panel-heading text-center font-weight-bolder">
                                {{-- <b class="d-flex">
                                    <i class="fa fa-book mt-1"></i>
                                    Détails sur le professeur
                                </b> --}}
                                <i class="fa fa-book mt-1"></i>
                                    Détails sur le professeur</h5>
                            </div>
                            <div class="panel-body" style="padding-bottom: 4px">
                                {{-- <input type="hidden" name="class_id" id="class_id" required> --}}
                                <div class="row mt-3 bordure">
                                    <!-- First Name Field -->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label for="first_name">Prénom:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Veuillez saisir le prénom">    
                                        </div>
                                    </div>
                                    <!-- Last Name Field -->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group ">
                                            <label for="last_name">Nom:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control"  placeholder="Veuillez saisir le nom">    
                                        </div>
                                    </div>
                                    <!-- Email Field -->
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control"  placeholder="Veuillez entrer l'email">
                                        </div>
                                    </div>
                                    <!-- Gender Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <fieldset>
                                                <legend>Genre</legend>
                                                <table style="width: 100%;marginy-top:14px">
                                                    <tr style="border-bottom:1px solid #ccc;">
                                                        <td>
                                                            <label for="">
                                                                <input type="radio" name="gender" id="gender" value="0">
                                                                Masculin
                                                            </label>
                                                            <label for="">
                                                                <input type="radio" name="gender" id="gender" value="1">
                                                                Féminin 
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!-- date of birth Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date de naissance :</label>     
                                            <input type="date" name="dob" id="dob" class="form-control" placeholder="Veuillez entrer la date de naissance (jour/mois/année)">
                                        </div>
                                    </div>
                                    <!-- No Cnib Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="no_CNIB">References CNIB ou Passport</label>
                                            <input type="text" name="no_CNIB" class="form-control"  placeholder="Veuillez entrer les references CNIB ou Passport">
                                        </div>
                                    </div>
                                    <!-- Statut Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <fieldset>
                                                <legend>Statut matrimonial</legend>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label for="">
                                                                <input type="radio" name="statut" id="statut" value="0" >
                                                                Célibataire
                                                            </label>
                                                            <label for="">
                                                                <input type="radio" name="status" id="status" value="1" >
                                                                Marié(e)
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!-- Nationality Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nationality">Nationalité:</label>
                                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Veuillez saisir la nationalité">
                                        </div>
                                    </div>
                                    <!-- Phone Field -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone">Numéro de téléphone actif:</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Veuillez saisir un numero de téléphone valide">
                                        </div>
                                    </div>
                                    {{-- champ caché pour image --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="" id="" style="display: none"></select>
                                        </div>
                                    </div>
                                        <!-- Image Field -->
                                    <div class="col-md-3">
                                        <div class="form-group form-group-login">
                                            <table style="">
                                                <tbody>
                                                    <tr>
                                                        <td class="image">
                                                            {!!Html::image('../fonts/img/user3.png', null, ['class'=>'teacher_image', 'id'=>'showImage'])!!}
                                                                {{-- <img src="../fonts/img/myAvatar.png" alt="" style="max-width: 150px"> --}} 
                                                            <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center; background: #ddd;">
                                                            <input type="button" name="browse_file" id="browse_file" class="form-control btn-choose btn btn-outline-dark" value="choose">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="{{ route('profeseurs.index') }}" class="text-decoration-none text-light">Fermer</a></button>
                                {!! Form::submit('Actualiser', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    <!-- First Name Field -->
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('first_name', 'Prénom:') !!}
                        {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Lastt Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('lastt_name', 'Nom:') !!}
                        {!! Form::text('lastt_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Gender Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('gender', 'Genre:') !!}
                        {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Phone Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('phone', 'n° telephone:') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Nationality Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nationality', 'Nationalité:') !!}
                        {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- No Cnib Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('no_CNIB', 'N° CNIB ou Passport:') !!}
                        {!! Form::text('no_CNIB', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div> --}}

                    <!-- Status Field -->
                    {{-- <div class="form-group col-sm-3">
                        {!! Form::label('statut', 'Statut:') !!}
                        {!! Form::hidden('statut', 0) !!}
                        {!! Form::checkbox('statut', '1', null, ['class' => 'form-control']) !!} 
                    </div>  --}}

                    <!-- Enregistered Date Field -->
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('enregistered_date', 'Date:') !!}
                        {!! Form::text('enregistered_date', null, ['class' => 'form-control','id'=>'enregistered_date']) !!}
                    </div> --}}
{{-- 
                    @push('page_scripts')
                        <script type="text/javascript">
                            $('#enregistered_date').datetimepicker({
                                format: 'YYYY-MM-DD HH:mm:ss',
                                useCurrent: true,
                                sideBySide: true
                            })
                        </script>
                    @endpush --}}

                    <!-- User Id Field -->
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::hidden('user_id', 'User Id:') !!} --}}
                        {{-- {!! Form::number('user_id', null, ['class' => 'form-control']) !!} --}}
                    {{-- </div> --}}

                    <!-- Image Field -->
                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('image', 'photo:') !!}
                        {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div> --}}
                    
                </div>   

                </div>
            </div>

            {{-- <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('profeseurs.index') }}" class="btn btn-default">Cancel</a>
            </div> --}}

           {!! Form::close() !!}

        </div>
    </div>
@endsection
