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

/* Search Bar Styling */
.search-bar-container {
    margin-top: 0px;
    display: flex;
    justify-content: left;
    gap: 10px;
    width: 100%; /* Ensures it aligns with the content */
}

.search-input {
    padding: 10px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    font-family: 'Tamil Sangam MN', 'Arial', sans-serif;
    outline: none;
}

.search-input:focus {
    border-color: #ff4f5a;
    box-shadow: 0 0 5px rgba(255, 79, 90, 0.5);
}

.search-button {
    padding: 10px 20px;
    background-color: #343a40;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-button:hover {
    background-color: #5f3434;
}

/* Ensuring search results section shows up */
.search-results-container {
      margin-top: 20px;
      padding: 10px;
      background-color: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
      color: #333;
      display: none; /* Hide initially, will be displayed when results are returned */
    }

    .search-results-container h2 {
      font-size: 18px;
      color: #222;
      margin-bottom: 10px;
    }

    .search-results-container p {
      font-size: 16px;
      line-height: 1.5;
      margin: 5px 0;
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
  }
  a:hover,
  a.active {
    background: none;
    color: #fafafa;
  }
  #check:checked~ul {
    left: 0;
  }

  /* Existing CSS remains as is */

/* Add styling for the cross icon */

}


/* Responsive media query code for small screen */





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
            <li><a class="" href="#">முகப்பு</a></li>
            <li><a href="#">கட்டுரைகள்</a></li>
            <li><a href="#">இலக்கியம்</a></li>
            <li><a href="#">பொது அறிவு</a></li>
          
          </ul>
        </nav>


        <section class="small-page">
          <div class="content-container">
            <div class="text-section">
              <h2>"தமிழ் நாற்று வலைத்தள பக்கத்திற்கு வரவேற்கிறோம்"</h2>
              
              <blockquote class="thirukkural">
                "அகர முதல எழுத்தெல்லாம் ஆதி<br>
                பகவன் முதற்றே உலகு"
              </blockquote>
            </div>
            <div class="image-section">
              <img src="images/valluvar-removebg-preview.png" alt="Thiruvalluvar" class="valluvar-img">
            </div>
            <div class="search-bar-container">
              <form method="GET" action="search.php">
                <input type="text" name="query" placeholder="தேடல்..." class="search-input" required>
                <input type="submit" value="தேடு" class="search-button">
              </form>
            </div>
            <div id="searchResults" class="search-results-container"></div>
           

          </div>
         
        </section>
        
        
        
        <!-- slider section >
        <section class="slider_section" style="background-color: #1cbbb4; ">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-md-1">
                    <div class="detail-box">
                      <h1 style="
                        color: #1d2323;
                        font-family: 'Georgia', serif; /* Elegant serif font for the quote */
                        font-size: 30px;
                        line-height: 1.5;
                        text-align: center;
                        padding: 20px;
                        background-color: rgba(255, 255, 255, 0.6); /* semi-transparent background */
                        border-radius: 10px;
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                        max-width: 80%;
                        margin: 0 auto;
                      ">
                        "அறிவுடையார் எல்லாம் உடையார் <br>
                        அறிவிலார் என்னுடைய <br>
                        ரேனும் இலர்"
                      </h1>
                    </div>
                    
                  </div>
                  <div class="offset-md-1 col-md-4 img-container">
                    <div class="img-box">
                      <img src="val-removebg-preview.png" alt="Thiruvalluvar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <end slider section -->
      </div>
  
 

      <div class="container">

        
          <!-- Left Side -->
          <div class="left-side" id="leftContent">
              <h2 style="text-align: center; font-weight: bold;">சமீபத்திய புதிப்பிப்புகள்</h2>
              <?php include 'fetch_latest_uploads.php'; ?>
          </div>
      
      
        <!-- Left Side -->
        <!--div class="left-side" id="leftContent">
          <h2 style="text-align: center; font-weight: bold;">சமீபத்திய புதிப்பிப்புகள்</h2>


          
            <div>
                <img src="images/v.jpg" alt="திருக்குறளில் அரசியல்" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">திருக்குறளில் அரசியல் சிந்தனைகள்</h2>
                    <p>நீதி இலக்கியங்களுள் திருக்குறள் அரசியல் பற்றி பேசும்பொழுது, மொழி, இனம், மதம், நாடு போன்றவற்றைச் சாராமல்...</p>
                    <button>மேலும் வாசிக்க</button>
                </div>
            </div>
            <div>
                <img src="images/siva.jpeg" alt="சிவகார்த்தியுடன் கூட்டணி" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">சிவகார்த்தியுடன் கூட்டணி ? சிவா சொன்ன தகவல்.</h2>
                    <p>இந்நிலையில் சிவா அடுத்ததாக மீண்டும் அஜித்தை வைத்து ஒரு படத்தை இயக்கவுள்ளார் என தகவல் வந்துள்ளது. இதற்கிடையில்...</p>
                    <button>மேலும் வாசிக்க</button>
                </div>
            </div>
            <div>
                <img src="images/ammai1.jpeg" alt="அம்மை அழைப்பு" class="update-photo1">
                <div class="content">
                    <h2 class="updates-header">அம்மை அழைப்பு - சிறுகதை.</h2>
                    <p>கொலை நகரமான டீ எஸ்டேட்' : எரியும் பனிக்காடு புத்தக பின்னணி| My Vikatan · சொர்க்கம்</p>
                    <button>மேலும் வாசிக்க</button>
                </div>
            </div>
        </div-->
    
        <!-- Right Side -->
