<!-- Modal -->
<div class="modal fade" id="matiereModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez une matière</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <!-- Course Name Field -->
        <div class="form-group">
            {!! Form::label('course_name', '  Nom de la matière:') !!}
            {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Course Code Field -->
        <div class="form-group">
            {!! Form::label('course_code', 'Code de la matière:') !!}
            {!! Form::text('course_code', null, ['placeholder' => 'Veuillez saisir le code de la matière', 'class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Course Description Field -->
        <div class="form-group">
            {!! Form::label('course_description', 'Description de la matière:') !!}
            {!! Form::textarea('course_description', null,['placeholder' => 'Veuillez entrer une description de la matière', 'class' => 'form-control', 'cols'=> 40, 'rows'=>2]) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-md-3 d-flex">
            {!! Form::label('status', 'Statut:') !!}
            {!! Form::hidden('status', 0) !!}
            {!! Form::checkbox('status', '1', null, ['class' => 'form-control']) !!} 
        </div>       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
    </div>
    </div>   
  </div>
</div>