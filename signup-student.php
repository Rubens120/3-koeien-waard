<?php
include 'navbar.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Signup docent</h4>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="">voornaam</label>
                        <input type="text" name="voornaam" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="">achternaam</label>
                        <input type="text" name="achternaam" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="">email</label>
                        <input type="text" name="email" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="">wachtwoord</label>
                        <input type="password" name="wachtwoord" required class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="signup-student" class="btn btn-primary">account aanmaken</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>