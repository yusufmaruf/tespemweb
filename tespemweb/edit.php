<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <h2 class="alert alert-primary text-center mt-3">EDIT GUEST BOOK</h2>
        <?php
            include 'conn.php';
            $id = $_GET['id'];
            $data = mysqli_query($conn,"select * from guestbook where id ='$id'");
            while($d = mysqli_fetch_array($data)){
		?>
            <form method="post" action="editact.php">
                
                <div class="mb-3">
                    <label for="posted" class="form-label">posted</label>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="date" class="form-control"  name="posted" value="<?php echo $d['posted']; ?>">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control"  name="nama" value="<?php echo $d['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control"  name="email" value="<?php echo $d['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="addres" class="form-label">addres</label>
                    <input type="text" class="form-control"  name="addres" value="<?php echo $d['address']; ?>">
                </div>  
                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input type="text" class="form-control"  name="city" value="<?php echo $d['city']; ?>">
                </div> <div class="mb-3">
                    <label for="Mesasge" class="form-label">Message</label>
                    <textarea type="text" class="form-control"  name="Message" ><?php echo $d['message']; ?> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <?php } ?>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>