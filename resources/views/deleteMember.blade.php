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
        <td>{{$item['id']}}</td>
        <td>{{$item['City']}}</td>
        <td><a href={{"delete/" .$item['id']}}>Delete</a></td>
        <td><a href={{"edit/" .$item['id']}}>Edit</a></td>
    </tr>

    @endforeach

</table>