<?php 
include_once('config.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a Home</title>
    <link rel="stylesheet" href="<?= $public?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $public?>/css/style.css">
</head>


<body class="container-fluid">

<?php include_once($fpartials.'/navbar.php'); ?>

<div class="text-center">
    <button type="button" class="btn btn-outline-primary mb-3"> <img src="<?= $images?>/family.png" alt="family icon" class="iconbtn">Family</button>
    <button type="button" class="btn btn-outline-primary mb-3"><img src="<?= $images?>/family.png" alt="family icon" class="iconbtn">Sublet</button>
    <button type="button" class="btn btn-outline-primary mb-3"><img src="<?= $images;?>/bachelor.png" alt="family icon" class="iconbtn">Bachelor</button>
    <button type="button" class="btn btn-outline-primary mb-3"><img src="<?= $images;?>/office.png" alt="family icon" class="iconbtn">Office</button>
    <button type="button" class="btn btn-outline-primary mb-3"><img src="<?= $images;?>/bachelor.png" alt="family icon" class="iconbtn">Hostel</button>
    <button type="button" class="btn btn-outline-primary mb-3"><img src="<?= $images;?>/shop.png" alt="family icon" class="iconbtn">Shop</button>
</div>
<div class="cardarea">
    <div class="card float-left ml-3" style="width: 18rem;">
    <img class="card-img-top" src="<?= $images?>/home1.jpeg" alt="Home image">
    <div class="card-body">
        <h6>Family</h6>
        <div class="card-text">
            <p class="card-text">Rent From: October</p>
            <p class="">Rent Price: 6,000 tk</p>
        </div>

    </div>
    </div>

    <!-- Will be Deleted -->

    <div class="card float-left ml-3" style="width: 18rem;">
    <img class="card-img-top" src="<?= $images?>/home1.jpeg" alt="Home image">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>

    <div class="card float-left ml-3" style="width: 18rem;">
    <img class="card-img-top" src="<?= $images?>/home1.jpeg" alt="Home image">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>

</div>












<?php 
include_once($fpartials.'/footer.php');
?>