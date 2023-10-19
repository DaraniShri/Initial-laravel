<html>
    <head>
        @include('roles.header')
    </head>
    <body>
        <div class="container">
            <h1>Supervisors</h1>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>
                <tfoot>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tfoot>
                <tbody>
                    @foreach ($supervisors as $supervisor)
                        <tr id="{{ $supervisor->id }}">
                            <td>{{ $supervisor->id }}</td>
                            <td>{{ $supervisor->name }}</td>
                            <td>{{ $supervisor->email }}</td>
                            @if(Auth::user()->name == 'admin')
                                <td><a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>                                
                            @endif
                        <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('roles.footer')
    </body>
</html>