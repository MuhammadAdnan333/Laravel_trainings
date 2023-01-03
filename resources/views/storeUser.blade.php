<h1>Form</h1>
@if(session('user'))
<h4>Data Saved For {{session('user')}}</h4>
@endif
<form action="storeController" method="POST">
     @csrf
    <input type="text" name="user" placeholder="Name"><br>
    <input type="email " name="email" placeholder="email"><br>
    <input type="text" name="password" placeholder="Password"><br>
    <button type="submit">Add User</button>
</form>