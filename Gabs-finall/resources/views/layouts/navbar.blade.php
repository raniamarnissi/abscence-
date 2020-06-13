


<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm"  >

    <div class="container">
        <a style="color:white;font-size:20px;font-family:Ravie" class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Gestion-absences') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
            @auth
                <ul class="navbar-nav mr-auto">
                    @if (Auth:: user()->role=="admin")
               




               
                    <li class="nav-item dropdown">
                            <a style="color:white;"  class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">register</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="{{ url('admin/createuser') }}">register user</a>
                            <a class="dropdown-item" href="{{ route('modul.create') }}">register modul</a>
                            <a class="dropdown-item" href="{{ route('classe.create') }}">register classe</a>
                          
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a style="color:white;"    class="nav-link " href="{{ route('users.index') }}" >student</a>
                    
                        </li>
                        <li class="nav-item">
                            <a style="color:white;"  href="{{ url('admin/indexteacher') }}" class="nav-link">teacher</a>
                        </li>
                        <!-- <li class="nav-item"> -->
                            <a style="color:white;"  href="{{ route('modul.index') }}" class="nav-link">modul</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="color:white;"  class="nav-link " href="{{ route('classe.index') }}" >classe</a>
                    
                        </li>
                        
                    @elseif (Auth:: user()->role=="student")
                   
                    <a  style="color:white;" class="dropdown-item" href="{{ url('/profile') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('profile-form').submit();" class="fa fa-btn fa-user">
                                {{ __('Profile') }}
                            </a>
                            <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                            <a  style="color:white;" class="dropdown-item" href="{{ url('student/affiche_abscence') }}">abscence</a>"

                        @else 

                        
                        <li class="nav-item">
                            <a style="color:white;"  href="{{ url('teacher/affichemodul') }}"class="nav-link"> principal page</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;"   href="{{ url('teacher/affichemodulse') }}"class="nav-link"> séance</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;"  href="{{ url('teacher/affectabsence') }}" class="nav-link">afficher abscence</a>
                        </li>
                        <li class="nav-item">
                            <a  style="color:white;" href="{{ url('/search')}}" class="nav-link">gerer la gestion des absenses</a>

                        </li>
                        <li class="nav-item">
                            <a style="color:white;"  href="{{ url('/ViewPages')}}" class="nav-link">date</a>
                            
                        </li>
                  
                           
                    @endif
                </ul>
            @endauth

              <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                    <a style="color:white;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:relative;" v-pre>
                        <img src="/uploads/images/{{ Auth::user()->avatar}}" style="width:32px; height:32px; top:10px; left:10px; border-radius:50%;" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                               
                    <a  style="color:black;" class="dropdown-item" href="{{ url('/profile') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('profile-form').submit();" class="fa fa-btn fa-user">
                                {{ __('Profile') }}
                            </a>
                            <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>