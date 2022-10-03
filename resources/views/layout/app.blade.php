<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css')}}">

    {{-- datatable --}}
    <link rel="stylesheet" href="{{asset('asset/datatable/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset/datatable/responsive.bootstrap4.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset/datatable/buttons.bootstrap4.min.css')}}">

    {{-- izitoast --}}
    <link rel="stylesheet" href="{{ asset('asset/izitoast/iziToast.min.css')}}">
    
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        
        @include('layout.navbar')
        
        
        @include('layout.sidebar')
        
        <div class="content-wrapper">

            @yield('content')
            
            
        </div>
        
       @include('layout.footer')
       
       <aside class="control-sidebar control-sidebar-dark">
           
    </aside>
    
</div>


<script src="{{asset('asset/js/jquery.min.js')}}"></script>

<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('asset/js/adminlte.min.js')}}"></script>

{{-- datatable --}}
<script src="{{asset('asset/datatable/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('asset/datatable/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('asset/datatable/dataTables.responsive.min.js')}}"></script>

<script src="{{asset('asset/datatable/responsive.bootstrap4.min.js')}}"></script>

{{-- sweetalert (hapus) --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- izitoast --}}
<script src="{{ asset('/asset/izitoast/iziToast.min.js')}}"></script>

@stack('script')

</body>

</html>
