<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Basic -->
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <!-- Mobile Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
 <title>TamilNaatru</title>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
 

 <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="css/style.css" rel="stylesheet" />

 <!-- responsive style -->
 <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="uploadstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <!-- TinyMCE Editor -->
   <script src="https://cdn.tiny.cloud/1/pkcekgnae3x7xqzewo7ifa0skguqvked9ct9jxo8r8fhoq5r/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="sub_page">
  <style>
       
* {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body {
  font-family: "Montserrat", sans-serif;
}
nav {
  background: #1a2e35;
  height: 80px;
  width: 100%;
}

label.logo {
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}

label.logo img {
  height: 50px;
  margin-right: 10px;
}

nav ul {
  float: right;
  margin-right: 20px;
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}

nav ul li a {
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}

a.active,
a:hover {
  background: #495057;
  color: #f5ecec;
  transition: .5s;
}

.checkbtn {
  font-size: 22px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 30px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}

/* Dropdown Menu Styles */
nav ul li.dropdown {
  position: relative;
}

nav ul li.dropdown:hover .dropdown-content {
  display: block;
}

nav ul li .dropdown-content {
  display: none;
  position: absolute;
  top: 50px;  /* Aligns the dropdown directly below the navbar */
  left: 0;
  background-color: #1a2e35;
  width: 150px;
  padding: 0;  /* Remove padding to reduce space */
  margin: 0;  /* Remove extra space around the dropdown items */
  border-radius: 5px;
  
}

/* Ensure no margin or padding between dropdown list items */
nav ul li .dropdown-content li {
  display: block;
  margin: 0;  /* Remove any margin between the list items */
  padding: 0; /* Remove any padding between the list items */
  line-height: 3.00;  /* Reduce line-height to decrease space between items */
}

/* Ensure no padding on the anchor tags */
nav ul li .dropdown-content li a {
  padding: 5px 10px; /* Reduce the padding to make the links tighter */
  font-size: 15px;  /* Optional: Adjust font size */
  text-transform: none;  /* Keep text lowercase for better readability */
}


nav ul li .dropdown-content li a:hover {
  background: #495057;
  color: #f5ecec;
  transition: .5s;
}

@media (max-width: 1050px) {
  label.logo {
    padding-left: 20px;
    font-size: 20px;
  }
  label.logo img {
    height: 25px;
  }
  nav ul li a {
    font-size: 15px;
  }
}
/* Responsive media query code for small screen */
@media (max-width: 890px) {
  .checkbtn {
    display: block;
  }
 
  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    background:  #1a2e35;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a {
    font-size: 20px;
    gap: 15px;
  }
  a:hover,
  a.active {
    background: none;
    color: #fafafa;
  }
  #check:checked~ul {
    left: 0;
  }
  /* Mobile dropdown menu */
  nav ul li .dropdown-content {
    position: static;
    width: 100%;
    display: none;
  }

  nav ul li:hover .dropdown-content {
    display: block;
  }

  /* Existing CSS remains as is */

/* Add styling for the cross icon */

}
    
    
    /* Responsive media query code for small screen */
    
    
    
    
    
      </style>
      <script>
   tinymce.init({
                    selector: '#editor',
                    height: 400,
                    plugins: 'advlist autolink link image lists charmap preview code',
                    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | preview code',
                    content_css: 'https://www.tiny.cloud/css/codepen.min.css'
                });
  </script>
    </head>
    <body>
    
        <div class="hero_area">
          <body>
            <nav>
              <!-- Checkbox for toggling menu -->
              <input type="checkbox" id="check">
              
              <!-- Menu icon -->
              <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
              </label>
              
              <!-- Site logo -->
              <label class="logo">
                <img src="images/Tlogo.jpg" alt="Logo">
                தமிழ் நாற்று
              </label>
              
              <!-- Navigation links -->
              <ul>
                <li><a href="index.php">முகப்பு</a></li>
                
                 <!-- Dropdown menu for 'கட்டுரைகள்' -->
    <li class="dropdown">
      <a href="#">கட்டுரைகள்</a>
      <ul class="dropdown-content">
        <li><a href="kalvi.php">கல்வி</a></li>
        <li><a href="ulaviyal.php">உளவியல்</a></li>
       
        <li><a href="samugam.php">சமூகம்</a></li>
        <li><a href="tholinotpam.php">தொழில்நுட்பம்</a></li>
        <li><a href="arasiyal.php">அரசியல்</a></li>
        <li><a href="arangiyal.php">அரங்கியல்</a></li>
      </ul>
    </li>
    
    <!-- Dropdown menu for 'இலக்கியம்' -->
    <li class="dropdown">
      <a href="#">இலக்கியம்</a>
      <ul class="dropdown-content">
        <li><a href="sirugadhai.php">சிறுகதை</a></li>
        <li><a href="kavidhai.php">கவிதை</a></li>
        <li><a href="cinema.php">சினிமா</a></li>
      </ul>
    </li>
    
    <!-- Dropdown menu for 'பொது அறிவு' -->
    <li class="dropdown">
      <a href="#">பொது அறிவு</a>
      <ul class="dropdown-content">
        <li><a href="ilangai.php">இலங்கை</a></li>
        <li><a href="india.php">இந்தியா</a></li>
        <li><a href="ulagam.php">உலகம்</a></li>
        <li><a href="tholil.php">தொழில்நுட்பம்</a></li>
      </ul>
    </li>
                <li><a href="admin_categories.php">பொத்தான்  வடிவமைப்பு</a></li>
                <li><a href="crud.php">ஆக்கதிருத்தம்</a></li>
              </ul>
            </nav>
          </div>
    
  <!-- Upload Form Section -->
