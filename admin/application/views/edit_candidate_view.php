<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">candidates</h1>
        </div>
        <!--End Page Header -->



        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit candidate
                    </div>
                    <div class="panel-body">
                        <div class="row">
                       
                            <div class="col-lg-6">
                                <?php echo validation_errors();
                                echo $message;
                                if(!empty($candidate))
                                {
                                    ?>
                                    <form role="form" action= "<?php echo base_url(); ?>index.php/candidate/editaction/<?php echo $candidate['id'] ?>" enctype="multipart/form-data" method="post">
                                         <?php if(trim($candidate['photo'])!="")
                                         {
                                             ?>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <img src="<?php echo CANDIDATE_URL.$candidate['photo'] ?>" height="100" width="100"/>

                                        </div>
                                        <?php }?>
                                        <input type="hidden" name="photo" value="<?php echo $candidate['photo']; ?>"/>
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
 <option value="<?php echo $event['id'] ?>" <?php if($event['id']==$candidate['event']) {?> selected="selected" <?php }?>><?php echo $event['title'] ?></option>

    <?php
}
}
    ?>
                                               
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?php echo $candidate['name'] ?>" class="form-control">

                                        </div>




                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text"  name="email" value=" <?php echo $candidate['email'] ?>" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text"  name="contactno" value=" <?php echo $candidate['contactno'] ?>" class="form-control">

                                        </div>


                                        <div class="form-group">
                                            <label>Photo (Only image file ) </label>
                                            <input type="file" name="cphoto" >
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