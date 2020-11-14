<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="active yellow darken-1">
            <div class="sidebar-header">
                <h3 class="p-0 m-0"><img src="<?= base_url();?>assets/img/logo.png" height="80" alt="mdb logo" /><i id="sidebarCollapse2"
                        class="fa fa-bars" style="float:right"></i></h3>
                <strong id="sidebarCollapse"><i class="fa fa-bars"></i></strong>
            </div>

            <ul class="list-unstyled components">
                <li <?php echo $type=='dashboard'?'class="active"':'';?>>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-desktop"></i>
                        <span class="togname">Home<span>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li <?php echo $type=='dashboard'?'class="active"':'';?>><a href="<?= base_url();?>">Dashboard</a></li>
                        <li><a href="#">Home 2</a></li>
                        <li><a href="#">Home 3</a></li>
                    </ul>
                </li>
                <li <?php echo $type=='traffic-monitoring' || $type=='special-area'?'class="active"':'';?>>
                    <a href="#monitoringmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-align-justify"></i>
                        <span class="togname">Monitoring<span>
                    </a>
                    <ul class="collapse list-unstyled" id="monitoringmenu">
                        <li <?php echo $type=='traffic-monitoring'?'class="active"':'';?>><a href="<?= base_url('traffic-monitoring');?>">Traffic Monitoring</a></li>
                        <li <?php echo $type=='special-area'?'class="active"':'';?>><a href="<?= base_url('special-area');?>">Special Area</a></li>
                    </ul>
                <li <?php echo $type=='network-availability'?'class="active"':'';?>><a href="#reportmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-file"></i>
                        <span class="togname">Report<span>
                    </a>
                </li>
                <ul class="collapse list-unstyled" id="reportmenu">
                    <li <?php echo $type=='network-availability'?'class="active"':'';?>><a href="<?= base_url('network-availability');?>">Network
                            Availability</a></li>
                </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-link"></i>
                        <span class="togname">Portofolio<span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-paperclip"></i>
                        <span class="togname">FAQ<span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="togname">Contact<span>
                    </a>
                </li>
            </ul>
        </nav>