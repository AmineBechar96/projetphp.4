
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login SGC</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css1/util.css">
  <link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
  <div style="margin:0" id="admin">
  <table width="100%" style="margin:0">
    <tr>
      <td style="width:32%"></td>
<td style="width:68%">
  <h2>Réseau Social</h2>
</td>

</tr></tr>
</table>
</div>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="login100-form validate-form flex-sb flex-w" action="index.php" method="post">
          <span class="login100-form-title p-b-32">
            Account Login
          </span>

          <span class="txt1 p-b-11">
            Username
          </span>
          <div class="wrap-input100 validate-input m-b-36" >
            <input class="input100" type="text" name="nom" required/>
            <span class="focus-input100"></span>
          </div>

          <span class="txt1 p-b-11">
            Password
          </span>
          <div class="wrap-input100 validate-input m-b-12">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="password" required/>
            <span class="focus-input100"></span>
          </div>

          <div class="flex-sb-m w-full p-b-48">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="inscription.php" class="txt3">
                New User ? Sign up here
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <input class="login100-form-sub" type="submit" name="sub" value="Login">

          </div>

        </form>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

</body>
</html>
