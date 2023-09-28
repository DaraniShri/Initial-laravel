<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th><strong>Employee ID</strong></th>
                <th><strong>Employee Name</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Actions</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $key => $employee)
                <tr>    
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->employee_name}}</td>
                    <td>{{$employee->employee_email}}</td>  
                    <td><a href="delete/{{$employee->id}}">Delete</a></td>
                    <td><a href="edit/{{$employee->id}}">edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>