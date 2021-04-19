<h1>Members list</h1>

<table border='1'>
    <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Id</td>
        <td>City</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['Name']}}</td>
        <td>{{$member['Age']}}</td>
        <td>{{$member['ID']}}</td>
        <td>{{$member['City']}}</td>
    </tr>

    @endforeach

</table>