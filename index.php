<!DOCTYPE html>
<html lang="en" id="html-tag">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Malaysian Deaf Sports Association</title>
  <link rel="icon" href="images/removebg-logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="style.css" />
  <style>
    .hero-carousel .carousel-item img {
      width: 100%;
      height: 80vh;
      object-fit: cover;
      object-position: center;
    }

    .language-switcher {
      margin-left: auto;
      padding: 0.5rem 1rem;
    }

    .language-switcher select {
      font-size: 0.9rem;
      padding: 0.25rem;
    }

    .partner-logo {
      max-height: 80px;
      object-fit: contain;
    }

    .event-card-animated {
      transition: transform 0.3s ease-in-out;
    }

    .event-card-animated:hover {
      transform: scale(1.02);
    }

    .card-img-overlay {
      background: rgba(0, 0, 0, 0.5);
    }
  </style>

</head>

<body>
  <header>
    <div class="container nav-container">
      <div class="logo">
        <img src="images/removebg-logo.png" alt="Logo" />
      </div>

      <!-- Language Switcher -->
      <div class="language-switcher ms-auto me-3">
        <select id="language-select" onchange="switchLanguage(this.value)">
          <option value="en" selected>EN</option>
          <option value="bm">BM</option>
        </select>
      </div>

      <div class="mobile-toggle" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </div>

      <?php include('include_menu.php'); ?>

    </div>
  </header>

  <main>

    <?php
    $page = isset($_GET['p']) ? basename($_GET['p']) : 'home';
    $file = $page . '.php';

    if (file_exists($file)) {
      include($file);
    } else {
      include('404.php');
    }
    ?>

    <?php include('include_partners.php'); ?>
  </main>


  <!-- Footer -->
  <footer>
    <div class=" container footer-container">
      <div class="social-section">
        <div class="d-flex justify-content-between align-items-center">
          <div class="social-icons">
            <p><strong> Follow us!</strong></p>
            <a href="https://www.facebook.com/msdeaf" target="_blank" aria-label="Facebook">
              <i class="fab fa-facebook fa-1x" style="color: #1877F2; font-size: 1.5em;"></i>
            </a>
            <a href="https://www.instagram.com/malaysiandeafsports/" target="_blank" aria-label="Instagram">
              <i class="fab fa-instagram fa-1x" style="color: #C13584; font-size: 1.5em;"></i>
            </a>
            <a href="https://www.youtube.com/@malaysiandeafsportsassocia4712" target="_blank" aria-label="YouTube">
              <i class="fab fa-youtube fa-1x" style="color: #FF0000; font-size: 1.5em;"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="footer-top">
        <div class="footer-logo-contact">
          <div class="footer-logo">
            <img src="images/msdeaf-logo-hand.png" alt="Logo" class="flag">
            <p><strong>MALAYSIAN DEAF SPORTS ASSOCIATION</strong></p>
          </div>

          <div class="contact-info">

            <div class="info-block">
              <span>📍</span>
              <div>
                No 9-2, Jalan Dwitasik 2,<br>
                Dataran Dwitasik, Bandar Sri Permaisuri,<br>
                56000 Kuala Lumpur, Malaysia<br>
              </div>
              <div>
                <div class="info-block">
                  <span>📞</span> (+60) 9171 0502
                </div>
                <div class="info-block">
                  <span>✉️ Email:</span>info@msdeaf.org.my
                </div>
                <div class="info-block">
                  <span>✉️ Secgen: </span>secgen@msdeaf.org.my
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-links">

          <div style="margin-right: 15rem;">
            <h4>About</h4>
            <a href="#">Background & History</a>
            <a href="#">Organization</a>
            <a href="#">Objectives</a>
            <a href="#">Vision, Mission & Values</a>
            <a href="#">List of NSAs</a>
            <a href="#">Downloads</a>
          </div>
          <div class="footer-links_vertical">
            <div>
              <h4>Recognition</h4>
              <a href="#">ICSD</a>
            </div>
            <div style="margin-top: 2rem;">
              <h4>Affiliations</h4>
              <a href="#">KBS</a>
              <a href="#">MSN</a>
              <a href="#">IOM</a>
              <a href="#">ICSD</a>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>Copyright © 1998–2025. All rights reserved | <a href="#">Privacy Notice</a> | <a href="#">Terms &
            Conditions</a> | <a href="#">Contact</a></p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>


</body>

</html>