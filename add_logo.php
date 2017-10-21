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
    <?php include("include/header.php");?>
    <?php include("include/sidebar.php");?>
    <article id="main-container">
        <div id="add_logo_container" class="row align-self-center">
            <div id="add_logo" class="col-11 col-md-10 col-lg-8">
                <section>
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            <h3 class="text-center">Add Logo Image</h3>
                            <hr>
                            <form action="control/add_logo.php" method="post" enctype="multipart/form-data">
                                <h6>Select image to upload:</h6>
                                <div id="preview-container" class="row align-self-center">
                                    <img id="preview" src="http://via.placeholder.com/400x400" class="img-fluid" />
                                </div>
                                <br>
                                <div class="button-container row">
                                    <div class="choose-button col text-right">
                                        <label for="fileToUpload" class="btn btn-info">Choose File</label>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <div class="col text-left">
                                        <button type="submit" name="submit" class="btn btn-warning">Upload Image</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <hr>
                <section id="img-scroll">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <?php $logo= mysqli_query($con,"Select * from `logo` ");
                                while($data=mysqli_fetch_array($logo)) { ?>
                                    <div class="col-md-4 col-lg-3 col-12">
                                        <div class="img-container">
                                            <img class="img-fluid mx-auto d-block" src="control/<?php echo $data['image']; ?>"  />
                                            <div class="text-center">
                                                <i class="fa fa-trash-o fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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