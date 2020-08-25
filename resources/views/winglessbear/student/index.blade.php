@if(\Session::has('success'))
        <p>{{\Session::get('success')}}.</p>  
    @endif
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Edit</th>
    </tr>
    @foreach($students as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['phoneNumber']}}</td>
        <td>{{$row['email']}}</td>
        <td><a href="{{action('StudentController@edit',$row['id'])}}">Edit</a></td>
    </tr>
    @endforeach
</table>