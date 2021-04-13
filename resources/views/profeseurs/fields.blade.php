<style>
    
.teacher_image{
    height: 160px;
    width: 140px;
    padding-left: 1px;
    padding-right: 1px;
    background: #eee;
    margin: 0 auto;
    border-radius: 50%;
    vertical-align: middle;
}
.image {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 30px;
}
.image > input[type="file"]{
    display: none; 
}
.btn-choose {
    padding: 3px;
    text-align: center;
    background: gray;
    border: none;
    color: black;
    border-radius: 50px;
}
.fieldset{
    margin-top: 5px;
}
.fieldset legend{
    display: block;
    widows: 100%;
    padding: 0;
    font-size: 15px;
    border:0;
    line-height: inherit;
    color: #797979;
    border-bottom: 1px solid #e5e5e5

}
.panel-heading{
    height: 40px;
    background: #f5f1f1;
    border: 1px solid rgb(226, 225, 225);
    font-size: 1.5em;
}
.bordure{
    border: 1px solid rgb(219, 218, 218)
    
}

</style>


    <div class="col-md-12">
        {{-- !-- Modal --> --}}
        <div class="modal fade left" id="teacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus mt-1"></i>
                                    Ajouter Nouveau Professeur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- le contenu du modal --}}
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
                                                                <input type="radio" name="gender" id="genre" value="1">
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
                                            <input type="text" name="dob" id="dob" class="form-control" placeholder="Veuillez entrer la date de naissance (jour/mois/année)">
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
                                                                <input type="radio" name="statut" id="status" value="1" >
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
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>

@section('third_party_scripts')
    <script type="text/javascript">
        // date de naissance
        $('#dob').datetimepicker({
            format: 'DD/MM/YY',
            useCurrent: false
        })
        $('#dob').datetimepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy'
        })
        //  naviguer image
        $('#browse_file').on('click', function(){
            $('#image').click();
        })

        $('#image').on('change', function(e){
            showFile(this,'#showImage');
        })
        
        // ----------------------------------------
        function showFile(fileInput,img,showName){
           if(fileInput.files[0]){
               var reader = new FileReader();
               reader.onload = function(e){
                   $(img).attr('src', e.target.result);
               }
               reader.readAsDataURL(fileInput.files[0]);
           }
           $(showName).text(fileInput.files[0].name)
        };
        // -----------------------------------------
    </script>
@endsection







        <!-- First Name Field -->
        {{-- <div class="form-group ">
            {!! Form::label('first_name', 'Prénom:') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Lastt Name Field -->
        {{-- <div class="form-group ">
            {!! Form::label('lastt_name', 'Nom:') !!}
            {!! Form::text('lastt_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Gender Field -->
        {{-- <div class="form-group">
            {!! Form::label('gender', 'Genre:') !!}
            {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Email Field -->
        {{-- <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Phone Field -->
        {{-- <div class="form-group ">
            {!! Form::label('phone', 'n° telephone:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Nationality Field -->
        {{-- <div class="form-group">
            {!! Form::label('nationality', 'Nationalité:') !!}
            {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- No Cnib Field -->
        {{-- <div class="form-group ">
            {!! Form::label('no_CNIB', 'N° CNIB ou Passport:') !!}
            {!! Form::text('no_CNIB', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div> --}}

        <!-- Statut Field -->
        {{-- <div class="form-group col-sm-3">
            {!! Form::label('statut', 'Statut:') !!}
            {!! Form::number('statut', null, ['class' => 'form-control']) !!}
        </div> --}}

        <!-- Enregistered Date Field -->
        {{-- <div class="form-group col-sm-6">
            {!! Form::label('enregistered_date', 'Date:') !!}
            {!! Form::text('enregistered_date', null, ['class' => 'form-control','id'=>'enregistered_date']) !!}
        </div> --}}

        {{-- @push('page_scripts')
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
        </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>   
  </div>
</div> --}}