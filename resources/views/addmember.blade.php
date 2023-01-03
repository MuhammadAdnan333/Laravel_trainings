<h1>Add Members</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name">
    <input type="text" name="email" placeholder="Enter Your Email">
    <input type="text" name="city" placeholder="Enter Your City">
    <button type="submit">Add Member</button>
</form>