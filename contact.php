<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <meta name="author" content="" />

  <title>Drool</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
            <div class="User_option">
              <!-- <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="policy.php">Privacy Policy</a>
                <a href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
                Request A Call Back
              </h2>
              <p>
                Have questions or need assistance? Request a call back, and our team will reach out to help you with any pet care inquiries or product information.
              </p>
            </div>
            <form id="myForm">
  <div>
    <input type="text" id="fullNameInput" placeholder="Full Name" required oninput="capitalizeWords()" />
  </div>
  <div>
    <input type="text" id="phoneInput" placeholder="Phone number" required oninput="filterNonNumeric()" />
  </div>
  <div>
    <input type="email" id="emailInpu" placeholder="Email" required />
  </div>
  <div>
    <input type="text" id="messageInput" required class="message-box" placeholder="Message" />
  </div>
  <span id="submitformtext" style="color:green;"></span>
  <div class="d-flex">
    <button type="button" id="submitform">
      SEND
    </button>
  </div>
</form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <p><br></p>
        </div>
      </div>
    </div>
  </section>
  <script>
  function capitalizeWords() {
    var inputField = document.getElementById('fullNameInput');
    var words = inputField.value.split(' ').map(function(word) {
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    });
    inputField.value = words.join(' ');
  }

  function filterNonNumeric() {
    var inputField = document.getElementById('phoneInput');
    inputField.value = inputField.value.replace(/\D/g, '');
  }

  document.getElementById('submitform').addEventListener('click', function(e) {
    e.preventDefault();

    var form = document.getElementById('myForm');
    var isValid = form.checkValidity(); // Check if the form is valid

    if (isValid) {
      var text = "Form Submitted Successfully!";
      document.getElementById('submitformtext').textContent = text;
      $('#fullNameInput').val("");
      $('#phoneInput').val("");
      $('#emailInpu').val("");
      $('#messageInput').val("");
      // Optionally, you can submit the form here, e.g., using AJAX or manually
      // form.submit();

      // Remove the text after 3 seconds
      setTimeout(function() {
        document.getElementById('submitformtext').textContent = '';
      }, 3000); // 3000 milliseconds = 3 seconds
    } else {
      // Show validation errors
      form.reportValidity(); // Trigger built-in validation messages
    }
  });
</script>
  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
      <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <!-- <img src="images/call.png" alt="" /> -->
              <p>
              20 Cooper Square, NY 10003, USA
              </p>
            </div>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                +01 1284 576 998
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                info@drool.online
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Opening Hours Shop
            </h5>
            <div>
              <p>
                Monday to friday
              </p>
            </div>
            <div>
              <p>
                07:00 am to 04:00 pm
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" style="visibility:hidden;">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
              Newsletter
            </h5>
            <form id="emailForm">
  <input type="email" id="emailInput" placeholder="Enter Your Email" required />
  <button type="button" class="applycoupon" onclick="validateEmail()">
    Subscribe
  </button>
  <div><br></div>
  <span id="coupontext" style="color:white;"></span>
</form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
  function validateEmail() {
    var emailInput = document.getElementById('emailInput');
    var couponText = document.getElementById('coupontext');
    
    // Check if the input field is not empty and required validation passes
    if (emailInput.checkValidity()) {
      // Regular expression for validating email format
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

      if (!emailPattern.test(emailInput.value)) {
        couponText.textContent = '';
      } else {
        couponText.textContent = 'Subscribed Successfully!';
        emailInput.value="";

      }
    } else {
      // Trigger the browser's built-in validation error message
      emailInput.reportValidity();
    }
  }
</script>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2024 Drool. All Rights Reserved. Designed with love for pets by 
      <a href="index.php">Drool </a>.
    </p>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>

</html>