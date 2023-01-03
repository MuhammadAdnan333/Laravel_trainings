<h1>Members List</h1>
<div>
<table border=1>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>City</td>
        <td>Opreations</td>
    </tr>
    @foreach($members as $member){
        <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['city']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a>
        <a href={{"edit/".$member['id']}}>Edit</a>
    </td>

    </tr>
}
@endforeach
</table>
</div>