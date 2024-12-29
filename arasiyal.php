<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>TamilNaatru</title>

  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="newstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Pavanam&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
    line-height: 0px;
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



/* General container for each update box */
.update-box {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.update-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Style for the update photo */
.update-photo1 {
    width: 150px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    flex-shrink: 0;
}

/* Content container */
.content {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Header (Title) styling */
.updates-header {
    font-size: 18px;
    font-weight: bold;
    margin: 0 0 10px;
    color: #333;
}

/* Description (Preview text) styling */
.content p {
    font-size: 14px;
    line-height: 1.5;
    color: #555;
    margin: 0 0 15px;
}

/* Button styling */
.cta-btn {
    display: inline-block;
    padding: 5px 20px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #ff4f5a;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    width: 50%;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.cta-btn:hover {
    background-color: #e0434f;
    transform: translateY(-2px);
}



 </style>
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
    <li><a href="login.html">உள்நுழைவு</a></li>
  </ul>
</nav>


   
         
        </section>
        
        
  
      </div>
 
      
      
      <div class="container" style="display: flex; justify-content: center; align-items: center; ">     
          <!-- Left Side -->
          <div class="left-side" id="leftContent">
              <h2 style="text-align: center; font-weight: bold;">அரசியல் சார்ந்த கட்டுரைகள்</h2>

<?php
// Include the database connection
include 'connect.php'; // Ensure this file contains your DB connection details

// Query to fetch the latest uploads for the 'உளவியல்' category
$sql = "SELECT id, category, title, image_path, content FROM uploads WHERE category = 'அரசியல்'";
$result = $conn->query($sql);

// Check if any uploads exist
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display each upload dynamically
        echo '<div class="update-box" style="border:none" data-id="' . htmlspecialchars($row['id']) . '">
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['title']) . '" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">' . htmlspecialchars($row['title']) . '</h2>
                    <p>' . htmlspecialchars(substr(strip_tags($row['content']), 0, 150)) . '...</p>
                    <a href="view.php?id=' . htmlspecialchars($row['id']) . '" class="cta-btn">மேலும் வாசிக்க</a>
                </div>
              </div>';
    }
} else {
    echo '<p>சமீபத்திய புதுப்பிப்புகள் இல்லை.</p>';
}

// Close the database connection
$conn->close();

    
?>
</div>
</div>

<!-- Footer Section -->
<footer style="background-color: #1a2e35; color: #fff; padding: 20px 0; text-align: center;">
    <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; padding: 0 20px;">
        <!-- About Us Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>எங்களைப் பற்றி</h5>
            <p>சமீபத்திய புதுப்பிப்புகள் மற்றும் தரமான உள்ளடக்கத்தை கொண்டு வர நாங்கள் கடமைப்பட்டுள்ளோம். மேலும் புதுப்பிப்புகளுக்கு இணைந்திருங்கள்.</p>
        </div>
        <!-- Quick Links Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>விரைவு இணைப்புகள்</h5>
            <ul style="list-style: none; padding: 0;">
                <li><a href="index.php" style="color: #fff; text-decoration: none;">முகப்பு</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">கட்டுரைகள்</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">இலக்கியம்</a></li>
                <li><a href="#" style="color: #fff; text-decoration: none;">பொது அறிவு</a></li>
            </ul>
        </div>
        <!-- Contact Us Section -->
        <div style="flex: 1; min-width: 250px; margin-bottom: 15px;">
            <h5>தொடர்புகளுக்கு</h5>
            <p>Email: <a href="mailto:info@tamilnaatru.com" style="color: rgb(240, 244, 248);">info@tamilnaatru.com</a></p>
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


  
  <!-- end  footer section -->

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


    
