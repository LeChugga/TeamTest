<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Inicio de sesion</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="icon" href="img/favicon.png" type="images/x-icon">
</head>
<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
      
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="img/favicon.png" alt="">
            <span>
              UTCJ
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buzon.html"> Mailbox </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactanos.html"> Contact us </a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="shopping_cart.html"> Shopping cart </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="inicio_sesion.php"> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.html">Register</a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search" maxlength="15" >
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
	
        </nav>
      </div>
    </header>
  </div>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Login
          </h2>
        </div>
      </div>
    </div>
	
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
				<form action="login_registrar.php" method="POST">
				  <div class="form-group">
					<label for="usuario">Name</label>
					<input type="text" name="usuario" class="form-control" id="exampleInputName1">
				  </div>
				  <div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="pass" class="form-control" id="exampleInputNumber1">
				  </div>
					<div class="d-flex justify-content-center">
					<input type="submit" name = "btningresar" value="Submit">
				</form>
					</a>
					</div>
				  <br><br><br><br><br>
				<div class="d-flex justify-content-center">
					<a href="errorpage.html">
						Forgot your password? Click here
					</a>
				</div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Login
            </h3>
            <p>
              Login to the website of the Technological University of Ciudad Juarez you will have access to important topics
			of the company
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +01 123567894
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  al22120254@utcj.edu.mx
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buzon.html"> Mailbox </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shopping_cart.html"> Shopping cart </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              Register
            </h4>
            <form action="">
              <input type="text" maxlength="10" placeholder="Write your email">
              <div class="d-flex justify-content-center justify-content-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>