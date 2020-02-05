<?php
include('./logic/insertNewUser.php');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h2 class="mb-4">Register now</h2>
                <?php
                include('logic/error.php');
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="Enter E-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <small>(minimum 8 characters and 1 number)</small>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="Rpassword">Repeat password</label>
                        <input type="password" class="form-control" name="Rpass" id="Rpass"
                               placeholder="Enter password again">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>

                        <select class="form-control1 form-control" id="category1">

                        </select>
                    </div>

                    <div class="form-group" style="visibility: hidden">
                        <label for="category">Category</label>
                        <select class="form-control2 form-control" id="category2" name="category">

                        </select>
                    </div>

                    <div class="form-group" style="visibility: hidden">
                        <label for="category">Category</label>
                        <select class="form-control3 form-control" id="category" name="category">
                        </select>
                    </div>

                    <div class="form-group" style="visibility: hidden">
                        <label for="category">Category</label>
                        <select class="form-control4 form-control" id="category3" name="category">
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="public/js/ajax.js"></script>
