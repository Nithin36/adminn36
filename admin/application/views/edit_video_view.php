<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Online Course</h1>
        </div>
        <!--End Page Header -->



        <div class="row">
            <div class="col-lg-12">
                <!--  Tooltips and Popovers-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $course['name'] ?>
                    </div>
                    <div class="panel-body">
                        <h4>Edit Video</h4>
                        <div class="tooltip-demo">
                            <a  href="<?php echo base_url() ?>index.php/video/add/<?php echo $course['id'] ?>" class="btn btn-default" >Add Video</a>
                            <a href="<?php echo base_url() ?>index.php/video/video_list/<?php echo $course['id'] ?>" class="btn btn-default" >List Videos</a>
                            <a href="<?php echo base_url(); ?>index.php/course/onlinecourse_list" class="btn btn-default" >Back To Online Course</a>

                        </div>

                    </div>
                </div>
                <!--End  Tooltips and Popovers-->
            </div>
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $course['name'] ?> >> List Videos
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo validation_errors();
                                echo $message;
                                if(!empty($video))
                                {
                                    ?>
                                    <form role="form" enctype="multipart/form-data" action= "<?php echo base_url(); ?>index.php/video/editaction/<?php echo $video['id'] ?>" method="post">

                                        <div class="form-group">
                                            <label>Video</label>
                                            <video width="160" height="120" controls>
                                                <source src="<?php echo VIDEO_URL.$video['video'] ?>" type="video/mp4">

                                            </video>

                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <img src="<?php echo COVERPHOTO_URL.$video['image'] ?>" height="100" width="100"/>

                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text"  name="title" value="<?php echo $video['title']; ?>" class="form-control">

                                        </div>


                                        <div class="form-group">
                                            <label>Photo (Only image file(.jpg,png,gif) ) </label>
                                            <input type="file" name="vphoto" >
                                        </div>

                                        <div class="form-group">
                                            <label>Video File (Only Mp4 file )</label>
                                            <input type="file" accept="video/mp4" name="vfile">
                                        </div>



                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control"   name="paid">

                                                <option <?php if($video['paid']==0) {?> selected="selected" <?php }?> value="0">Free</option>
                                                <option  <?php if($video['paid']==1) {?> selected="selected" <?php }?> value="1">Paid</option>




                                            </select>
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