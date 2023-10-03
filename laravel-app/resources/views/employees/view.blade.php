<html>
    <head>
    @include('includes.header')
    </head>
    <body>
        <div class="table-responsive">
            <table class="table table-striped" id="id-table">
                <thead>
                    <tr>
                        <th><strong>Employee ID</strong></th>
                        <th><strong>Employee Name</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Actions</strong></th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        @include('includes.footer')
    </body>
</html>
<script type="text/javascript">
$(document).ready( function () {
    var data = "{{ $employees }}";
    var employeeList = JSON.parse(data.replace(/&quot;/g,'"'));
    var table = new DataTable('#id-table',{
        data: employeeList,
        columns: [
            { data: 'id' },
            { data: 'employee_name' },
            { data: 'employee_email' }, 
            { defaultContent: '<button class="btn btn-primary" id="edit-employee">Edit</button><button class="btn btn-danger" id="delete-employee">Delete</button>'}             
        ],
    });
    $("#edit-employee").click(function () {
        $(this).closest("tr").find('td:first').map(function(){
            window.location.href = window.location.origin+"/edit/"+$(this).text();
        });
    });
    $("#delete-employee").click(function () {
        $(this).closest("tr").find('td:first').map(function(){
            window.location.href = window.location.origin+"/delete/"+$(this).text();
        });
    });
});

</script>
