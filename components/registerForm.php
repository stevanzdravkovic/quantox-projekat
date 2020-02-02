<?php
include('./logic/insertNewUser.php');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h2 class="mb-4">Register now</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Enter E-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <small>(minimum 8 characters and 1 number)</small>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="Rpassword">Repeat password</label>
                        <input type="text" class="form-control" name="Rpass" id="Rpass" placeholder="Enter password again">
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
<script>
    $(document).ready(function() {

        let id=1;
        jQuery.ajax({
            type: 'post',
            url: 'getCategoryAjax.php',
            data: 'id='+id,
            success: function (result) {

                jQuery('.form-control1').html(result);
            }
        });

        $(".form-control1").change(function () {
            $(".form-control2").css("visibility", "visible");
            var id = jQuery(this).val();
            jQuery.ajax({
                type: 'post',
                url: 'getCategoryAjax.php',
                data: 'id='+id,
                success: function (result) {
                    jQuery('.form-control2').html(result);
                }
            })
        });

        $(".form-control2").change(function () {
            $(".form-control3").css("visibility", "visible");
            var id = jQuery(this).val();
            jQuery.ajax({
                type: 'post',
                url: 'getCategoryAjax.php',
                data: 'id='+id,
                success: function (result) {
                    jQuery('.form-control3').html(result);
                }
            })
        });

        $(".form-control3").change(function () {
            $(".form-control4").css("visibility", "visible");
            var id = jQuery(this).val();
            jQuery.ajax({
                type: 'post',
                url: 'getCategoryAjax.php',
                data: 'id='+id,
                success: function (result) {
                    jQuery('.form-control4').html(result);
                }
            })
        });
    });
</script>