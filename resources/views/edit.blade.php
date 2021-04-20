<h1>Update Member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="Name" value="{{$data['Name']}}">
    <input type="text" name="City" value="{{$data['City']}}">
    <input type="number" name="Age" value="{{$data['Age']}}">
    <button type="Submit">Update</button>

</form>