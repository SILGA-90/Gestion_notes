<div class="table-responsive">
    <table class="table" id="semestres-table">
        <thead>
            <tr>
                <th>Nom du semestre</th>
        <th>Début du semestre</th>
        <th>Fin du semestre</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semestres as $semestres)
            <tr>
                <td>{{ $semestres->name }}</td>
            <td>{{ $semestres->start_date }}</td>
            <td>{{ $semestres->end_date }}</td>
            <td>{{ $semestres->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['semestres.destroy', $semestres->semester_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('semestres.show', [$semestres->semester_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('semestres.edit', [$semestres->semester_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Veuillez confirmer la suppression?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