<section class="upload_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h3>உங்கள் ஆக்கத்தினை பதிவேற்றவும்</h3>
    </div>
    <form action="upload_process.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="category">ஆக்கத்தின் வகை</label>
    <select id="category" name="category" required style="width: 100%; font-size: 12px;">
        <!-- Add additional static options -->
      

        <!-- Dropdown group for 'கட்டுரைகள்' with subcategories -->
        <optgroup label="கட்டுரைகள்">
            <option value="கல்வி">கல்வி</option>
            <option value="உளவியல்">உளவியல்</option>
            <option value="அரசியல்">அரசியல்</option>
            <option value="சமூகம்">சமூகம்</option>
        </optgroup>

        <!-- Dropdown group for 'இலக்கியம்' with subcategories -->
        <optgroup label="இலக்கியம்">
            <option value="சிறுகதை">சிறுகதை</option>
            <option value="கவிதை">கவிதை</option>
            <option value="சினிமா">சினிமா</option>
        </optgroup>

        <!-- Dropdown group for 'பொது அறிவு' with subcategories -->
        <optgroup label="பொது அறிவு">
            <option value="இலங்கை">இலங்கை</option>
            <option value="இந்தியா">இந்தியா</option>
            <option value="உலகம்">உலகம்</option>
            <option value="தொழில்">தொழில்நுட்பம்</option>
        </optgroup>

        <?php
        // Include database connection
        include 'connect.php';

        // Fetch categories from the database
        $query = "SELECT category_name FROM categories";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Dynamically add categories from the database
                echo "<option value='" . htmlspecialchars($row['category_name'], ENT_QUOTES) . "' style='font-weight: bold;'>" . htmlspecialchars($row['category_name'], ENT_QUOTES) . "</option>";
            }
        } else {
            echo "<option value=''>No categories available</option>";
        }
        ?>
    </select>
</div>

<div class="form-group">
        <label for="title">ஆக்கத்தின் தலைப்பு</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="image1">படம் 1 பதிவேற்றவும்</label>
        <input type="file" id="image1" name="image1" accept="image/*" required>
      </div>

      <div class="form-group">
        <label for="image2">படம் 2 பதிவேற்றவும் (விருப்பத்தேர்வு)</label>
        <input type="file" id="image2" name="image2" accept="image/*">
      </div>

      <!-- Content Editor -->
      
      <textarea id="editor" name="content"></textarea>

  

    

      <div class="form-group">
        <button type="submit" class="btn-1">ஆக்கத்தினை சமர்ப்பிக்க</button>
      </div>
    </form>
  </div>
</section>

  
  <!--footer section-->
  <!-- Footer Section -->
<footer style="background-color: #1a2e35; color: #fff; padding: 20px 0; text-align: center;">
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; padding: 0 20px;">
      <!-- About Us Section -->
      <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
          <h6>எங்களைப் பற்றி</h5>
          <p>சமீபத்திய புதுப்பிப்புகள் மற்றும் தரமான உள்ளடக்கத்தை கொண்டு வர நாங்கள் கடமைப்பட்டுள்ளோம். மேலும் புதுப்பிப்புகளுக்கு இணைந்திருங்கள்.</p>
      </div>
      <!-- Quick Links Section -->
      <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
          <h6>விரைவு இணைப்புகள்</h6>
          <ul style="list-style: none; padding: 0;">
              <li><a href="#" style="color: #fff; text-decoration: none;">முகப்பு</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">கட்டுரைகள்</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">இலக்கியம்</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">பொது அறிவு</a></li>
          </ul>
      </div>
      <!-- Contact Us Section -->
      <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
          <h6>தொடர்புகளுக்கு</h6>
          <p>Email: info@tamilnaatru.com</p>
          <p>Phone: +91 123 456 7890</p>
          <div>
              <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">
                  <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" style="color: #fff; text-decoration: none; margin-right: 10px;">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="#" style="color: #fff; text-decoration: none;">
                  <i class="fab fa-instagram"></i>
              </a>
          </div>
      </div>
  </div>
  <p style="font-size: 14px; margin-top: 20px;">&copy; 2024 Faite. All Rights Reserved.</p>
</footer>
  <!--end footer section-->
  
  
<script>

  document.addEventListener("DOMContentLoaded", function() {
  const checkbtn = document.querySelector(".checkbtn i");
  const checkbox = document.querySelector("#check");

  checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
      checkbtn.classList.remove("fa-bars");
      checkbtn.classList.add("fa-times");
    } else {
      checkbtn.classList.remove("fa-times");
      checkbtn.classList.add("fa-bars");
    }
  });
});


</script>

</body>
</html>