{{-- 
 <li class="treeview">
    <a href="#" class="d-flex">
        <i class="fas fa-tachometer-alt"></i>
        <p>Menu dashboard</p>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
<ul class="treeview-menu"> --}}




<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <p>Classes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <i class="fas fa-chalkboard-teacher"></i>
       
        <p>Classes disponibles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admissions.index') }}"
       class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
       <i class="fas fa-users-cog"></i>
       
        <p>Admissions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
       <i class="fas fa-user-tag"></i>
      
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('profeseurs.index') }}"
       class="nav-link {{ Request::is('profeseurs*') ? 'active' : '' }}">
       <i class="fas fa-user-circle"></i>
       
        <p>Professeurs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <i class="fas fa-level-up-alt"></i>
       
        <p>Niveau</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('attendances.index') }}"
       class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
       <i class="fas fa-user-check"></i>
        <p>Verification des absences</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('annees.index') }}"
       class="nav-link {{ Request::is('annees*') ? 'active' : '' }}">
        <i class="fas fa-calendar-check"></i>
       
        <p>Annees</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="fas fa-users"></i>
    
        <p>Utilisateurs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('semestres.index') }}"
       class="nav-link {{ Request::is('semestres*') ? 'active' : '' }}">
       <i class="fas fa-clone"></i>
        <p>Semestres</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('jours.index') }}"
       class="nav-link {{ Request::is('jours*') ? 'active' : '' }}">
       <i class="fas fa-calendar-day"></i>
       
        <p>Jours</p>
    </a>
</li>
{{-- </ul>
</li>  --}}


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
       <i class="fas fa-book-open"></i>       
        <p>Matières</p>
    </a>
</li>


