<html>
    <head>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cmsStyles.css') }}" rel="stylesheet">
        @include('cmscontent.head')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    @foreach($cmspage as $cms)
                    <div class="single-container">
                        <div class="single-banner">
                            <img src="{{URL::asset('/storage/'.$cms->image) }}" width="250px"/>
                        </div>
                        <div class="single-title">
                            <h1>{{ $cms->title }}</h1>
                        </div>
                        <div class="single-description">
                            <p>{{ $cms->description }}</p>
                        </div>
                    </div>
                    @endforeach
                    <a href="{{ asset('cms') }}" class="btn btn-success">VIEW ALL</a>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    @include('cmscontent.foot')
    </body>
</html>