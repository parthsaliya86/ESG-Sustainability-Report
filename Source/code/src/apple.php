<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESG | German Sustainability Report - 2022</title>

    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- fonaewsome cdn -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Fonts Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet Linking -->
    <link rel="stylesheet" href="/style/style.css">

</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container" id="home">
        <a href="index.php">ESG Analyzer</a>

            <button class="navbar-toggler custom-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-toggler"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link " aria-current="page" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link active" href="companies.php">Companies</a>
                    </li>
                    <li class="nav-item px-3 py-2 py-2">
                        <a class="nav-link" href="reports.php">Reports</a>
                    </li>
                    <li class="nav-item px-3 py-2 py-2">
                        <a class="nav-link" href="index.php">Teams</a>
                    </li>
                    <li class="nav-item dropdown px-3 py-2">
                        <div class="dropdown">
                            <a class="nav-link" href="#">Language</a>
                            <!-- <div class="dropdown-content">
                                <a href="#">GENERIC</a>
                                <a href="#">Element</a>
                            </div> -->
                        </div>
                    </li>
                    <!--<li class="nav-item px-3 py-2">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link" href="#">Be a Member</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link" href="#">Our Team</a>
                    </li>
                    <li class="nav-item px-3 py-2">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Header Start -->
    <section class="header">
        <div class="container">
            <div class="row">
                <!-- Left-Side -->
                <div class="col-md-2 col-sm-12  left">
                <img src="/assets/companies/apple.png" alt="" width="100%">
                </div>
                
                <!-- Rigth-Side -->
                <div class="col-md-10 col-sm-12 right">
                <div style='margin-top: 60px;'>
                <h4 style='font-size: 20px; color: #E95205;'> About Company </h4>

                    <p>
                    Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services headquartered in Cupertino, California, United States.Apple was founded as Apple Computer Company on April 1, 1976, by Steve Jobs, Steve Wozniak and Ronald Wayne to develop and sell Wozniak's Apple I personal computer. Apple is the largest information technology company by revenue (totaling US$365.8 billion in 2021) and as of May 2022, it is the world's second most valuable company, the fourth-largest personal computer vendor by unit sales and second-largest mobile phone manufacturer.
                    </p>
                   <a href="#reports"> <button type="button" class="btn first px-5 py-2" id="reports">PDF Reports</button></a>
                   <a href="reports.php"> <button type="button" class="btn first px-5 py-2 mx-3">View Analysis</button></a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Header End -->
    <div style='margin-top: 35px;' id="showreports">
    <div style='margin-left:75px;'>
    <h3 style='font-size: 20px; color: #E95205; '> PDF Reports </h3>
    </div>  
    <div class="wrapper-grey padded">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <a href="https://assets.new.siemens.com/siemens/assets/api/uuid:4806da09-01c7-40b1-af91-99af4b726653/sustainability2021-en.pdf"><img src="/assets/pdf.png" onclick="confirmAction()" alt="" width="130px"></a>
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2022</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <img src="/assets/pdf.png" alt="" width="130px">
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2021</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <img src="/assets/pdf.png" alt="" width="130px">
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2020</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <img src="/assets/pdf.png" alt="" width="130px">
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2019</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <img src="/assets/pdf.png" alt="" width="130px">
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2018</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-2">
                            <div class="card align-items-center justify-content-center">
                                <img src="/assets/pdf.png" alt="" width="130px">
                            </div>
                            <div style='margin-top:10px;'>
                            <p style='text-align: center;'>2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script>
    const targetDiv = document.getElementById("showreports");
    const btn = document.getElementById("reports");
    btn.onclick = function () {
      if (targetDiv.style.display !== "none") {
        targetDiv.style.display = "none";
      } else {
        targetDiv.style.display = "block";
      }
    };
  </script>
  <script>
      // The function below will start the confirmation dialog
      function confirmAction() {
        let confirmAction = confirm("Do you want to download it?");
        if (confirmAction) {
          alert("Downloaded Successfully!!");
        } else {
          alert("Action canceled");
        }
      }
    </script>



    


    <!-- Footer start -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="#home"> ESG Analyzer </a>
                        <p class="py-3">Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa
                            magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li></i> <a href="#">Home</a></li>
                            <li></i> <a href="#">About us</a></li>
                            <li></i> <a href="#">Services</a></li>
                            <li></i> <a href="#">Terms of service</a></li>
                            <li></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li> <a href="#">Web Design</a></li>
                            <li> <a href="#">Web Development</a></li>
                            <li> <a href="#">Marketing</a></li>
                            <li> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <!--<p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p> -->

                    </div>

                </div>
            </div>
        </div>

        <hr class="line2">
        </hr>

        <div class="container copy1">
            <div class="copyright">
                &copy; Copyright <strong><span>ECGAnalyzer</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Priyank</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->



    <!-- BootStrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>