<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>TamilNaatru</title>

  <link rel="stylesheet" href="newstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Pavanam&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    
    
   


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
    padding: 10px 25px; /* Adjust padding for better touch targets */
    font-size: 16px; /* Slightly larger font for better readability */
    font-weight: bold;
    color: #fff;
    background-color: #ff4f5a;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s ease, transform 0.2s ease;
    max-width: 200px; /* Optional: Limit max width for smaller screens */
}

/* Hover effects */
.cta-btn:hover {
    background-color: #e0434f;
    transform: translateY(-2px);
}

/* Responsive styling */
@media (max-width: 768px) {
    .cta-btn {
        padding: 8px 20px; /* Slightly smaller padding for small screens */
        font-size: 14px;
        max-width: 100%; /* Ensure button spans full width in smaller containers */
    }
}

@media (max-width: 480px) {
    .cta-btn {
        width: 90%; /* Fill almost the full width of smaller screens */
        padding: 8px 15px;
        font-size: 14px;
    }
}


 </style>
</head>
<body>

<?php
      include('navigation.php');
      ?>


   
         
        </section>
        
        
  
      </div>
 
      
      
      <div class="container" style="display: flex; justify-content: center; align-items: center; ">     
          <!-- Left Side -->
          <div class="left-side" id="leftContent">
              <h2 style="text-align: center; font-weight: bold;">சமூகம் சார்ந்த கட்டுரைகள்</h2>

<?php
// Include the database connection
include 'connect.php'; // Ensure this file contains your DB connection details

// Query to fetch the latest uploads for the 'உளவியல்' category
$sql = "SELECT id, category, title, image_path, content FROM uploads WHERE category = 'சமூகம்'";
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
<div style="flex: 1; min-width: 350px; margin-bottom: 15px; line-height: 1.6;">
    <h5 style="margin-bottom: 10px;">தொடர்புகளுக்கு</h5>
    <p style="margin-bottom: 10px;">Email: 
        <a href="mailto:info@tamilnaatru.com" style="color: rgb(240, 244, 248); text-decoration: none;">info@tamilnaatru.com</a>
    </p>
    <p style="margin-bottom: 15px;">Phone: +91 123 456 7890</p>
    <div style="margin-top: 10px;">
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


    
