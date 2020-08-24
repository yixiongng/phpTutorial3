<html>
    <body>
    <form action="{{ route('student.update',$id) }}" method="post">
    @csrf
            <p>Name: <input type="text" name="name" value="{{$student->name}}"></p> 
            <p>Phone No.: <input type="number" name="phoneNumber" value="{{$student->phoneNumber}}"></p> 
            <p>Email: <input type="email" name="email" value="{{$student->email}}"></p> 
            <button>Update</button>
    </form>
    </body>
</html>