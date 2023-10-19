<html>
    <head>
        @include('roles.header')
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                <form action="{{ route('roles_signin') }}" method="post">
                @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </form>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
        @include('roles.footer')
    </body>
</html>