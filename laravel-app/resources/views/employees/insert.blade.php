<div class="container">
    <form action="/create" method="post">
    @csrf
        <div>
            <label for="employee-name">Enter Name</label>
            <input type="text" name="employee-name" id="employee-name" />
        </div>
        <div>
            <label for="employee-email">Enter Email</label>
            <input type="email" name="employee-email" id="employee-email" />
        </div>
        <div>
            <label for="employee-email">Enter Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <div>
            <input type="submit" name="submit" value="Add Student" />
        </div>
    </form>
</div>