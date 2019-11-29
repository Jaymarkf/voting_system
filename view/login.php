<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid col-md-4">
    <div class="login_wrapper" style="">
        <div style="position:relative;margin-top:100px">
            <section class="">

                <form method="post" action="./data_model/submit_post.php"style="padding: 5px;">
                    <div class="form-group text-center">
                        <h1>Migration Login</h1>
                    </div>
                    <div class="container-fluid" style="<?php if(isset($errTitleStyle)) echo $errTitleStyle;?>"><?php if(isset($errMsg))echo $errMsg; ?></div>
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" id="user_name" class="form-control" placeholder="" name="user_name" style="<?php if(isset($errStyle)) echo $errStyle;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder=""  name="user_password" style="<?php if(isset($errStyle)) echo $errStyle;?>"/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary btn-block btn-round" value="Log In" />
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#user_name').keypress(function(){
            $('#user_name').css('background-color','white');
        });
        $('#user_password').keypress(function(){
            $('#user_password').css('background-color','white');
        });
    });
</script>
</body>
</html>