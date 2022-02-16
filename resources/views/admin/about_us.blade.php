@include("template.top-header")

<h1>Admin rólunk oldal</h1>

@foreach($names as $name)
    <h1>{{$name}}</h1>
@endforeach
