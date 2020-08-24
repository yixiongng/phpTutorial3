<html>
    <body>
    <h3>Please fill in your details</h3>
    <form action="{{ route('student.store') }}" method="post">
    @csrf
            <p>Name: <input type="text" name="name"></p> 
            <p>Phone No.: <input type="number" name="phoneNumber"></p> 
            <p>Email: <input type="email" name="email"></p> 
            <button>Submit</button>
    </form>
    @if(\Session::has('name'))
        <p>Your name is {{ \Session::get('name')}}.</p>  
        <p>Your phone number is {{ \Session::get('phoneNumber')}}.</p>  
        <p>You email is {{ \Session::get('email')}}.</p>  
    @endif
    </body>
</html>