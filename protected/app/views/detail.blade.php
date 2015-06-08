<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Raid Monitoring</title>

     {{ HTML::style('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}

     {{ HTML::style('assets/bower_components/metisMenu/dist/metisMenu.min.css') }}

     {{ HTML::style('assets/dist/css/timeline.css') }}

     {{ HTML::style('assets/dist/css/sb-admin-2.css') }}

     {{ HTML::style('assets/bower_components/morrisjs/morris.css') }}

     {{ HTML::style('assets/bower_components/font-awesome/css/font-awesome.min.css') }}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Raid Monitoring</a>
            </div>
            <!-- /.navbar-header -->



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">

                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-12">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Server List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php foreach($item as $key => $val){ ?>
                                <a href="#" class="list-group-item">
                                    {{ $val['partition_hardisk'] }}
                                </a>
                               <?php }?>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>

                <div class="col-lg-12">
                    <h2>Bordered Table</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Level</th>
                                    <th>Partition Hardsik</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach($monitor_summary as $key => $val){?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $val->level;?></td>
                                    <td><?php echo $val->partition_hardisk;?></td>
                                    <td><?php echo $val->status;?></td>
                                    <td><?php echo $val->date;?></td>
                                </tr>
                            <?php
                            $no++;
                            }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->




    <!-- Scripts queries -->
    {{ HTML::script('assets/bower_components/jquery/dist/jquery.min.js') }}
    {{ HTML::script('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('assets/bower_components/metisMenu/dist/metisMenu.min.js') }}
    {{ HTML::script('assets/bower_components/raphael/raphael-min.js') }}
    {{ HTML::script('assets/bower_components/morrisjs/morris.min.js') }}
    {{ HTML::script('assets/js/morris-data.js') }}
    {{ HTML::script('assets/dist/js/sb-admin-2.js') }}

    <!-- jQuery -->
      <script>
        $(function() {
            Morris.Bar({
                element: 'morris-bar-chart',
                data: <?php echo $json;?>,
                xkey: 'partition_hardisk',
                ykeys: ['activePercent', 'degrededPercent'],
                labels: ['Active %', 'Degreded %'],
                hideHover: 'auto',
                resize: true
            });

        });
    </script>

</body>

</html>
