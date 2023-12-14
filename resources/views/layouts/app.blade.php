<!DOCTYPE html><html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TRENDS SHOP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     
</head>

    <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">{{ __('lang.Accueil')}}
                </a>

                <a class= "navbar-brand" href="{{url('/apropos')}}" >{{ __('lang.Apropos')}}</a>
                
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         @switch($locale) 
                            @case('en')  
                            <img src="{{asset('images/flag/en.png')}}" width="30px" height="20px">English
                            @break  
                            @case('fr')  
                            <img src="{{asset('images/flag/fr.png')}}" width="30px" height="20px">Francais
                            @break   
                            @case('es')  
                            <img src="{{asset('images/flag/es.png')}}" width="30px" height="20px">Espagnol
                            @break  
                            @default     
                            <img src="{{asset('images/flag/en.png')}}" width="30px" height="20px">English
                        @endswitch
                         <span class="caret"></span>
                        </a>    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/en"><img src="{{asset('images/flag/en.png')}}" width="30px" height="20px">    English</a>  
                            <a class="dropdown-item" href="lang/fr"><img src="{{asset('images/flag/fr.png')}}" width="30px" height="20px">    Francais</a>  
                            <a class="dropdown-item" href="lang/es"><img src="{{asset('images/flag/es.png')}}" width="30px" height="20px">    Espagnol</a>    
                        </div>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                          
                                <a class="nav-link" href="{{ route('login') }}">{{ __('lang.connexion')}}</a>
                            
                        @endif

                        @if (Route::has('register'))
                         
                                <a class="nav-link" href="{{ route('register') }}">{{ __('lang.inscription')}}</a>
                           
                        @endif

                       
                         
                           
                    
                         
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}"></script>

</body>
</html>
