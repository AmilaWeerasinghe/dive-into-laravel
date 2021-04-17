<h1>Login page</h1>

<form action="autheduser" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br>
    <input type="text" name="password" placeholder="enter password"><br>
    <button>Login</button>
</form>