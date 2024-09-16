<?php 
include 'config.php';
include_once('layouts/headers.php');
// include_once('layouts/footers.php');

// if($_POST['renttype']){
//     print_r($_POST['renttype']);
// }


?>

<form class="form1" method="POST" enctype="multipart/form-data" action="cratead.php">

<h3 class="text-center mb-2 text-uppercase"> <u>Create An Ad for Home to Rent</u></h3>
    
    

    <div class="row">
        <div class="col">
            <label for="renttype" >Rent type</label>
            <select id="renttype" class="form-control" name="renttype">
                <option value="Family">Family</option>
                <option value="Sublet">Sublet</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Office">Office</option>
                <option value="Hostel">Hostel</option>
                <option value="Shop">Shop</option>
            </select>
        </div>
        <div class="col">
            <label for="rentdate">Rent date</label>
            <input type="date" class="form-control" id="rentfrom" placeholder="Enter From Which Month Your home will be rented" name="rentfrom">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="bedqty" >Bedroom qty</label>
            <input type="number" class="form-control" placeholder="How much bedroom?" id="bedqty" name="bedqty">
        </div>
        <div class="col">
            <label for="bathqty" >Bath qty</label>
            <input type="number" class="form-control" placeholder="How much bath?" id="bathqty" name="bathqty">
        </div>
    </div>
    
    <div class="row">
        <div class="col">
        <label for="rentprice">Rent Price</label>
        <input type="number" class="form-control" id="rentprice" placeholder="Enter From Which Month Your home will be rented" name="rentprice">
        </div>
        <div class="col">
            <label for="location" >Location</label>
            <input type="text" class="form-control" placeholder="enter your location" id="location" name="location">
        </div>
    </div>

    <div class="form-group">
        <label for="description" >Description of the rent</label>
        <textarea type="text" class="form-control" placeholder="Describe your rent policies" id="description" name="description"></textarea>
    </div>


    <div class="row">
        <div class="col">
            <label for="file1">Upload images of what rented</label>
            <input type="file" class="form-control" id="file1" name="file1">
        </div>
        <div class="col">
            <label for="file2">Upload images of what rented</label>
            <input type="file" class="form-control" id="file2" name="file2">
        </div>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input mt-2" id="terms" name="terms">
        <label class="form-check-label" for="terms" > <small>I am agree with all the terms an conditions of this site.</small></label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>












<?php 
include_once('layouts/footers.php');
?>