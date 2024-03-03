<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klarenz Jasme</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: url('https://www.chromethemer.com/wallpapers/chromebook-wallpapers/images/960/jdm-chromebook-wallpaper.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      position: relative; /* Set position relative for the body */
    }

    .profile-container {
      position: absolute;
      top: 20%;
      left: 0; /* Set the left edge of the container to the left edge of the viewport */
      transform: translateY(-50%); /* Center vertically */
      text-align: center;
      z-index: 0;
    }

    .profile-frame {
      width: 250px;
      height: 300px;
      border-radius: 20px;
      overflow: hidden;
      margin-bottom: 10px;
      margin-left: 20px; /* Add margin to the left side */
    }

    .profile-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
    }

    .nav-container {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 2;
    }

    .icon-container {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .nav-icon {
      font-size: 24px;
      margin-bottom: 10px;
      color: white;
      cursor: pointer;
    }

    .nav-icon:hover {
      color: #85C7F2;
    }

    .main-heading {
      color: white;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .online-icon {
      margin-top: 5px;
      color: green;
    }

    .date-time-container {
      position: absolute;
      bottom: 20px; /* Adjust bottom position as needed */
      right: 20px; /* Adjust right position as needed */
      color: white;
      font-size: 14px;
      z-index: 1; /* Ensure the date-time container is above other content */
    }
  </style>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  <script defer>
    // JavaScript code here
    // Example class for profile container
    class ProfileContainer {
      constructor(element) {
        this.element = element;
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      // Create an instance of the class
      const profileContainer = new ProfileContainer(document.querySelector(".profile-container"));

      // Example of using an object
      const profile = {
        myName: "Klarenz Jasme",
        studentStatus: "CS student at Asia Pacific College"
      };

      // Accessing object properties
      console.log(profile.myName); // Klarenz Jasme

      // Example function to update main heading
      function updateMainHeading(name, status) {
        const mainHeading = document.querySelector(".main-heading");
        mainHeading.innerHTML = `${name}<br><span>${status}</span>`;
      }

      // Call the function
      updateMainHeading("<?php echo $name; ?>", "<?php echo $jobTitle; ?>");

      // Display ongoing date and time without time zone
      const dateTimeContainer = document.querySelector(".date-time-container");
      function updateDateTime() {
        const currentDate = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false };
        dateTimeContainer.textContent = currentDate.toLocaleDateString('en-US', options);
      }
      setInterval(updateDateTime, 1000); // Update every second
      updateDateTime(); // Initial update
    });

    // Events, Precedence & Conditionals Lesson
    const profileContainerElement = document.querySelector(".profile-container");

    // Example: Change profile container color on mouseover
    profileContainerElement.addEventListener("mouseover", function () {
      profileContainerElement.style.backgroundColor = "#e6e6e6";
    });

    // Example: Change profile container color back on mouseout
    profileContainerElement.addEventListener("mouseout", function () {
      profileContainerElement.style.backgroundColor = "";
    });

    // Strings Lesson
    const profileHeading = document.querySelector(".main-heading");
    const originalText = profileHeading.innerHTML;

    // Add more string manipulations as needed

    // Example of updating navigation links
    const navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(link => {
      link.textContent = link.textContent.toUpperCase(); // Convert to uppercase
    });

    // Example of using Browser BOM to display an alert
    window.onload = function() {
      alert("Welcome to my Personal Website!");
    };
  </script>
</head>
<body>
<!--HTML content goes here -->
<div class="nav-container">
  <div class="icon-container">
    <i class="fas fa-gamepad nav-icon" title="Games"></i>
    <i class="fas fa-film nav-icon" title="Movies"></i>
    <i class="fas fa-music nav-icon" title="Music"></i>
  </div>
</div>

<div class="profile-container">
  <div class="profile-frame">
    <img class="profile-image" src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t39.30808-6/418726352_2916749068464420_8044196981955880205_n.jpg?stp=cp6_dst-jpg&_nc_cat=101&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=UtjTl6WXIXQAX_T3-33&_nc_ht=scontent.fmnl17-1.fna&oh=00_AfByzU3vzDhK4ywFZlZDrHGLib07JBmNyXGey1C-qH5r1w&oe=65E5366F">
  </div>
</div>

<div class="date-time-container">
  <?php
    date_default_timezone_set('Asia/Manila');
    $hour = date('H');
    $greetings = array(
        "Good morning!",
        "Good afternoon!",
        "Good evening!"
    );
    if ($hour < 12) {
        echo $greetings[0]; // Morning
    } elseif ($hour < 18) {
        echo $greetings[1]; // Afternoon
    } else {
        echo $greetings[2]; // Evening
    }
  ?>
  <br>
  <?php echo date("Y-m-d"); ?>
</div>

</body>
</html>
