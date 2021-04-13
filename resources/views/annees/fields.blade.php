
<!-- Modal -->
<div class="modal fade" id="anneeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-registered"></i>Ajoutez une année académique</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Annee Year Field -->
                <div class="form-group">
                    {!! Form::label('annee_year', 'Année académique:') !!}
                    {!! Form::text('annee_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                {!! Form::submit('Sauvegarder', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>