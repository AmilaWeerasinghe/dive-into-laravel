<h1>Add member to db</h1>
<form action='add' method='POST'>
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br>
    <input type="number" name="age" placeholder="Enter Age"><br>
    <input type="number" name="id" placeholder="Enter ID"><br>
    <input type="text" name="city" placeholder="Enter City"><br>
    <button type="submit">Add member</button>
</form>