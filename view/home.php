<?php
$actual_link = $_SERVER['PHP_SELF'];
if($actual_link == '/voting_system/view/home.php'){
    header('Location: ../home.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://ogpau.pmc.gov.au/sites/default/files/commitments/icon-blue-voting-box.png">
    <title>Voting System</title>

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
        .nav-btn{
            justify-content: left !important;
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-btn">


                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i id="sbc" class="fas fa-align-left"></i>
                </button>




        </nav>
        <div class="container-fluid" style="">


            <div class="card border-dark mb-3" style="position:relative;margin:50px 50px;">
                <div class="card-header">Manage <? if(isset($mode)) echo $mode?></div>
                <div class="card-body text-dark">

                    <h5 class="card-title"></h5>
                    <div class="form-group" style="margin:0">
                            <span class="btn btn-primary btm-sm" data-toggle="modal" data-target="#modal-addnew">
                                <i class="fa fa-plus"></i>
                               Addnew
                            <span>
                    </div>
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
<!--add new modal-->
<div class="modal fade in" id="modal-addnew" tabindex="-1" role="dialog" aria-labelledby="modal-addnew" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New <b class="text-info"><?php if(isset($mode)) echo $mode;?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="./data_model/submit_post.php">
                <input type="hidden" name="gid" value="<?php if(isset($_GET['mode'])) echo $_GET['mode'] ?>"/>
                <div class="modal-body">
                        <div class="form-group">
                            <?php if(isset($_GET['mode'])){
                              if($_GET['mode'] == 'voter'){
                                  echo '<div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="input username here..." required/>
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="input name here..." required/>
                            </div>';
                              }
                            }
                            ?>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="input name here..." required/>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" name="gender" placeholder="input gender here..." required/>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="input address here..." required/>
                            </div>
                            <div class="form-group">
                                <label for="year_level">Year Level</label>
                                <input type="text" class="form-control" name="year_level" placeholder="input year level here..." required/>
                            </div>
                            <?php
                            if(isset($_GET['mode'])){
                                if($_GET['mode'] == 'candidate'){
                                    echo ' <div class="form-group">
                                <label for="position">Position</label>
                                <select name="position" class="form-control" id="position">
                                    <option value="President">President</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="Auditor">Auditor</option>
                                </select>
                            </div>';
                                }
                            }
                            ?>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="csubmit" class="btn btn-primary submit-btn">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--delete modal-->
<div class="modal fade in" id="modal-delete" tabindex="-2" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-danger">
            <div class="modal-header text-white bg-danger">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Information <b class="text-info"><?php if(isset($mode)) echo $mode?></b></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                     <span class="text-warning"><b>
                    Are you sure you want to delete this information ?<br>
                    this cannot be undone.
                         </b>
                </span>
            </div>
            <div class="modal-footer">
                <form method="post" action="./data_model/submit_post.php">
                    <input type="hidden" name="mode" value="<?php if(isset($_GET['mode'])) echo $_GET['mode']; ?>"/>
                    <input type="hidden" name="id_delete" id="id_delete" value=""/>
                <button class="btn btn-danger btn-sm del_btn">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--edit modal-->
<div class="modal fade in" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-primary">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit <b class="text-white"><?php if(isset($mode)) echo $mode?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="./data_model/submit_post.php">
                <input type="hidden" id="edit" name="edit" value=""/>
                <input type="hidden" name="mode_edit" value="<?php if(isset($_GET['mode'])) echo $_GET['mode'];?>"/>

                <div class="modal-body">

                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="input name here..." required/>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender" placeholder="input gender here..." required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="input address here..." required/>
                        </div>
                        <div class="form-group">
                            <label for="year_level">Year Level</label>
                            <input type="text" class="form-control" name="year_level" placeholder="input year level here..." required/>
                        </div>
                        <?php
                        if(isset($_GET['mode'])){
                            if($_GET['mode'] == 'candidate'){
                                echo ' <div class="form-group">
                                <label for="position">Position</label>
                                <select name="position" class="form-control" id="position">
                                    <option value="President">President</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="Auditor">Auditor</option>
                                </select>
                            </div>';
                            }
                        }


                        ?>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="esubmit" class="btn btn-success submit-btn">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

<script>
    function setvalue(e){
        $('#id_delete').val(e);

    }
    function seteditvalue(e){
        $('#edit').val(e);
    }

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
                    return "<button type='button' class='btn btn-warning btn-sm update' data-row-id='"+row.id+"' onclick='seteditvalue("+row.id+")'>Edit</button>&nbsp; <button type='button' class='btn btn-danger btn-sm delete' data-row-id='"+row.id+"' onclick='setvalue("+row.id+")'>Delete</button>";
                }
            }
        }).on("loaded.rs.jquery.bootgrid", function (e)
        {


           $('.delete').click(function(){

               $('#modal-delete').modal('toggle');
               $('#modal-delete').modal('show');


           });


                       $('.update').click(function(){
                          $('#modal-edit').modal('show');
                          $('#modal-edit').modal('toggle');
                       });


        });





    });



</script>

</html>