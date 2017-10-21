<?php include('control/core.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div>
    <?php include("include/header.php");
    include("include/sidebar.php");?>
    <article class="container-fluid" id="main-container">
        <section>
            <div class="panel panel-default">
                <div class="panel-body">
                    Add Logo Image
                    <form action="control/add_gallery.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <img id="preview" src="#"  style="height:100px;width:100px" />
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php $img= mysqli_query($con,"Select * from `gallery` ");
                        while($data=mysqli_fetch_array($img)) { ?>
                            <div class="col-md-3">
                                <img src="control/<?php echo $data['image']; ?>"  />
                                <a href="control/delete.php?id=<?php echo $data['id']; ?>&table=gallery" >Delete</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </article>
</div>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileToUpload").change(function() {
        readURL(this);
    });
</script>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>