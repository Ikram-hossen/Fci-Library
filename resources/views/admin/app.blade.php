<!DOCTYPE html>
<html lang="en">
    <head>
    <title>@yield('title') -  {{ config('app.name') }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
        <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
    <link href="{{ asset('backend') }}/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    </head>
    <body class="app sidebar-mini rtl">

        @include('admin.partials.header')
        @include('admin.partials.sidebar')
        <main class="app-content" id="app">
                <div class="app-title">
                        <div class="d-flex justify-between">
                            <img src="{{asset('backend/images/images.jpg')}}" alt="image" class="img-fluid">
                            <div class="px-3">
                                <h4>Feni Computer Institute</h4>
                                <p>Feni Computer Institute is the first and only ICT Based polytechnic institute for Diploma in Engineering courses in Feni Sadar Upazila, Bangladesh. Founded in 2003, It is directed under Bangladesh Technical Education Board. </p>
                            </div>
                        </div>
                    </div>
            @yield('content')
        </main>

        <!-- Essential javascripts for application to work-->
        <script src="{{ asset('backend/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('backend/js/popper.min.js')}}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('backend/js/main.js')}}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{ asset('backend/js/plugins/pace.min.js')}}"></script> 

        <!-- Data table plugin-->
        <script type="text/javascript" src="{{ asset('backend') }}/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{ asset('backend') }}/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        @stack('scripts')
    </body>
</html>