<div class="right-side" id="updateList">
    <div class="update-box" data-category="திருக்குறள்">
        <img src="images/thiru.jpg" alt="திருக்குறள்" class="update-photo">
        <div class="update-title">திருக்குறள்</div>
    </div>
    <div class="update-box" data-category="சினிமா">
        <img src="images/cine.jpg" alt="சினிமா" class="update-photo">
        <div class="update-title">சினிமா</div>
    </div>
    <div class="update-box" data-category="சிறுகதை">
        <img src="images/books.png" alt="சிறுகதை" class="update-photo">
        <div class="update-title">சிறுகதை</div>
    </div>
    <div class="update-box" data-category="பொது அறிவு">
        <img src="images/brain.png" alt="பொது அறிவு" class="update-photo">
        <div class="update-title">பொது அறிவு</div>
    </div>
</div>


    </div>
    

<!--end category section-->



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
                <li><a href="#" style="color: #fff; text-decoration: none;">முகப்பு</a></li>
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
<!--script>
  // Define content for each update
const updates = {
    1: `
        <div>
            <img src="images/v.jpg" alt="திருக்குறளில் அரசியல்" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">திருக்குறளில் அரசியல் சிந்தனைகள்</h2>
                <p>நீதி இலக்கியங்களுள் திருக்குறள் அரசியல் பற்றி பேசும்பொழுது, மொழி, இனம், மதம், நாடு போன்றவற்றைச் சாராமல்...</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
        <div>
            <img src="images/kat.jpg" alt="திருக்குறள் ஆய்வுக்கட்டுரைகள்" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">திருக்குறள் ஆய்வுக்கட்டுரைகள்</h2>
                <p>திருக்குறள். ஆய்வுக் கட்டுரைகள். தொகுப்பு-II. வெளியீடு : பண்பாட்டலுவல்கள் திணைக்களம்,. கல்வி, பண்பாட்டலுவல்கள்....</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
        <div>
            <img src="images/books.png" alt="திருக்குறளின் நூல்கள்" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">திருக்குறளின் பெருமையை கூறும் நூல்கள்</h2>
                <p>திருக்குறளின் பெருமையை விளக்கும் நூல் திருவள்ளுவமாலை · திருவள்ளுவ மாலை எனும் நூல் திருக்குறளின் பெருமைகளையும்....</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
    `,
    2: `
        <div>
            <img src="images/siva.jpeg" alt="சிவகார்த்திகேயனுடன் கூட்டணி" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">சிவகார்த்திகேயனுடன் கூட்டணி ? சிவா சொன்ன தகவல்.</h2>
                <p> இந்நிலையில் சிவா அடுத்ததாக மீண்டும் அஜித்தை வைத்து ஒரு படத்தை இயக்கவுள்ளார் என தகவல் வந்துள்ளது. இதற்கிடையில்...</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
      <div>
            <img src="images/goat.jpeg" alt="மறுத்த நயன்தாரா" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">விஜய்யின் GOAT படத்தில் நடிக்க மறுத்த நயன்தாரா.</h2>
                <p>  தன் கோட் படத்தில் நடிக்குமாறு சினேகா அல்ல நயன்தாராவிடம் தான் முதலில் கேட்டிருக்கிறார் வெங்கட் பிரபு. அவர்...</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
      <div>
            <img src="images/kang.jpeg" alt="கங்குவா" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">நெகட்டிவிட்டிக்கு தான் ரீச் அதிகம்..கங்குவா.</h2>
                <p>  நெகட்டிவிட்டிக்கு தான் ரீச் அதிகம்..கங்குவா படத்தை பார்த்துவிட்டு சூரி சொன்ன விமர்சனம்...</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>    

        `,
    3: `
        <div>
            <img src="images/nangil.jpg" alt="நாஞ்சில் நாடன் சிறுகதை" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">நாஞ்சில் நாடன் சிறுகதை.</h2>
                <p> நாஞ்சில்நாடன் சிறுகதைகள். கி.ராஜநாராயணன் சிறுகதைகள். ஆனந்த விகடன் லேட்டஸ்ட் சிறுகதைகள்</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
      <div>
            <img src="images/ammai1.jpeg" alt="அம்மை அழைப்பு" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">அம்மை அழைப்பு - சிறுகதை.</h2>
                <p>  கொலை நகரமான டீ எஸ்டேட்' : எரியும் பனிக்காடு புத்தக பின்னணி| My Vikatan · சொர்க்கம்</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div>
      <div>
            <img src="images/apple.jpg" alt="ஆப்பிள் கன்னங்களும்" class="update-photo1">
            <div class="content">
                <h2 class="updates-header">ஆப்பிள் கன்னங்களும் ...அபூர்வ ...</h2>
                <p>  இது 'சிறுகதை விமர்சனப்போட்டி'க்கான கதை. விமர்சனங்கள் வந்து சேர வேண்டிய....</p>
                <button>மேலும் வாசிக்க</button>
            </div>
        </div> 

       `
};

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








