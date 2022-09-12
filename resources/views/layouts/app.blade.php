<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script>
        var aray = null;
        function $(elemento){
            return document.querySelector(elemento);
        }
        function criar(elemento){
            return document.createElement(elemento);
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- VUE.js -->
    <script src="https://unpkg.com/vue@next"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <pre>
    </pre>
    <hr>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    {{$users = 4}}
        <main class="py-4" id="vue-app">
            @yield('content')
        </main>
    </div>
            <script>
                const myApp = {
                    data(){
                        return {
                            name: "{{Auth::user()->name}}",
                            id: "{{Auth::user()->id}}",
                            recurso : ['amanda',43,'amanda@gmail.com'],
                            conjunto_users: aray
                        }
                    },
                    methods: {
                        buscarUsuarios(e){
                            e.preventDefault();
                            alert(this.name);
                        },
                        percorrerTabela(){
                            for(var i = 0; i < aray.length;i++){
                                let tr = criar('tr');
                                let td_id = criar('th');
                                let td_nome = criar('td');
                                let td_email = criar('td');
                                let td_btn = criar('td');
                                
                                td_id.innerHTML = aray[i].id;
                                td_nome.innerHTML = aray[i].name;
                                td_email.innerHTML = aray[i].email;

                                tr.appendChild(td_id);
                                tr.appendChild(td_nome);
                                tr.appendChild(td_email);

                                let btn_alterar = criar('button');
                                let btn_delete = criar('button');
                                btn_alterar.innerHTML = 'alterar';
                                btn_delete.innerHTML = 'deletar';
                                btn_alterar.setAttribute('class', 'btn-info btn');
                                btn_delete.setAttribute('class', 'btn-danger btn');
                                td_btn.appendChild(btn_alterar);
                                td_btn.appendChild(btn_delete);
                                tr.appendChild(td_btn);
                                tabela.appendChild(tr);
                            }
                        }
                    }
                }
                Vue.createApp(myApp).mount("#vue-app");

                var tabela = $('#tabela');
                
                
            </script>
    
    <!-- AJAX -->
    <script src="js/ajax.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
