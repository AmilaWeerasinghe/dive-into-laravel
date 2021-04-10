@include('header')
<x-header data="user component header" />
<h1>users</h1>
<h2>name : {{count($name)}}</h2>


@if($name[0]=="Amila")
<h2>Hi {{$name[0]}} is in</h2>
<h3>He is a {{$name[1]}} {{$name[2]}}</h3>
@else
<h2>Unkown User</h2>
@endif

<h3>View for loop iterate through array</h3>
@for($i=0;$i<count($name);$i++) <h4>{{$name[$i]}}</h4>
    @endfor


    @include('inner')



    <h3>View for each syntax</h3>
    @foreach($name as $user)
    <h2>{{$user}}</h2>
    @endforeach

    <script>
        var data = @json($name);
        console.warn(data)
    </script>