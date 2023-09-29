<html>
    <head>
        @include('includes.header')
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                <form action="/view" method="get">
                    <div class="form-group">
                        <input type="email" class="col-xs-3" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="col-xs-3" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>