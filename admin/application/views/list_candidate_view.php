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
                        List candidates
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
                                        Candidates
                                    </div>
                                    <div class="panel-body">
                                        <?php

                                        if(!empty($allcandidates))
                                        {
                                            ?>
                                            <div class="table-responsive ">
                                                <table class="table table-condensed table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Event</th>
                                                        <th>Title</th>
                                                        <th>Photo</th>




                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    foreach ($allcandidates as $candidate)
                                                    {
                                                        ?>
                                                        <tr>

                                                          <td><?php echo $candidate['eventname']; ?></td>
                                                            <td><?php echo $candidate['name']; ?></td>

                                                            <td>
                                                                <?php
                                                                if(trim($candidate['photo'])!="") {
                                                                    ?>

                                                                    <img
                                                                        src="<?php echo CANDIDATE_URL.$candidate['photo']; ?>"
                                                                        height="50" width="50"/>
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    echo "No Image";
                                                                }
                                                                ?>
                                                            </td>


                                                            <td>
                                                                <a href="<?php echo base_url() ?>index.php/candidate/edit/<?php echo $candidate['id'] ?>" class="btn btn-danger" >Edit</a>
                                                                <button type="button" class="btn btn-danger" onclick="del_candidate(<?php echo $candidate['id'] ?>)">Delete</button>
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