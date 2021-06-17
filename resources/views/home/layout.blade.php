<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BHLENDING</title>
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header class="main-header">
        <div class="main-top-header">
            <div class="container">
                <div class="top-header">
                    <div class="top-address">
                        <p><span class="top-icon"><i class="fas fa-map-marker-alt"></i></span> Sede Operativa Via
                            Pantano n. 2, 20122 Milano</p>
                    </div>
                    <div class="top-social">
                        <ul class="top-social-list">
                            <li>Follow us on social networks:</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-bottom-header">​<div class="container">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="#"><img src="{{asset('home/img/logo_bhlending_web1000px.png')}}" alt="logo"
                            class="main-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('login_applicant')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Invest in a loan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Loans between individuals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li> <li class="nav-item textBlue">
                                <a class="nav-link outer-line-btn " href="{{url('login_applicant')}}" style="color:#fff">Login</a>
                            </li>
                            <li class="nav-item textWhite">
                                <a class="nav-link blue-btn" href="{{url('front')}}">Get Started</a>
                            </li>
                        </ul>
                    </div>
                    <div> </div>
                </nav>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="login.html">Login</a>
            <a href="#">Invest in a Loan</a>
            <a href="#">Loans between individuals</a>
            <a href="#">Contact Us</a>
          </div>
          
    </header>
     @yield('home.content')
<!---
    content
    !-->
    <footer class="main-footer mt-5">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <img src="{{asset('home/img/logo_bhlending_web1000px.png')}}" alt="logo" class="footer-logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="footer-box">
                            <h5 class="footer-title">headquarters</h5>
                            <ul class="footer-list">
                                <li>
                                    <p class="footer-tagline">Contact us for any kind of information</p>
                                </li>
                                <li>
                                    <div class="footer-menu-flex">
                                        <div class="footer-icon"><i class="fas fa-paper-plane"></i></div>
                                        <div class="footer-info">
                                            <h6 class="footer-link-title">Mail Us</h6>
                                            <a href="mailto:info@bhlending.it" class="footer-link">info@bhlending.it</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-menu-flex">
                                        <div class="footer-icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="footer-info">
                                            <h6 class="footer-link-title">Have any questions?</h6>
                                            <a href="tel:+1200300400500" class="footer-link">+1-200-300-400-500</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="footer-box">
                            <h5 class="footer-title">About us</h5>
                            <ul class="footer-list">
                                <li><a href="" class="footer-link-list">Login</a></li>
                                <li><a href="" class="footer-link-list">Invest in a loan</a></li>
                                <li><a href="" class="footer-link-list">Loan between individuals</a></li>
                                <li><a href="" class="footer-link-list">About us</a></li>
                                <li><a href="" class="footer-link-list">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="footer-box">
                            <h5 class="footer-title">our offices</h5>
                            <ul class="footer-list">
                                <li>
                                    <p class="footer-tagline">where you can find us?</p>
                                </li>
                                <li>
                                    <div class="footer-menu-flex">
                                        <div class="footer-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="footer-info">
                                            <h6 class="footer-link-title">Milan: Via Pantoano n.2</h6>
                                            <h6 class="footer-link-title">Rome: Piazza Augusto Imperatore n.3</h6>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="footer-box">
                            <h5 class="footer-title">stay connected</h5>
                            <ul class="footer-list">
                                <li>
                                    <p class="footer-tagline">Social</p>
                                </li>
                                <li>
                                    <p class="follow-us">follow us on BhLending social networks to not miss any news</p>
                                </li>
                            </ul>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="copy-p">Copyright &copy; 2021 BHlending. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{asset('home/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
</body>
 <script>

        let passwordInput = document.getElementById('password'),
            toggle = document.getElementById('btnToggle'),
            icon = document.getElementById('eyeIcon');

        function togglePassword() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.add("fa-eye-slash");
                //toggle.innerHTML = 'hide';
            } else {
                passwordInput.type = 'password';
                icon.classList.remove("fa-eye-slash");
                //toggle.innerHTML = 'show';
            }
        }


        toggle.addEventListener('click', togglePassword, false);


        // For Sidenav

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</html>
