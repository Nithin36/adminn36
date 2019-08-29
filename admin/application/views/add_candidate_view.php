<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Candidate</h1>
        </div>
        <!--End Page Header -->



        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Candidate
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo validation_errors();
                                echo $message;

                                echo $imageerror;

                                ?>
                                <form role="form" enctype="multipart/form-data" action= "<?php echo base_url(); ?>index.php/candidate/addaction" method="post">
<div class="form-group">
                                            <label>Event</label>
                                            <select class="form-control" name="event">
                                                <option value="">select</option>
                                                                            <?php
    
if(!empty($allevents))
{
                                            foreach ($allevents as $event)
{
    ?>
 <option value="<?php echo $event['id'] ?>" <?php if(!empty($postdata)){if($postdata['event']==$event['id']) {?> selected="selected" <?php }}?>><?php echo $event['title'] ?></option>

    <?php
}
}
    ?>
                                               
                                                
                                            </select>
                                        </div>

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?php if(!empty($postdata)){ echo $postdata['name']; } ?> " class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php if(!empty($postdata)){ echo $postdata['email']; } ?> " class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>Contact No</label>
                                        <input type="text" name="contactno" value="<?php if(!empty($postdata)){ echo $postdata['contactno']; } ?> " class="form-control">

                                    </div>


                                    <div class="form-group">
                                        <label>Photo (Only image file ) </label>
                                        <input type="file" name="cphoto" >
                                    </div>

                              



                                    <input type="submit" class="btn btn-primary" value="Submit" />
                                    <input type="reset" class="btn btn-success" value="Reset">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>



</div>