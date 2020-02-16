<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include_once("navbar.php") ?>

    <div class="card-deck">
        <?php if(!empty($packages)){ foreach($packages as $row){ ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                <p class="card-text"><?php  echo $row['description']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $row['price']; ?></small></p>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found...</p>
        <?php } ?>
    </div>
    <?php include_once("footer.php") ?>
</body>

</html>