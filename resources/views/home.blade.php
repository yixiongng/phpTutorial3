<?php
    /*requirement
        - create a form for user to fill in 
    */
?>
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
        <form action="{{ route('student.create') }}" method="get">
            <button>Create User</button>
        </form>
    </body>
</html>
