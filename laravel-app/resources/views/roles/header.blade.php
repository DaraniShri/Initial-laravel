<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/roleStyles.css') }}" rel="stylesheet">
<section class="header">
    <div class="logo">
        <img src="{{ asset('img/database.jpeg') }}" alt="logo" width="" />
    </div>
    <div class="container">
        <h2><center>Roles<center></h2>
    </div>
    <div class="sign-out-button">
        <a href="{{ url('role/signout') }}" class="btn btn-danger">Signout</a>
    </div>
</section>