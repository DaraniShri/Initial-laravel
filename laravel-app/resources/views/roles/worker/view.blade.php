<html>
    <head>
        @include('roles.header')
    </head>
    <body>
        <div class="container">
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
                    @foreach ($workers as $worker)
                        <tr id="{{ $worker->id }}">
                            <td>{{ $worker->id }}</td>
                            <td>{{ $worker->name }}</td>
                            <td>{{ $worker->email }}</td>
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