<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    {{method_field('DELETE')}}
    <input type="text" name="name" placeholder="Enter UserName">
    <input type="email" name="email" placeholder="Enter Email">
    <button type="submit">Submit</button>

</form>