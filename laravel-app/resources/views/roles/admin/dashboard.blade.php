<html>
    <head>
        <title>Admin</title>
        @include('roles.header')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <a href="{{ url('roles/register') }}" class="btn btn-outline-primary">Create</a>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <a href="{{ url('manager/view') }}" class="btn btn-outline-success">Manager</a>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <a href="{{ url('supervisor/view') }}" class="btn btn-outline-success">Supervisor</a>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <a href="{{ url('worker/view') }}" class="btn btn-outline-success">Worker</a>
                    </div>
                </div>
            </div>
        </div>
        @include('roles.footer')
    </body>
</html>