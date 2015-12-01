<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('bootstrap-3.3.6-dist/css/bootstrap.css') }}">
        <script>
        function pageLoaded() {
            @if(Session::has('flash_message'))
                var notify = $('#notificationModal');
                notify.find('.modal-body p').text("{{ Session::get('flash_message') }}");
                notify.modal('show');                  
            @endif           
        }

        </script>
    </head>
    <body onLoad="pageLoaded()">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    {!! link_to_route('company.index', 'WB Transports', array(), array('class' => 'navbar-brand')) !!}
                </div>
                <div class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('company.index') }}">Companies</a></li>
                    <li><a href="{{ route('customer.index') }}">Customers</a></li>
                    <li><a href="{{ route('driver.index') }}">Drivers</a></li>
                    <li><a href="{{ route('truck.index') }}">Trucks</a></li>
                    <li><a href="#">Trailers</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="#">Uploads</a></li>
                    @if (Auth::check())
                    <li><a href="/auth/logout/">Logout</a></li>
                
                    @endif

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @section('content')
                This is the master sidebar.
                @show
            </div>
        </div>
        @include('popups.deleteconfirm')
        @include('popups.notification')
    </body>
</html>
