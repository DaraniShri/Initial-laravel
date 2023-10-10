<html>
    <head>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cmsStyles.css') }}" rel="stylesheet">
    @include('cmscontent.head')
    </head>
    <body>
        <section class="cms">
            <div class="cms-container">
            @foreach($cmspages as $cmspage)
                <div class="cms-card">
                    <div class="cms-banner">
                        @if($cmspage->image)
                        <img src="{{URL::asset('/storage/'.$cmspage->image) }}" width="300px"/>
                        @endif  
                    </div>           
                    <div class="cms-title">
                        <h2>{{ $cmspage->title }}</h2>
                    </div>
                    <div class="cms-description">
                        <p>{{ $cmspage->description }}</p>
                    </div>
                    <div class="cms-button">
                        <a class="btn btn-primary" href="cms-single/{{$cmspage->id}}">View More</a>
                    </div>
                </div>
            @endforeach
            </div>
        </section>
        @include('cmscontent.foot') 
    </body>
</html>