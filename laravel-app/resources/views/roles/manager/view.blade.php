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
                    @foreach ($managers as $manager)
                        <tr id="{{ $manager->id }}">
                            <td>{{ $manager->id }}</td>
                            <td>{{ $manager->name }}</td>
                            <td>{{ $manager->email }}</td>
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