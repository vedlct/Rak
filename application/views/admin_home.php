<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
     <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Home Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form role="form">

                        <div class="form-group">
                            <label >Text Input</label>
                            <input class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Text Input</label>
                            <input class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                        <div class="form-group">
                            <label>Text area</label>


                            <textarea id="summernote" class="form-control" rows="3"></textarea>


                        </div>

                        <div class="form-group">
                            <label>File input</label>
                            <input type="file">
                        </div>

                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_main_content">

                                <?php if ($show_main_content == Null){ ?>

                                    <label>Main Content Big</label>
                                    <input type="text" name="main_content_big"  >
                                    <br>
                                    <label>Main Content Small</label>

                                    <textarea  id="summernote" name="main_content_small" ></textarea>

                                    <br>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{
                                    foreach ($show_main_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Main Content Big</label>
                                            <input class="form-control" type="text" name="main_content_big" value="<?php echo $s->big?>" >
                                            <p class="help-block">This is demo instruction line.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Main Content Small</label>

                                            <textarea id="summernote" class="form-control"  name="main_content_small" value="<?php echo $s->small?>" ><?php echo $s->small?></textarea>

                                        <br>
                                        <input class="btn btn-success" type="submit">
                                    <?php } }?>
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Resturant Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_resturant_content">

                                <?php if ($show_resturant_content == Null){ ?>
                                    <div class="form-group">
                                        <label>Resturant Content</label>
                                        <input class="form-control" type="text" name="resturant1">
                                    </div>
                                    <div class="form-group">
                                        <label>People Served</label>
                                        <input class="form-control"type="text" name="resturant2">
                                    </div>
                                    <div class="form-group">
                                        <label>Register User</label>
                                        <input class="form-control" type="text" name="resturant3">
                                    </div>
                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_resturant_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Resturant Content</label>
                                            <input class="form-control" type="text" name="resturant1" value="<?php echo $s->resturant?>">
                                        </div>
                                        <div class="form-group">
                                            <label>People Served</label>
                                            <input class="form-control" type="text" name="resturant2" value="<?php echo $s->people_served?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Register User</label>
                                            <input class="form-control" type="text" name="resturant3" value="<?php echo $s->registered_user?>">
                                        </div>
                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Resturant Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_how_it_work">

                                <?php if ($show_howitwork_content == Null){ ?>

                                    <div class="form-group">
                                        <label>How it works big</label>
                                        <input class="form-control" type="text" name="hiw_big">
                                    </div>

                                    <div class="form-group">
                                        <label>How it works small</label>
                                        <input class="form-control" type="text" name="hiw_small">
                                    </div>

                                    <div class="form-group">
                                        <label>Step one Big</label>
                                        <input class="form-control" type="text" name="hiw_one_big">
                                    </div>

                                    <div class="form-group">
                                        <label>Step one small</label>
                                        <input class="form-control" type="text" name="hiw_one_big">
                                    </div>

                                    <div class="form-group">
                                        <label>Step two Big</label>
                                        <input class="form-control" type="text" name="hiw_two_big">
                                    </div>

                                    <div class="form-group">
                                        <label>Step two Small</label>
                                        <input class="form-control" type="text" name="hiw_two_small">
                                    </div>

                                    <div class="form-group">
                                        <label>Step three Big</label>
                                        <input class="form-control" type="text" name="hiw_three_big">
                                    </div>

                                    <div class="form-group">
                                        <label>Step three Small</label>
                                        <input class="form-control" type="text" name="hiw_three_small">
                                    </div>

                                    <div class="form-group">
                                        <label>Step four Big</label>
                                        <input class="form-control" type="text" name="hiw_four_big">
                                    </div>

                                    <div class="form-group">
                                        <label>Step four Small</label>
                                        <input class="form-control" type="text" name="hiw_four_small">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_howitwork_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>How it works big</label>
                                            <input class="form-control" type="text" name="hiw_big" value="<?php echo $s->big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>How it works small</label>
                                            <input class="form-control" type="text" name="hiw_small" value="<?php echo $s->small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step one Big</label>
                                            <input class="form-control" type="text" name="hiw_one_big" value="<?php echo $s->one_big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step one small</label>
                                            <input class="form-control" type="text" name="hiw_one_big" value="<?php echo $s->one_small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step two Big</label>
                                            <input class="form-control" type="text" name="hiw_two_big" value="<?php echo $s->two_big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step two Small</label>
                                            <input class="form-control" type="text" name="hiw_two_small" value="<?php echo $s->two_small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step three Big</label>
                                            <input class="form-control" type="text" name="hiw_three_big" value="<?php echo $s->three_big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step three Small</label>
                                            <input class="form-control" type="text" name="hiw_three_small" value="<?php echo $s->three_small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step four Big</label>
                                            <input class="form-control" type="text" name="hiw_four_big" value="<?php echo $s->four_big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Step four Small</label>
                                            <input class="form-control" type="text" name="hiw_four_small" value="<?php echo $s->four_small?>">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Resturant Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_resturant_content">

                                <?php if ($show_resturant_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Resturant Content</label>
                                        <input class="form-control" type="text" name="resturant1">
                                    </div>

                                    <div class="form-group">
                                        <label>People Served</label>
                                        <input class="form-control" type="text" name="resturant2">
                                    </div>

                                    <div class="form-group">
                                        <label>Register User</label>
                                        <input class="form-control" type="text" name="resturant3">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_resturant_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Resturant Content</label>
                                            <input class="form-control" type="text" name="resturant1" value="<?php echo $s->resturant?>">
                                        </div>

                                        <div class="form-group">
                                            <label>People Served</label>
                                            <input class="form-control" type="text" name="resturant2" value="<?php echo $s->people_served?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Register User</label>
                                            <input class="form-control" type="text" name="resturant3" value="<?php echo $s->registered_user?>">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>
                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Resturant Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_four">

                                <?php if ($show_sectionfour_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Section four Big</label>
                                        <input class="form-control" type="text" name="sfourbig">
                                    </div>

                                    <div class="form-group">
                                        <label>Section four Small</label>
                                        <input class="form-control" type="text" name="sfoursmall">
                                    </div>

                                    <input class="btn btn-default" type="submit">
                                <?php }else{

                                    foreach ($show_sectionfour_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Section four Big</label>
                                            <input class="form-control" type="text" name="sfourbig" value="<?php echo $s->big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section four Small</label>
                                            <input class="form-control" type="text" name="sfoursmall" value="<?php echo $s->small?>">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Resturant Content And More</h3>
                        </div>

                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_six" enctype="multipart/form-data">

                                <?php if ($show_sectionsix_content == Null){ ?>

                                    <div class="form-group">
                                        <label>Section six Big</label>
                                        <input class="form-control" type="text" name="ssixbig">
                                    </div>

                                    <div class="form-group">
                                        <label>Section six Small</label>
                                        <input class="form-control" type="text" name="ssixsmall">
                                    </div>

                                    <div class="form-group">
                                        <label>Section six box Image</label>
                                        <input class="form-control" type="file" name="ssiximage" >
                                    </div>

                                    <div class="form-group">
                                        <label>Section six Inside box Big</label>
                                        <input class="form-control" type="text" name="sboxbig">
                                    </div>

                                    <div class="form-group">
                                        <label>Section six Inside Box Small</label>
                                        <input class="form-control" type="text" name="sboxsmall">
                                    </div>

                                    <div class="form-group">
                                        <label>Section six Inside Box details</label>
                                        <input class="form-control" type="text" name="sboxdetails">
                                    </div>

                                    <input class="btn btn-success" type="submit">
                                <?php }else{

                                    foreach ($show_sectionsix_content as $s){
                                        ?>

                                        <div class="form-group">
                                            <label>Section six Big</label>
                                            <input class="form-control" type="text" name="ssixbig" value="<?php echo $s->big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section six Small</label>
                                            <input class="form-control" type="text" name="ssixsmall" value="<?php echo $s->small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section six Image</label>
                                            <input class="form-control" type="file" name="ssiximage" value="<?php echo $s->image?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section six Inside box Big</label>
                                            <input class="form-control" type="text" name="sboxbig" value="<?php echo $s->submit_big?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section six Inside Box Small</label>
                                            <input class="form-control" type="text" name="sboxsmall" value="<?php echo $s->submit_small?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Section six Inside Box details</label>
                                            <input class="form-control" type="text" name="sboxdetails" value="<?php echo $s->submit_details?>">
                                        </div>

                                        <input class="btn btn-success" type="submit">
                                        <?php
                                    }}
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


</body>

</html>
