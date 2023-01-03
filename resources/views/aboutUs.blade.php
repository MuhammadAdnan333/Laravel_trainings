<x-header componentName = "About" />
<h1>aboutus</h1>
<a href="{{URL::to('/home')}}">Home</a>
    <br>
    <a href="{{URL::to('/welcome')}}">Welcome</a>

    <!-- @include('inner') -->

<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
    <br>
@endfor -->

<!-- @foreach ($users as $user)
    <p>This is user {{ $user }}</p>
@endforeach -->
<!-- @csrf -->
<!-- <script>
    var data = @json($users);
    console.log(data);
</script> -->
<!-- // function loadView(){
    //     $data = ['salman','adnan','muzamil'];
    //     return view('users',["users"=>$data]);
    // } -->
    <!-- <h1> Users login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter User Name">
    <input type="text" name="password" placeholder="Enter Password">
    <button type="submit">Submit</button>
</form>
function getData(Request $req){

return $req->input();
}
Route::view('login','users');
Route::post('users',[UserController::class,'getData']); -->
<!-- <h1>Users List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>profile Photo</td>
    </tr>
    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src="{{$user['avatar']}}" alt="" /></td>
    </tr>
    @endforeach
</table> -->
<!-- class UserController extends Controller
{
    
    // function index(){
    //     return DB::select("SELECT * FROM `users` ");
    // }
    // getData Function use display data from DB using Model
    // function getData(){
    //     return user::all();
    // }
    // function index(){
    //     $data = Http::get("//reqres.in/api/users?page=1");
    //     return view('users',['collection'=>$data['data']]);
    //     //echo "API call will be here" ;
    // }
    
    
} -->
