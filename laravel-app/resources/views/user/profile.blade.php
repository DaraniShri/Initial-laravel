<html>
    <head>
    @include('user.header')
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="col-sm">
                    <img src="{{ asset('img/avatar.webp')  }}" width="100px" class="rounded-circle" alt="Avatar" />
                </div>
                <div class="col-sm">
                    
                    <h3>{{ Session('userName') }}</h3>

                    <form action="{{ url('student/editProfile') }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                        <a href="{{ url('cms') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>

        @include('user.footer')
    </body>
</html>