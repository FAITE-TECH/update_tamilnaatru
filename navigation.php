<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>TamilNaatru</title>

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<style>
    
    
/* Global Styles */
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

nav ul li .dropdown-content li a:focus,
nav ul li .dropdown-content li a:active {
  background-color: transparent; /* Remove the gray background */
  outline: none; /* Remove the outline */
  color: inherit; /* Maintain the text color */
}

nav {
  background: #b90005;
  height: 80px;
  width: 100%;
  display: flex;
  align-items: center; /* Centers content vertically */
  justify-content: space-between; /* Ensures space between logo and nav items */
}

label.logo {
  color: white;
  font-size: 25px;
  padding: 0 100px;
  font-weight: bold;
  display: flex;
  align-items: center; /* Centers logo text vertically */
}

label.logo img {
  height: 50px;
  margin-right: 10px;
}

nav ul {
  margin-right: 20px;
  display: flex; /* Use flex to align items horizontally */
  align-items: center; /* Vertically center items */
}

nav ul li {
  display: inline-block;
  margin: 0 5px;
}

nav ul li a {
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
  line-height: 80px; /* Match the navbar height */
}

a.active,
a:hover {
  color: rgb(252, 249, 249);
  transition: 0.5s;
  text-decoration: underline; /* Underline the link */
 
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
  top: 60px; /* Aligns the dropdown directly below the navbar */
  left: 0;
  background-color: rgb(250, 246, 246);
  width: 150px;
  border-radius: 5px;
}

/* Ensure no margin or padding between dropdown list items */
nav ul li .dropdown-content li {
  display: block;
  margin: 0;
  padding: 0;
}

/* Adjust line height and padding for anchor tags */
nav ul li .dropdown-content li a {
  color: black;
  padding: 10px 15px; /* Adjust padding for better spacing */
  font-size: 15px;
  text-transform: none;
  display: block; /* Ensures the anchor fills the entire dropdown item */
  line-height: 1.5; /* Increased line-height for appropriate vertical spacing */
}

/* Adjust hover effect */
nav ul li .dropdown-content li a:hover {
  text-decoration: underline; /* Underline the link */
  color: #b90005; /* Optional: Change the text color on hover */
}

/* Media Query for Tablet Screens (Portrait Mode) */
@media (max-width: 1024px) and (min-width: 768px) {
  nav {
    height: 80px; /* Maintain navbar height */
    padding: 0 20px;
  }

  label.logo {
    font-size: 22px; /* Adjust logo size */
    padding: 0 15px;
  }

  nav ul {
    display: flex; /* Keep items aligned horizontally */
    justify-content: center; /* Center navigation items */
    width: 100%;
    text-align: center;
    
  }

  nav ul li {
    display: inline-block;
    margin: 0 15px;
  }

  nav ul li a {
    font-size: 18px;
    padding: 12px 18px; /* Adjust padding for readability */
    line-height: 10px; /* Center the text vertically in the navbar */
  }

  .checkbtn {
    display: none; /* No need for the hamburger button */
  }

  /* Dropdown Menu */
  nav ul li.dropdown {
    position: relative;
  }

  nav ul li.dropdown:hover .dropdown-content {
    display: block;
  }

  nav ul li .dropdown-content {
    display: none;
    position: absolute;
    top: 80px;
    left: 0;
    background-color: rgb(250, 246, 246);
    width: 160px; /* Increased width for readability */
    border-radius: 5px;
  }

  /* Adjust line height and padding for dropdown links */
  nav ul li .dropdown-content li a {
    
    padding: 10px 15px;
    font-size: 16px;
    text-transform: none;
    display: block;
    line-height: 1.5;
  }

  /* Remove hover effects for dropdown links */
.dropdown-content a {
    text-decoration: none; /* No underline */
    color: inherit; /* Inherit the color from the parent */
}

.dropdown-content a:hover {
    text-decoration: none; /* No underline on hover */
    color: inherit; /* No color change on hover */
}

}

/* Media Query for Medium Screens (e.g., iPad Air/Pro) */
@media (max-width: 1024px) and (min-width: 800px) {
  nav {
    height: 80px;
    padding: 0 25px; /* Adjust padding for a balanced look */
  }

  label.logo {
    font-size: 24px;
    padding: 0 25px;
  }

  nav ul {
    justify-content: center; /* Center the nav items */
    width: auto;
  }

  nav ul li {
    margin: 0 20px;
  }

  nav ul li a {
    font-size: 18px;
    padding: 10px 16px;
    line-height: 70px; /* Adjust line height */
  }

  .checkbtn {
    display: none;
  }

  /* Dropdown Menu */
  nav ul li.dropdown {
    position: relative;
  }

  

  nav ul li .dropdown-content {
    display: none;
    position: absolute;
    top: 80px;
    left: 0;
    background-color: rgb(250, 246, 246);
    width: 170px; /* Increased width for medium devices */
    border-radius: 5px;
  }

  nav ul li .dropdown-content li a {
    color: black;
    padding: 10px 15px;
    font-size: 16px;
    line-height: 1.5;
  }

 /* Remove hover effects for dropdown links */
.dropdown-content a {
    text-decoration: none; /* No underline */
    color: inherit; /* Inherit the color from the parent */
}

.dropdown-content a:hover {
    text-decoration: none; /* No underline on hover */
    color: inherit; /* No color change on hover */
}

}



