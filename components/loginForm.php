<?php
include('./logic/loginUser.php');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h2 class="mb-4">Please login</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Enter E-mail">
                    </div>

                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Enter password">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
