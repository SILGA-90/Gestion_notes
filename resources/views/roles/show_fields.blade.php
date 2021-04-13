<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $roles->name }}</p>
</div>
{{-- ajout du bouton retour --}}
<div class="ml-3">
    <a class="btn btn-dark "
        href="{{ route('roles.index') }}">
        Retour
    </a>
</div>

