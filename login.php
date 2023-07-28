<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            background: #f5f5f5;
            font-family: "Open Sans", sans-serif;
        }

        .login-form {
            max-width: 360px;
            margin: 0 auto;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 100px;
        }

        .login-form .login-wrap {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form .login-wrap .login-img {
            width: 120px;
            height: 120px;
            display: inline-block;
            font-size: 50px;
            color: #4f82c0;
            line-height: 120px;
            border-radius: 50%;
            background: #f2f2f2;
            margin-bottom: 15px;
        }

        .login-form .login-wrap .form-control {
            border-radius: 20px;
            padding: 15px 20px;
            background: #f2f2f2;
            border: none;
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .login-form .login-wrap .checkbox {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            line-height: 20px;
        }

        .login-form .login-wrap .btn {
            font-size: 14px;
            text-transform: uppercase;
            font-weight: bold;
            background: #4f82c0;
            color: #fff;
            border-radius: 20px;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-form .login-wrap .btn:hover {
            background: #4072a4;
        }

        @media (max-width: 480px) {
            .login-form {
                padding: 20px;
            }

            .login-form .login-wrap .login-img {
                width: 80px;
                height: 80px;
                font-size: 35px;
                line-height: 80px;
            }
        }
    </style>
</head>

<body>
    <form class="login-form" action="check.php" method="POST">

        <div class="login-wrap">
            <p>LOGIN</p>
            <div class="input-group">

                <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>
</body>

</html>