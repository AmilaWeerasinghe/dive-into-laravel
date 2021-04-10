<h1>User Login</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="newusers" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id" /><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="userpassword" placeholder="enter user password" /><br>
    <span style="color:blue">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit">Login</button>
</form>