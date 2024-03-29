<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Offline Course</h1>
        </div>
        <!--End Page Header -->



        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Offline Course
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo validation_errors();
                                echo $message;
                                if(!empty($course))
                                {
                                    ?>
                                    <form role="form" action= "<?php echo base_url(); ?>index.php/course/editofflineaction/<?php echo $course['id'] ?>" method="post">

                                        <div class="form-group">
                                            <label>Course Name</label>
                                            <input type="text" name="course" value="<?php echo $course['name'] ?>" class="form-control">

                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control"> <?php echo $course['description'];  ?></textarea>


                                        </div>







                                        <input type="submit" class="btn btn-primary" value="Submit" />
                                        <input type="reset" class="btn btn-success" value="Reset">
                                    </form>
                                    <?php
                                }
                                else
                                {
                                    echo '<div class="alert alert-warning alert-dismissable"> Something Wrong... </div>';
                                }

                                ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>



</div>