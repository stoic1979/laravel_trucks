<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
       
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    {!! link_to_route('company.index', 'WB Transports', array(), array('class' => 'navbar-brand')) !!}
                </div>
                <div class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('company.index') }}">Companies</a></li>
                
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
    </body>
</html>
