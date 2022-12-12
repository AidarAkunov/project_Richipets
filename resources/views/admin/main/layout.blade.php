<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
        <link rel='stylesheet' href ="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('logo/logo.jpg') }}" alt="Logo" height="100" width="200">
            </div>
            <aside class="main-sidebar sidebar-light-success elevation-4">
                <a href="{{ route('basic.main.index') }}" class="brand-link">
                    <img src="{{ asset('logo/logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Richipets</span></a>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <div class="container-fluid">
                                <form action="{{ route('admin.product.index') }}">
                                    <div class="input-group">
                                        <input name="search_field" type="text" class="form-control form-control-md" placeholder="Поиск товара">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-md btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a href="{{ route('basic.main.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-link"></i>
                                <p>Перейти на сайт</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.main.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Главная</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.subcategory.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th-list"></i>
                                <p>Подкатегории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.brand.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th-large"></i>
                                <p>Бренды</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-shopping-cart"></i>
                                <p>Товары</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.vetservice.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-medkit"></i>
                                <p>Вет.сервисы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.slider.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>Слайдер</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.image.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-photo-video"></i>
                                <p>Изображения</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.property.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-archive"></i>
                                <p>Характеристики</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>Пользователи</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mainContent.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-bullhorn"></i>
                                <p>Контент</p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('admin.analysis.index') }}" class="nav-link">--}}
{{--                                <i class="nav-icon fa fa-chart-line"></i>--}}
{{--                                <p>Анализ продаж</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
            </aside>

            @yield('content')

            <footer class="main-footer">
                <strong>Copyright &copy; 2022 <a href="{{ route('basic.main.index') }}"> Richipets </a></strong>
                All rights reserved
            </footer>
        </div>
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
        <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
        <script>
            $(function () {
            bsCustomFileInput.init();
            });

          $(function () {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
              ele.each(function () {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                  title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                  zIndex        : 1070,
                  revert        : true, // will cause the event to go back to its
                  revertDuration: 0  //  original position after the drag
                })

              })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
              itemSelector: '.external-event',
              eventData: function(eventEl) {
                return {
                  title: eventEl.innerText,
                  backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                  borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                  textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
                };
              }
            });

            var calendar = new Calendar(calendarEl, {
              headerToolbar: {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
              },
              themeSystem: 'bootstrap',
              //Random default events
              events: [
                {
                  title          : 'All Day Event',
                  start          : new Date(y, m, 1),
                  backgroundColor: '#f56954', //red
                  borderColor    : '#f56954', //red
                  allDay         : true
                },
                {
                  title          : 'Long Event',
                  start          : new Date(y, m, d - 5),
                  end            : new Date(y, m, d - 2),
                  backgroundColor: '#f39c12', //yellow
                  borderColor    : '#f39c12' //yellow
                },
                {
                  title          : 'Meeting',
                  start          : new Date(y, m, d, 10, 30),
                  allDay         : false,
                  backgroundColor: '#0073b7', //Blue
                  borderColor    : '#0073b7' //Blue
                },
                {
                  title          : 'Lunch',
                  start          : new Date(y, m, d, 12, 0),
                  end            : new Date(y, m, d, 14, 0),
                  allDay         : false,
                  backgroundColor: '#00c0ef', //Info (aqua)
                  borderColor    : '#00c0ef' //Info (aqua)
                },
                {
                  title          : 'Birthday Party',
                  start          : new Date(y, m, d + 1, 19, 0),
                  end            : new Date(y, m, d + 1, 22, 30),
                  allDay         : false,
                  backgroundColor: '#00a65a', //Success (green)
                  borderColor    : '#00a65a' //Success (green)
                },
                {
                  title          : 'Click for Google',
                  start          : new Date(y, m, 28),
                  end            : new Date(y, m, 29),
                  url            : 'https://www.google.com/',
                  backgroundColor: '#3c8dbc', //Primary (light-blue)
                  borderColor    : '#3c8dbc' //Primary (light-blue)
                }
              ],
              editable  : true,
              droppable : true, // this allows things to be dropped onto the calendar !!!
              drop      : function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                  // if so, remove the element from the "Draggable Events" list
                  info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
              }
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            // Color chooser button
            $('#color-chooser > li > a').click(function (e) {
              e.preventDefault()
              // Save color
              currColor = $(this).css('color')
              // Add color effect to button
              $('#add-new-event').css({
                'background-color': currColor,
                'border-color'    : currColor
              })
            })
            $('#add-new-event').click(function (e) {
              e.preventDefault()
              // Get value and make sure it is not null
              var val = $('#new-event').val()
              if (val.length == 0) {
                return
              }

              // Create events
              var event = $('<div />')
              event.css({
                'background-color': currColor,
                'border-color'    : currColor,
                'color'           : '#fff'
              }).addClass('external-event')
              event.text(val)
              $('#external-events').prepend(event)

              // Add draggable funtionality
              ini_events(event)

              // Remove event from text input
              $('#new-event').val('')
            })
          })
        </script>
    </body>
</html>
