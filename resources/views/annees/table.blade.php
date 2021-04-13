<div class="table-responsive">
    <table class="table" id="annees-table">
        <thead>
            <tr>
                <th>Années académiques</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($annees as $annees)
            <tr>
                <td>{{ $annees->annee_year }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['annees.destroy', $annees->annee_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('annees.show', [$annees->annee_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('annees.edit', [$annees->annee_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Êtes-vous sûr de vouloir supprimer ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
