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
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

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
                    <form action="control/add_about.php" method="post" >
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="desc"></textarea>
                        </div>

                        <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>

                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php $about= mysqli_query($con,"Select * from `about` ");
                        while($data=mysqli_fetch_array($about)) { ?>
                            <div class="col-md-3">
                               <p> <?php echo $data['heading']; ?> </p>
                            </div>
                            <div class="col-md-8">
                                <p> <?php echo $data['about']; ?> </p>
                            </div>
                            <div class="col-md-1">
                                <p> <?php echo $data['status']; ?> </p>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </article>
</div>
<script>
    CKEDITOR.replace( 'desc' );
</script>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

</body>

</html>