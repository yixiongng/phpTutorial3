<html>
    <body>
    <h3>Please fill in your details</h3>
        <form method="get" action="createUser">
            <p>Name: <input type="text" name="name"></p> 
            <p>Phone No.: <input type="number" name="phoneNumber"></p> 
            <p>Email: <input type="email" name="email"></p> 
            <button>Submit</button>
        </form>    
        <?php
            if($name != ''){
                echo 'Your name is '.$name.'.<br/>';
                echo 'Your phone number is '.$phoneNumber.'.<br/>';
                echo 'Your email is '.$email.'.<br/>';
            }
        ?>
    </body>
</html>