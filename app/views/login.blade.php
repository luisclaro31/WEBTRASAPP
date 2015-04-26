<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('trasapp/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('trasapp/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('trasapp/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('trasapp/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['route' => 'login','id'=>'loginform', 'action'=>'login', 'method' => 'POST', 'role' => 'form','novalidate'])  }}
                            @if ( Session::has('login_error'))
                                <p><h4><span class="label label-danger">El nombre de username o la contraseña no son correctos.</span></h4></p>
                            @else
                                <p>Introduzca username y contraseña para continuar.</p>
                            @endif
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>{{ Form::email('email',null, ['id'=>'username','class' =>'form-control','placeholder' => 'username', 'autofocus']) }}
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>{{  Form::password('password',['id'=>'password','class' => 'form-control', 'placeholder' => 'password']) }}
                                </div>
                                <div class="checkbox">
                                    <label class="remember-me">
                                        {{ Form::checkbox('remember') }}
                                            Recordarme
                                    </label>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <div class="pull-center text" ><input  class="btn btn-lg btn-success btn-block" value="Acceder" type="submit">
                            </fieldset>
                        {{  Form::close()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('trasapp/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('trasapp/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('trasapp/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('trasapp/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
