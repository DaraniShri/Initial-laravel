<html>
    <head>
    @include('includes.header')
    </head>
    <body>
        <div class="table-responsive">
            <table id="table">
                <thead>
                    <tr>
                        <th><strong>Employee ID</strong></th>
                        <th><strong>Employee Name</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Actions</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <script>
                        $(document).ready( function () {
                            $('table').DataTable( function({
                                
                            }));
                        } );
                    </script> -->
                    @foreach($employees as $key => $employee)
                    <tr class="employee{{$employee->id}}">
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->employee_name}}</td>
                        <td>{{$employee->employee_email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('includes.footer')
    </body>
</html>
<script type="text/javascript">
$(document).ready( function () {
    var data = [
        [
            "1",
            "System Architect",
            "Edinburgh@gmail.com",
            
        ],
        [
            "2",
            "Director",
            "Edinburgh@gmail.com",
            
        ]
    ];
    jquery('#table').DataTable({
        data: data,
    });
});
</script>