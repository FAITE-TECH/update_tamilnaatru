<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

form {
    background: #ffffff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 30px; /* Added margin-bottom to create space between form and container */
}

form label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 8px;
}

form input[type="text"],
form input[type="number"],
form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    font-family: 'Arial', sans-serif;
}

form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

form button {
    background-color: #1cbbb4;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

form button:hover {
    background-color: ;
}

form button:active {
    background-color: #1cbbb4;
}

form input::placeholder {
    color: #aaa;
}

form input[type="text"],
form input[type="number"] {
    direction: rtl; /* Support Tamil and other RTL languages */
}

@media (max-width: 480px) {
    form {
        padding: 15px 20px;
    }

    form label {
        font-size: 14px;
    }

    form button {
        font-size: 14px;
    }
}
/* General container for each update box */
.update-box {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 10px;
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

/* Adjust container styles for additional spacing */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px; /* Optional: add some padding to the container */
}

</style>


<div class="container" style="display: flex; justify-content: center; align-items: center;">     
    <!-- Left Side -->
    <div class="left-side" id="leftContent">
        <h2 style="text-align: center; font-weight: bold;">பொத்தான்கள்</h2>

        <?php
        // Include the database connection
        include 'connect.php'; // Ensure this file contains your DB connection details

        // Query to fetch the latest uploads
        $sql = "SELECT id, display_name, category_name, image_path, button_position FROM categories";
        $result = $conn->query($sql);

        // Check if any uploads exist
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display each upload dynamically
                echo '<div class="update-box" style="border:none; display: flex; align-items: center;" data-id="' . htmlspecialchars($row['id']) . '">
                <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['display_name']) . '" class="update-photo1"> <!-- Changed title to display_name -->
                <div class="content" style="flex-grow: 1;">
                    <h2 class="updates-header">' . htmlspecialchars($row['category_name']) . '</h2>
                </div>
                <div style="display: flex; gap: 5px;">
                    <form action="button_delete.php" method="GET" style="margin: 0;" onsubmit="return confirmDelete();">
                        <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                        <button type="submit" class="cta-btn" style="background-color:#e74c3c;">delete</button>
                    </form>
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

<script>
    // JavaScript function to display a confirmation dialog
    function confirmDelete() {
        return confirm("இந்தக் பொத்தானை நிச்சயமாக நீக்க விரும்புகிறீர்களா?");
    }
</script>


<form method="POST" action="add_category.php" enctype="multipart/form-data">
    <h2 >பொத்தான்  வடிவமைப்பு</h2>
    <label>பொத்தான் பெயர்:</label>
    <input type="text" name="display_name" required>
    <label>பொத்தான் வகை:</label>
    <input type="text" name="category_name" required>
    <label>பொத்தானுக்குறிய படம்:</label>
    <input type="file" name="image" accept="image/*" required>
    <label> பொத்தானின் நிலை:</label>
    <input type="number" name="button_position" required>
    <button type="submit">பொத்தானை சேர்க்க</button>
</form>
    </div>
</div>



</body>
</html>
