            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-phone"></div>
                                <div class="title">Helpdesk</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>

                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="<?php base_url( 'home' ); ?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Tiket</span>
                                </a>
                            </li>

                            
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-table"></span><span class="title">Data</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url( 'status' ); ?>">Status</a></li>
                                            <li><a href="<?php echo base_url( 'kategori' ); ?>">Kategori</a></li>
                                            <li><a href="<?php echo base_url( 'institusi' ); ?>">Institusi</a></li>
                                            <li><a href="<?php echo base_url( 'aplikasi' ); ?>">Aplikasi</a></li>
                                            <li><a href="<?php echo base_url( 'jalur' ); ?>">Jalur Helpdesk</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>