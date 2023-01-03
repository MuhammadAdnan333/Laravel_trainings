<h1>Update Member</h1>
<form action="/edit" method = "POST" >
    @csrf
    <input type="hidden" name="id" value = "{{$data['id']}}">
    <input type="text" name = "name" value = "{{$data['name']}}" >
    <input type="text" name = "email" value = "{{$data['email']}}" >
    <input type="text" name = "city" value = "{{$data['city']}}" >
    <button type="submit">Update</button>

</form>