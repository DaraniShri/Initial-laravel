<html>
    <head>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cmsStyles.css') }}" rel="stylesheet">
    @include('cmscontent.head')
    </head>
    <body>
        <section class="">
        <div class="cms-container">
        @foreach($cmspages as $cmspage)
            <div class="cms-card">
                <div class="cms-banner">
                    @if($cmspage->image)
                    <img src="{{ asset('storage/images/'.$cmspage->image) }}" />
                    @endif  
                </div>           
                <div class="cms-banner">
                    <h2>{{ $cmspage->title }}</h2>
                </div>
                <div class="cms-banner">
                    <p>{{ $cmspage->description }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </body>
    <!-- @include('cmscontent.foot') -->
</html>