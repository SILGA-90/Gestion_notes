<!-- Annee Year Field -->
<div class="col-sm-12">
    {!! Form::label('annee_year', 'Année académique:') !!}
    <p>{{ $annees->annee_year }}</p>
</div>
{{-- details année académique --}}
<div class="col-sm-12">
    {!! Form::label('annee_year', 'Ajoutée le:') !!}
    <p>{{ $annees->created_at }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('annee_year', 'Actualisée le:') !!}
    <p>{{ $annees->updated_at }}</p>
</div>
{{-- ajout du bouton retour --}}
<div class="ml-3">
    <a class="btn btn-dark"
        href="{{ route('annees.index') }}">
        Retour
    </a>
</div>

