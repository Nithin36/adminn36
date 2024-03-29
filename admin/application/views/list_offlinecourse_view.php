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
                        List Offline Course
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div id="status"></div>
                                <?php
                                echo $message;

                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Offline Course
                                    </div>
                                    <div class="panel-body">
                                        <?php

                                        if(!empty($allcourses))
                                        {
                                            ?>
                                            <div class="table-responsive ">
                                                <table class="table table-condensed table-bordered">
                                                    <thead>
                                                    <tr>

                                                        <th>Course Name</th>

                                                        <th>Plans</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    foreach ($allcourses as $course)
                                                    {
                                                        ?>
                                                        <tr>

                                                            <td>&nbsp;
                                                                <?php echo $course['name'];?>


                                                            </td>



                                                            <td>
                                                                <a  class="btn btn-info" href="<?php echo base_url() ?>index.php/courseplan/add/<?php echo $course['id'] ?>" >Add Plan</a>
                                                                <a  href="<?php echo base_url() ?>index.php/courseplan/courseplan_list/<?php echo $course['id'] ?>" class="btn btn-info" >Manage Plans</a>


                                                            </td>

                                                            <td>
                                                                <a  class="btn btn-danger" href="<?php echo base_url() ?>index.php/course/editoffline/<?php echo $course['id'] ?>" >Edit</a>
                                                                <button type="button" class="btn btn-danger" onclick="del_course(<?php echo $course['id'] ?>)">Delete</button>

                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php
                                        }
                                        else
                                        {
                                            echo '<div class="alert alert-info alert-dismissable"> No Result </div>';

                                        }
                                        ?>

                                    </div>
                                    <?php echo $links ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>



</div>