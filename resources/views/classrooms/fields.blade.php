<!-- Classroom Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> --}}

<!-- Classroom Code Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Classroom Description Field -->
{{-- <div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Classroom Status Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    {!! Form::number('classroom_status', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Modal -->
<div class="modal fade" id="classroomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez une classe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <!-- Classroom Name Field -->
        <div class="form-group">
            {!! Form::label('classroom_name', '  Nom de la classe:') !!}
            {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Classroom Code Field -->
        <div class="form-group">
            {!! Form::label('classroom_code', 'Code de la classe:') !!}
            {!! Form::text('classroom_code', null, ['placeholder' => 'Veuillez saisir le code de la classe', 'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Classroom Description Field -->
        <div class="form-group">
            {!! Form::label('classroom_description', 'Description de la classe:') !!}
            {!! Form::textarea('classroom_description', null,['placeholder' => 'Veuillez entrer une description de la matière', 'class' => 'form-control', 'cols'=> 40, 'rows'=>2]) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-md-3 d-flex">
            {!! Form::label('status', 'Statut:') !!}
            {!! Form::hidden('classroom_status', 0) !!}
            {!! Form::checkbox('classroom_status', '1', null, ['class' => 'form-control']) !!} 
        </div>       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    </div>
    </div>   
  </div>
</div>