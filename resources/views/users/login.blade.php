
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="HTML5 Example Page">
  <link href="{{ URL::asset('/home/css/login.css')}}" rel="stylesheet">
</head>
<body>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form   class="login100-form validate-form"
                    action={{ route('login' )}} id="FormLogin"  method="POST">
                    @csrf

                    <div style="align-items: center; text-align: center;">
                        <a href="/" class="logo d-flex align-items-center">
                            <img src="{{ URL::asset('/home/img/og1_logo_v2.png')}}"
                                width="50"
                                height="50"

                            alt="">
                            <br />
                            <h4 style="font-weight:bold; padding-left: 10px;"> <span style="color:red;">Og</span><span>Hum</span></h4>
                        </a>
                    </div>
					<br />
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" id="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Forgot Password?
						</span>

						<a class="txt2" href="{{ route('recovery')}}">
							Recovery
						</a>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="{{ route('signup')}}">
							Sign Up
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>
