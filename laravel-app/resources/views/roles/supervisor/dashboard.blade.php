<html>
    <head>
        <title>Supervisor</title>
        @include('roles.header')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">    
                    <div>
                        <a href="{{ url('worker/view') }}" class="btn btn-outline-success">Worker</a>
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
        @include('roles.footer')
    </body>
</html>