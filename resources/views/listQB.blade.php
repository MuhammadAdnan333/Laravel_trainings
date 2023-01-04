<h1>List Using Query Builder</h1>
<table border =1>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>City</td>
    </tr>
    @foreach($data as $member)
    <tr>
        <td>{{$member->id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->email}}</td>
        <td>{{$member->city}}</td>
    </tr>
    @endforeach
</table>