<html>
    <head>
    @include('user.header')
    </head>
    <body>
        <div class="wrapper">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <form action="{{ route('student_updateProfile') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" hidden class="form-control" name="id" id="id" Placeholder="Enter Id" value="{{ Session('userId') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" Placeholder="Enter Name" value="{{ Session('userName') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" Placeholder="Enter Email" value="{{ Session('userEmail') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" Placeholder="Enter Password" required >
                        </div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
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