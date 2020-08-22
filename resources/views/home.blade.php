@extends('layouts.app')

@section('content')
<html>
    <body>
        <h1>Welcome to <?php echo $websiteName?></h1>
        <h2>This is the home page</h2>

        <form method="get" action="contactUs">
            <button>Contact Us</button>
        </form>

        <form method="get" action="aboutUs">
            <button>About Us</button>
        </form>
        @if($lastStudentName != NULL)
            <p>The last registered student is {{$lastStudentName}}</p>
        @endif
        <form action="{{ route('student.create') }}" method="get">
            <button>Create Student</button>
        </form>
        <form action="{{ route('student.index') }}" method="get">
            <button>Edit Student</button>
        </form>
    </body>
</html>
@endsection
