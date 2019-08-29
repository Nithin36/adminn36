 <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">


                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                         <!--    <div class="user-section-inner">
                                <img src=<?php echo base_url(); ?>assets/img/user.jpg" alt="">
                            </div> -->
                            <div class="user-info">
                                <div></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-circle-o fa-fw"></i>Sliders<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/slider/add">Add Slider</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/slider/sld_list">List Sliders</a>
                            </li>

                        </ul>
                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-circle-o fa-fw"></i>Playlist<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/playlist/add">Add Playlist</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/playlist/playlist_list">List Playlists</a>
                            </li>

                        </ul>
                        <!-- second-level-items -->
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-circle-o fa-fw"></i>Events<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/event/add">Add Event</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/event/event_list">List Events</a>
                            </li>

                        </ul>
                        <!-- second-level-items -->
                    </li>
                         <li>
                        <a href="#"><i class="fa fa-circle-o fa-fw"></i>Candidate<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/candidate/add">Add Candidate</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/candidate/candidate_list">List Candidates</a>
                            </li>

                        </ul>
                        <!-- second-level-items -->
                    </li>




               <li>
                        <a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-sign-in fa-fw"></i>LogOut</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>