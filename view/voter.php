<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Voter</title>
    <link rel="shortcut icon" href="https://ogpau.pmc.gov.au/sites/default/files/commitments/icon-blue-voting-box.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./plugin/jquery.bootgrid.min.css"/>
    <script src="./plugin/jquery.bootgrid.fa.min.js"></script>
    <script src="./plugin/jquery.bootgrid.min.js"></script>
</head>
<style>
#body-background{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    min-width:100%;
    padding:0;
    margin:0;
    background-image: url("https://i.ytimg.com/vi/ZFpM5fIvpVY/maxresdefault.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
<div id="body-background"></div>
<div class="container-fluid">
    <div class="container-fluid" style="">
        <div class="card border-dark mb-3" style="position:relative;margin:50px 50px;">
            <div class="card-header">VOTE NOW</div>
            <div class="card-body text-dark">

                <table id="grid-id" class="table table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric">ID</th>
                        <th data-column-id="name">Name</th>
                        <th data-column-id="gender">Gender</th>
                       <th data-column-id="position">Position</th>
                        <th data-column-id="year_level">Year Level</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</div>
</body>
<script>
    $(document).ready(function(){
        $('#grid-id').bootgrid({
            css:
                {
                    pagination: 'pagination pagination-sm',
                    table: 'table table-bordered'
                },
                formatters:  {
                    "commands": function(column, row) {
                        return "<button type='button' class='btn btn-success' id='row-" +row.id+ "'>vote</button>";
                    }
        }

        });
    });
</script>
</html>