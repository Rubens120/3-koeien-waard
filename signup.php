<html>
<header>

</header>
<main>
    <body>
    <section>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label name="password" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        include('dbconnectie.php');
        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password using bcrypt

            $query = "INSERT INTO registertb (email, password) VALUES ('$email', '$hashedPassword')";
            $result = mysqli_query($con, $query);

            if($result) {
                echo "Je hebt een account aangemaakt";
            } else {
                echo "Er is een fout opgetreden bij het aanmaken van uw account";
            }
        }
        ?>

    </section>
    </body>
</main>
</html>