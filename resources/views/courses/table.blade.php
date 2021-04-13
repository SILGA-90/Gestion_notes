<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Nom matière</th>
        <th>Code matière</th>
        <th>Description matière</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $courses)
            <tr>
                <td>{{ $courses->course_name }}</td>
            <td>{{ $courses->course_code }}</td>
            <td>{{ $courses->course_description }}</td>
            <td>
                @if ($courses->status == 1)
                    <span class="btn btn-success"> Activé</span>    
                @else
                    <span class="btn btn-danger">Désactivé</span> 
                @endif
            </td>
                
               
                <td width="120">
                    {!! Form::open(['route' => ['courses.destroy', $courses->course_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$courses->course_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('courses.edit', [$courses->course_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez-vous vraiment supprimer ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
