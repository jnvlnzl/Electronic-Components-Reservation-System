<!DOCTYPE HTML>
<HTML LANG="en">
    <HEAD>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <TITLE> ECOR | Home </TITLE>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="styles_ours.css">
        <script>
          function searchInventory() {
              const query = document.getElementById('searchInput').value;
              const resultsContainer = document.getElementById('results');
              resultsContainer.innerHTML = ""; // Clear previous results
    
              if (query.length === 0) {
                  resultsContainer.classList.remove('show');
                  return;
              }
    
              const xhr = new XMLHttpRequest();
              xhr.open('GET', 'search_inventory.php?q=' + encodeURIComponent(query), true);
              xhr.onreadystatechange = function () {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                      const response = xhr.responseText;
                      if (response) {
                          resultsContainer.innerHTML = response;
                          resultsContainer.classList.add('show');
                      } else {
                          resultsContainer.classList.remove('show');
                      }
                  }
              };
              xhr.send();
          }
        </script>
        <style>
            .dropdown-menu.show {
                display: block;
            }
            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                width: 100%;
                max-height: 200px;
                overflow-y: auto;
                background-color: #ffffff;
                border: 1px solid #ccc;
                border-radius: .25rem;
                box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
            }
        </style>
    </HEAD>
    <BODY>
        <!-- Navigation Bar -->
        <header class="navbar-frame">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="home.php">
                      <img src="assets/logo.png" alt="ECOR Logo" class="navbar-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Laboratories
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="laboratories/M402A.php">M402A</a></li>
                                <li><a class="dropdown-item" href="laboratories/M402B&C.php">M402B</a></li>
                                <li><a class="dropdown-item" href="laboratories/M402B&C.php">M402C</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="laboratories/V303A.php">V303A</a></li>
                                <li><a class="dropdown-item" href="laboratories/V303B.php">V303B</a></li>
                                <li><a class="dropdown-item" href="laboratories/V311.php">V311</a></li>
                                <li><a class="dropdown-item" href="laboratories/V312.php">V312</a></li>
                                <li><a class="dropdown-item" href="laboratories/V401.php">V401</a></li>
                                <li><a class="dropdown-item" href="laboratories/V402.php">V402</a></li>
                                <li><a class="dropdown-item" href="laboratories/V404.php">V404</a></li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="catalog.html">Catalog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                              <a class="btn" href="cart.html">
                                <i class="fas fa-shopping-bag"></i></a>
                            </li>
                        </ul>
                        <div class="search-container position-relative">
                          <form class="d-flex" role="search" action="#" method="get" onsubmit="return false;">
                              <input id="searchInput" class="form-control me-2 search-bar" type="search" placeholder="Search for Equipment/Components" aria-label="Search" onkeyup="searchInventory()">
                              <button class="btn" type="button" onclick="searchInventory()">
                                  <i class="fas fa-search"></i>
                              </button>
                          </form>
                          <div id="results" class="dropdown-menu"></div>
                      </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Home -->
        <section id="home">
          <div class="container">
            <h1>E-CORE</h1>
            <h4>DECE's <span>Electronic Component Reservation</span> System</h4>
            <p>Your Electronic Component Reservations with Precision</p><br>
            <a href="reserve.html" class="btn btn-primary">Reserve Now!</a>
          </div>
        </section>

        <!-- About -->
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1>About Us</h1>
                <p>E-CORE is the cutting-edge Electronic Component Reservation System developed exclusively for DECE (Department of Electronic and Computer Engineering). 
                  Our platform is designed to simplify the management and reservation of electronic components, providing an efficient and user-friendly solution to meet 
                  the needs of our department.
                  <br><br>
                  At E-CORE, our mission is to streamline the process of reserving electronic components, ensuring that our students, faculty, and staff have seamless 
                  access to the components they need for their projects and research. We aim to enhance productivity and collaboration within the DECE community by offering 
                  a system that is both intuitive and reliable.</p>
              </div>
              <div class="col-md-6">
                <img src="assets/about.jpg" alt="Electrical Machine Laboratory" class="img-fluid">
              </div>
            </div>
          </div>
        </section>

        <!-- Contact -->
        <footer id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h6>Contact Us</h6>
                <div class="contact-info">
                  <i class="fas fa-envelope"></i><span><a href="mailto:dece.ecor@dlsu.edu.ph" class="email-link">dece.ecor@dlsu.edu.ph</a></span>
                </div>
                <div class="contact-info">
                  <i class="fas fa-phone"></i><span>0263729</span>
                </div>
                <div class="contact-info">
                  <i class="fas fa-map-marker-alt"></i><span>V312, Velasco Building, De La Salle University Taft</span>
                </div>
              </div>
              <div class="col-md-6">
                <h6>Authors</h6>
                <ul class="list-unstyled">
                  <li>Gabriel Ocampo | <a href="mailto:gabriel_ocampo@dlsu.edu.ph" class="email-link">gabriel_ocampo@dlsu.edu.ph</a></li>
                  <li>Milo Perez | <a href="mailto:luis_pereziv@dlsu.edu.ph" class="email-link">luis_pereziv@dlsu.edu.ph</a></li>
                  <li>Alvin Valenciano | <a href="mailto:alvin_valenciano@dlsu.edu.ph" class="email-link">alvin_valenciano@dlsu.edu.ph</a></li>
                  <li>Jana Valenzuela | <a href="mailto:jana_valenzuela@dlsu.edu.ph" class="email-link">jana_valenzuela@dlsu.edu.ph</a></li>
                  <br>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-23 text-center">
                <p>&copy; 2024 ECOR. All Rights Reserved.</p>
              </div>
            </div>
          </div>  
        </footer>

        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            function setActiveLink() {
              let index = sections.length;

              const footer = document.querySelector('footer');
              const footerOffsetTop = footer ? footer.offsetTop : Infinity;
              const footerHeight = footer ? footer.offsetHeight : 0;

              while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

              if (window.scrollY + window.innerHeight >= footerOffsetTop) {
                index = sections.length - 1; 
              }

              navLinks.forEach((link) => link.classList.remove('active', 'active-link'));
              navLinks[index].classList.add('active', 'active-link');
            }

            setActiveLink(); 

            window.addEventListener('scroll', setActiveLink);
          });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </BODY>
</HTML>