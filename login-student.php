<?php
include 'navbar.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Login docent</h4>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="">email</label>
                        <input type="text" name="email" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="">wachtwoord</label>
                        <input type="password" name="wachtwoord" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="login-student" class="btn btn-primary">Inloggen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>