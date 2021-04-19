<h1>Member delete</h1>
<table border='1'>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Id</td>
        <td>City</td>
        <td>Operation</td>
    </tr>
    @foreach($members as $item)
    <tr>
        <td>{{$item['Name']}}</td>
        <td>{{$item['Age']}}</td>
        <td>{{$item['Id']}}</td>
        <td>{{$item['City']}}</td>
        <td><a href="delete/{{$item['Id']}}">Delete</a></td>
    </tr>

    @endforeach

</table>