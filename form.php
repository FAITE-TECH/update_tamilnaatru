<style>
    /* General form styling */
form {
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f8f9fa; /* Light gray background */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

/* Form heading */
form h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #343a40; /* Dark gray */
    font-size: 1.5rem;
}

/* Form group styling */
.form-group {
    margin-bottom: 20px;
}

/* Label styling */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    font-size: 14px;
    color: #5f3434; /* Dark brown */
}

/* Input fields and select dropdown styling */
input[type="text"], 
input[type="file"], 
select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s ease-in-out;
}

/* Focus state for inputs and select dropdown */
input[type="text"]:focus, 
input[type="file"]:focus, 
select:focus {
    border-color: #5f3434; /* Dark brown focus border */
    outline: none;
    box-shadow: 0 0 4px rgba(95, 52, 52, 0.5);
}

/* Submit button styling */
input[type="submit"] {
    display: block;
    width: 100%;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    color: #ffffff; /* White text */
    background-color: #343a40; /* Dark brown button */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

/* Submit button hover effect */
input[type="submit"]:hover {
    background-color:#343a40; /* Slightly darker brown */
}

/* Dropdown option groups */
optgroup {
    font-weight: bold;
    color: #5f3434;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    form {
        padding: 15px;
    }

    input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }

    label {
        font-size: 12px;
    }

    input[type="text"], 
    input[type="file"], 
    select {
        font-size: 12px;
        padding: 8px;
    }
}

</style>



<form action="uploadpdf.php" method="post" enctype="multipart/form-data">


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
        <option value="தொழில்நுட்பம்">தொழில்நுட்பம்</option>
        <option value="அரங்கியல்">அரங்கியல்</option>
        <option value="ஆளுமை">ஆளுமைகள்</option>
    </optgroup>

    <!-- Dropdown group for 'இலக்கியம்' with subcategories -->
    <optgroup label="இலக்கியம்">
        <option value="சிறுகதை">சிறுகதை</option>
        <option value="கவிதை">கவிதை</option>
        <option value="சினிமா">சினிமா</option>
        <option value="பழமை">வரலாறு</option>
        <option value="படைப்பு">படைப்புகள்</option>
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
  <label for="image1">கோப்பினை பதிவேற்றவும்</label>
    <input type="file" name="pdf_file" accept=".pdf">
    <input type="submit" value="பதிவேற்றவும்">
</form>
