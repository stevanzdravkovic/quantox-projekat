<form class="form-inline my-2 my-lg-0" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="tbSearch">
    <label for="sel1">Select category: </label>
    <select class="form-control" id="sel1" name="ddlSearch">
        <option value="0" selected disabled> Select category</option>
        <?php include('logic/ddlSearch.php') ?>
    </select>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btnSearch">Search</button>
</form>
