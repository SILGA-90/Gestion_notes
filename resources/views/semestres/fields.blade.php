{{-- !-- Modal --> --}}
<div class="modal fade" id="semesterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez une classe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <!-- Name Field -->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Start Date Field -->
        <div class="form-group">
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
        <div class="form-group">
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