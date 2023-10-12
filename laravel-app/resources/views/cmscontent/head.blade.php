<section class="header">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="" />
    </div>
    <div class="container">
        <h2><center>CMS Page in LARAVEL<center></h2>
    </div>
    <div class="student-profile">
        <a href="{{ url('student/profile') }}"><img src="{{ asset('img/avatar.webp')  }}" class="rounded-circle" alt="Avatar" /></a>
    </div>
    <div class="signout-button">
        <a href="{{ route('student_signout') }}" class="btn btn-danger signout">Sign Out</a>
    </div>
</section>