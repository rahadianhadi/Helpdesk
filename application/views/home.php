
    <div class="app-container">
        <div class="row content-container">

            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active"><?php echo $title_view; ?></li>
                            <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalDefault"><i class="glyphicon glyphicon-plus"></i> Add</button></li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <?php echo $sidebar_view; ?>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="row">
                    	<?php echo $content_view; ?>
                    </div> 
                </div>
            </div>

        </div>
    </div>

    <?php echo $add_view; ?>
    <?php echo $delete_view; ?>

    

        