/* Media Query for Small Screens (Under 768px) */
@media (max-width: 768px) {
  nav {
    height: 70px;
    padding: 0 20px;
  }

  label.logo {
    font-size: 20px;
    padding: 0 10px;
  }

  nav ul {
    display: none; /* Initially hide the menu */
    width: 100%;
    text-align: center;
    position: absolute;
    top: 70px;
    left: 0;
    background: #b90005;
    z-index: 1;
  }

  nav ul li {
    display: block;
    margin: 15px 0;
  }

  nav ul li a {
    font-size: 18px;
    padding: 15px 20px; /* Adjust padding */
    line-height: normal;
  }

  .checkbtn {
    display: block;
    position: absolute;
    right: 20px;
    font-size: 22px;
    color: white;
    line-height: 70px;
    margin-right: 30px;
    cursor: pointer;
  }

  #check:checked ~ ul {
    display: block; /* Display the menu when the checkbox is checked */
  }

  /* Dropdown Menu for Small Screens */
  nav ul li.dropdown {
    position: relative;
  }

  nav ul li .dropdown-content {
    display: none; /* Initially hidden */
    position: static; /* Make it appear under the menu */
    background-color: #b90005;
    width: 100%; /* Take the full width of the screen */
    border-radius: 5px;
  }

  /* Display dropdown content when the parent menu item is clicked */
  nav ul li.dropdown #check:checked ~ .dropdown-content {
    display: block; /* Show dropdown when the menu is open */
  }

  nav ul li .dropdown-content li {
    padding: 10px 15px;
  }

  nav ul li .dropdown-content li a {
    color: #f0f0f0;
    font-size: 16px;
    text-transform: none;
    
  }

 /* Remove hover effects for dropdown links */
.dropdown-content a {
    text-decoration: none; /* No underline */
    color: inherit; /* Inherit the color from the parent */
}

.dropdown-content a:hover {
    text-decoration: none; /* No underline on hover */
    color: inherit; /* No color change on hover */
}

}

/* Media Query for Medium Screens (e.g., iPad Air/Pro, Surface Pro, Zenbook Fold) */
@media (max-width: 1024px) and (min-width: 800px) {
  nav {
    height: 80px;  /* Set a consistent height for the navbar */
    padding: 0 15px;  /* Adjust padding to create some breathing space */
    width: 100%;  /* Ensure the navbar spans the full width */
    box-sizing: border-box;  /* Include padding in the total width calculation */
    display: flex;
    justify-content: space-between; /* Keep logo on the left and menu items on the right */
    align-items: center; /* Vertically center the content */
  }

  label.logo {
    font-size: 24px;
    padding: 0 15px; /* Adjust logo padding */
    flex-grow: 1;  /* Allow logo to take space if needed */
  }

  nav ul {
    display: flex; /* Use flexbox for the menu items */
    justify-content: flex-end;  /* Align menu items to the right */
    margin: 0;
    padding-left: 0; /* Remove left padding */
  }

  nav ul li {
    margin: 0 15px; /* Evenly space the menu items */
    display: inline-block;
  }

  nav ul li a {
    font-size: 18px;  /* Adjust font size for readability */
    padding: 10px 20px; /* Add padding for spacing */
    line-height: 60px;  /* Vertically center the link */
  }

  .checkbtn {
    display: none;  /* Hide hamburger menu on medium screens */
  }

  /* Dropdown Menu */
  nav ul li.dropdown {
    position: relative;
  }

  nav ul li.dropdown:hover .dropdown-content {
    display: block; /* Display the dropdown menu on hover */
  }

  nav ul li .dropdown-content {
    display: none;
    position: absolute;
    top: 80px;  /* Position dropdown below navbar */
    left: 0;
    background-color: rgb(250, 246, 246);
    width: 170px;  /* Adjust width for a better fit */
    border-radius: 5px;
  }

  nav ul li .dropdown-content li a {
    color: black;
    padding: 10px 15px;
    font-size: 16px;
    line-height: 1.5;
  }

  /* Remove hover effects for dropdown links */
.dropdown-content a {
    text-decoration: none; /* No underline */
    color: inherit; /* Inherit the color from the parent */
}

.dropdown-content a:hover {
    text-decoration: none; /* No underline on hover */
    color: inherit; /* No color change on hover */
}

}










</style>
<body>

    
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
      <a href="#" >கட்டுரைகள்</a>
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
      <a href="#">பொதுஅறிவு</a>
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

document.querySelectorAll('.dropdown > a').forEach(dropdown => {
  dropdown.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default link behavior

    // Toggle 'open' class to show/hide the dropdown
    this.parentElement.classList.toggle('open');
    
    // Optional: Close any other dropdowns that may be open
    document.querySelectorAll('.dropdown').forEach(otherDropdown => {
      if (otherDropdown !== this.parentElement) {
        otherDropdown.classList.remove('open');
      }
    });
  });
});

</script>