</script-->

<script>

// Event listener for update boxes
document.querySelectorAll(".update-box").forEach((box) => {
    box.addEventListener("click", () => {
        const id = box.getAttribute("data-id"); // Get the data-id of the clicked box
        const leftContent = document.getElementById("leftContent");
        leftContent.innerHTML = updates[id]; // Update the left side content
    });
});


const searchForm = document.querySelector('form');
  const resultsContainer = document.getElementById('searchResults');

  // Handle form submission
  searchForm.addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form from submitting and reloading the page

    const query = document.querySelector('.search-input').value;

    // Example search logic (you may want to replace this with actual search functionality)
    if (query) {
      // Example result data (replace with real search results)
      const searchResults = [
        { title: "Search Result 1", description: "Description for result 1" },
        { title: "Search Result 2", description: "Description for result 2" },
      ];

      resultsContainer.innerHTML = '<h2>Search Results:</h2>';
      
      searchResults.forEach(result => {
        resultsContainer.innerHTML += `<p><strong>${result.title}</strong>: ${result.description}</p>`;
      });

      resultsContainer.style.display = 'block';  // Show results container
    } else {
      resultsContainer.style.display = 'none';  // Hide if no query is entered
    }
  });

  //category
  document.addEventListener("DOMContentLoaded", function() {
    // Select all the category buttons
    const updateBoxes = document.querySelectorAll('.update-box');

    // Loop through each category box and add an event listener
    updateBoxes.forEach(box => {
        box.addEventListener('click', function() {
            // Get the category name from the clicked button's update-title
            const category = box.querySelector('.update-title').textContent.trim();
            
            // Call the function to fetch articles based on the selected category
            fetchArticles(category);
        });
    });

    // Function to fetch articles based on category
    function fetchArticles(category) {
        const leftSide = document.querySelector('#updateList'); // Assuming this is where the articles are displayed
        leftSide.innerHTML = '<p>Loading articles...</p>'; // Show loading message while articles are being fetched

        // Send POST request with category data
        fetch('fetch_articles.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ category: category }) // Send category as JSON
        })
        .then(response => response.json())  // Convert the response to JSON
        .then(data => {
            console.log(data); // Log the response to the console
            if (data.error) {
                leftSide.innerHTML = `<p>${data.error}</p>`;  // Display error if no articles found
            } else {
                let articlesHTML = '';
                data.forEach(article => {
                    articlesHTML += `
                        <div class="article">
                            <img src="${article.image_path}" alt="${article.title}" class="article-image">
                            <div class="article-content">
                                <h2>${article.title}</h2>
                                <p>${article.content}</p>
                                <button>Read more</button>
                            </div>
                        </div>
                    `;
                });
                leftSide.innerHTML = articlesHTML;  // Update the left-side content with articles
            }
        })
        .catch((error) => {
            // If there's an error in the fetch, show a message
            leftSide.innerHTML = `<p>Error loading articles. Please try again later.</p>`;
            console.error("Error fetching articles:", error);
        });
    }
});




</script>



  

</body>
</body>

</html>