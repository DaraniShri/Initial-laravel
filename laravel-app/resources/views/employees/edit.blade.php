<html>
    <head>@include('includes.header')</head>
    <body>
        <div class="container">
            <form action="/update" method="post">
            @csrf
            @foreach ($employeeDetails as $key => $employeeDetail)
                <div>
                    <input type="hidden" name="id" value="{{ $employeeDetail-> id }}">
                </div>
                <div>
                    <label for="employee-name">Enter Name</label>
                    <input type="text" name="employee-name" id="employee-name" value="{{ $employeeDetail -> employee_name }}" />
                </div>
                <div>
                    <label for="employee-email">Enter Email</label>
                    <input type="email" name="employee-email" id="employee-email" value="{{ $employeeDetail -> employee_email }}" />
                </div>
                <div>
                    <input type="submit" name="submit" value="Update Student" />
                </div>
            @endforeach
            </form>
        </div>
    </body>
</html>