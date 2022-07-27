<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>GR Temporales</title>

        
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <link
            rel="stylesheet"
            href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        />
        <link rel="stylesheet" href="/css/datatable/datatables.min.css">
        
        <link rel="stylesheet" href="/css/adminlte/adminlte.min.css?v=3.2.0" />
        <link rel="stylesheet" href="/css/alertify/css/alertify.min.css">
        <link rel="stylesheet" href="/css/alertify/css/themes/bootstrap.min.css">
        @yield('styles')

        
    </head>

    <body class="hold-transition sidebar-mini">

        
        <div class="wrapper">
            <nav
                class="main-header navbar navbar-expand navbar-white navbar-light"
            >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="pushmenu"
                            href="#"
                            role="button"
                            ><i class="fas fa-bars"></i
                        ></a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav ml-auto">
                   
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                        >
                            <span class="dropdown-item dropdown-header"
                                style="font-size: 20px">{{auth()->user()->name}}</span
                            >
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                Cambiar contraseña
                                <span class="float-right text-sm text-warning"
                                    ><i class="fas fa-key"></i></span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                Cambiar información
                                <span class="float-right text-primary text-sm"
                                    ><i class="fas fa-cog"></i></span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();
                            ">
                              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                               </form>
                                Cerrar sesión
                                <span class="float-right text-danger text-sm"
                                    ><i class="fas fa-sign-out"></i></span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"
                                >Ver perfil</a
                            >
                        </div>
                    </li>
                   
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="/" class="brand-link text-center">
                   
                    <span class="brand-text font-weight-bold">GR Temporales</span>
                </a>

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                        
                        <div class="info">
                            <a href="#" class="d-block">{{auth()->user()->name}}</a>
                        </div>
                    </div>

                    

                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false"
                        >
                        <li class="nav-item mb-4">
                          <a href="/home" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt-average"></i>
                              <p>
                                  Dashboard
                                  
                              </p>
                          </a>
                      </li>
                      <li class="nav-header">
                        Gestión de información
                      </li>
                            <li class="nav-item">
                                <a href="/vacantes" class="nav-link">
                                  <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>
                                        Vacantes
                                        
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                              <a href="/empleos" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                  <p>
                                      Empleos
                                      
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="/ciudades" class="nav-link">
                              <i class="nav-icon fas fa-city"></i>
                                <p>
                                  Ciudades
                                    
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="/empresas" class="nav-link">
                            <i class="nav-icon fas fa-hand-holding-usd"></i>
                              <p>
                                  Empresas
                                  
                              </p>
                          </a>
                      </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0">@yield('title')</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4">@yield('content')</div>
            </div>

            <aside class="control-sidebar control-sidebar-dark"></aside>

            <footer class="main-footer text-center mt-4">
                <strong
                    >Copyright &copy; {{date("Y")}}
                    <a href="https://adminlte.io">GRTEMPORALES</a>.</strong
                >
                Todos los derechos reservados.
                
            </footer>
        </div>

        <script src="/js/adminlte/jquery.min.js"></script>
        <script src="/js/adminlte/bootstrap.bundle.min.js"></script>
        <script src="/js/adminlte/adminlte.js?v=3.2.0"></script>
        <script src="/js/datatable/datatables.min.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <script type="module" src="/js/datatable/table.js"></script>
        
        @yield('scripts')
        @if (Session::has("success"))
            <script>
                 alertify.set('notifier','position', 'top-right');
                alertify.success('{{Session::get('success')}}');
  
            </script>
        @endif
        @if (Session::has("warning"))
            <script>
                alertify.set('notifier','position', 'top-right');
                alertify.warning('{{Session::get('warning')}}');
            </script>
        @endif
        @if (Session::has("error")) 
            <script>
                alertify.set('notifier','position', 'top-right');
                alertify.error('{{Session::get('error')}}');
            </script>
        @endif
    </body>
</html>
