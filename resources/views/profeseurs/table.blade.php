<div class="table-responsive">
    <table class="table" id="profeseurs-table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Genre</th>
                <th>Email</th>
                <th>N° telephone</th>
                <th>Nationalité</th>
                <th>N° CNIB ou Passport</th>
                <th>Statut</th>
                <th>Date d'enregistrement</th>            
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profeseurs as $profeseurs)
            <tr>
            <td><img src="{{asset('teacher_images/' .$profeseurs->image)}}" alt="" class="rounded-circle" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
            <td>{{ $profeseurs->last_name }}</td>
            <td>{{ $profeseurs->first_name }}</td>
            <td>{{ $profeseurs->dob}}</td>
            <td>
                
                @if ($profeseurs->gender == 0)
                    <span>Masculin</span>
                @else
                     <span>Féminin</span>
                @endif
                
            </td>
            <td>{{ $profeseurs->email }}</td>
            <td>{{ $profeseurs->phone }}</td>
            <td>{{ $profeseurs->nationality }}</td>
            <td>{{ $profeseurs->no_CNIB }}</td>
            <td>
                @if ($profeseurs->statut == 0)
                    <span>Célibataire</span>
                @else
                     <span>Marié(e)</span>
                @endif
                
            </td>
            <td>{{ $profeseurs->created_at }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['profeseurs.destroy', $profeseurs->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('profeseurs.show', [$profeseurs->teacher_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('profeseurs.edit', [$profeseurs->teacher_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('vous confirmez la suppréssion ?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
