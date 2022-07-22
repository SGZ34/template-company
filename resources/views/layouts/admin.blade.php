<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>GRTEMPORALES</title>

        
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
                   
                    <span class="brand-text font-weight-bold">GRTEMPORALES</span>
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
                          <a href="/" class="nav-link">
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

                <div class="content container">@yield('content')</div>
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
        <script>
            const spanish = {
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "notEmpty": "No Vacio",
                "not": "Diferente de"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStarts": "No empieza con",
                "notEnds": "No termina con"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ]
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro que desea eliminar %d filas?",
                "1": "¿Está seguro que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
        }
    },
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "search": "Busqueda",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:"
        },
        "emptyError": "El nombre no puede estar vacio",
        "removeConfirm": "¿Seguro que quiere eliminar este %s?",
        "removeError": "Error al eliminar el registro",
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "renameLabel": "Nuevo nombre para %s",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado"
    }
}  
        </script>
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
