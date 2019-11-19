<?php
$actual_link = $_SERVER['PHP_SELF'];
if($actual_link == '/voting_system/view/login.php'){
    header('Location: ../login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--    boot grid plugin-->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <style>
        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
        }

        #sidebar.active {
            margin-left: -250px;
        }
        a[data-toggle="collapse"] {
            position: relative;
        }


        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar {
            /* don't forget to add all the previously mentioned styles here too */
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
        #content{
            width:100%;
            height:100%;
        }
        .dropdown-toggle::after{
            display:none !important;
        }
    </style>


</head>

<body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./plugin/jquery.bootgrid.min.css"/>
<script src="./plugin/jquery.bootgrid.fa.min.js"></script>
<script src="./plugin/jquery.bootgrid.min.js"></script>


<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Voting System</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Administrator<span class="pull-right"><i class="fa fa-user fa-lg" style="color:rgba(17,243,81,0.99);"></i></span></p>
<!--            for toggle the sub menus-->

        <!--            <li class="active">-->
        <!--                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>-->
        <!--                <ul class="collapse list-unstyled" id="homeSubmenu">-->
        <!--                    <li>-->
        <!--                        <a href="#">Home 1</a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Home 2</a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Home 3</a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>-->
        <!--                <ul class="collapse list-unstyled" id="pageSubmenu">-->
        <!--                    <li>-->
        <!--                        <a href="#">Page 1</a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Page 2</a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Page 3</a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </li>-->
            <li>
                <a href="?mode=candidate">Manage Candidates<span class="pull-right"><i class="fa fa-edit"></i></span></a>
            </li>

            <li>
                <a href="?mode=voter">Manage Voters<span class="pull-right"><i class="fa fa-edit"></i></a>
            </li>
            <li>
                <a href="#">Winner Candidates<span class="pull-right"><i class="fa fa-trophy"></i></a>
            </li>
        </ul>
    </nav>
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">


                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i id="sbc" class="fas fa-align-left"></i>
                </button>




        </nav>
        <div class="container-fluid" style="">


            <div class="card border-dark mb-3" style="position:relative;margin:50px 50px;">
                <div class="card-header bg-info"><?php
                    if(isset($_GET['mode'])){


                    }
                    ?></div>
                <div class="card-body text-dark">

                    <h5 class="card-title"></h5>

<!--                    bootgrid here-->
                    <table id="grid-id" class="table table-condensed table-hover table-striped">
                        <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">ID</th>
                            <th data-column-id="name">Name</th>
                            <th data-column-id="gender">Gender</th>
                            <th data-column-id="address" data-order="asc">Address</th>
                           <?php if(isset($_GET['mode'])){if($_GET['mode'] == 'candidate'){echo '<th data-column-id="position">Position</th>';}} ?>
                            <th data-column-id="year_level">Year Level</th>
                            <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(isset($data_table)){echo $data_table;}?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>

</div>


</body>

<script>
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');

        });
        var data_table = $('#grid-id').bootgrid({
            css:
                {
                    pagination: 'pagination pagination-sm',
                    table: 'table table-bordered'
                },

            formatters: {
                "commands": function(column, row)
                {

                    return "<button type='button' class='btn btn-warning btn-sm update' data-row-id='"+row.id+"'>Edit</button>&nbsp; <button type='button' class='btn btn-danger btn-sm delete' data-row-id='"+row.id+"'>Delete</button>";
                }
            }

        });

    });
</script>

</html>