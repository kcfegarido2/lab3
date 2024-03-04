<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurt Fegarido's Web Page</title>
    <link rel="stylesheet" href="styles.css">

    <style>

        .toggleBtn {
            display: flex;
            margin: 0 auto;
            margin-top: 20px;
        }

        #learning-goals {
            display: none;
        }
    </style>
</head>

<body>

        <?php
        echo "<p>This mis my PHP Wegpage!</p>"
        ?>
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#contact-info">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact-info">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

    <img id="banner" src="banner.jpg" alt="Banner">
    <h1>
        Personal Information
    </h1>
    <div id="about">

        <div id="description">

            <p>
            <ul>
                <li>
                    <strong>Full Name:</strong> 
                    Kurt Yuri Calzo Fegarido
                </li>
                <li>
                    <strong>Nickname:</strong> 
                    Kurt
                </li>
                <li>
                    <strong>Age:</strong> 
                    21 
                </li>
                <li>
                    <strong>Senior High School Graduated from:</strong> 
                    Asia Pacific College
                </li>
                <li>
                    <strong>Course:</strong> 
                    Bachelor of Science in Information Technology 
                </li>
                <li>
                    <strong>Scholarship:</strong> 
                    None
                </li>
                <li>
                    <strong>Did you choose this course?:</strong> 
                    Yes, because as technology continues to evolve, so is the work related to it. Also, I like the thought of creating something from scratch. Like a website where you code everything from start to finish. 
                </li>
                <li>
                    <strong>IT Experience:</strong> 
                    None
                </li>
                <li>
                    <strong>Hobbies:</strong> 
                    Playing musical instruments, singing, and playing computer games. 
                </li>
                <li>
                    <strong>Expectations:</strong> 
                    I am hoping that at the end of this course, I can easily create a website through the knowledge I’ll learn from the lessons that will be discussed. In conclusion, I would like to be an expert or intermediate HTML, CSS, and JavaScript coder. 
                </li>
            </ul>
            </p>
        </div>
        <img src="profile.jpg" height="240" alt="profile" id="profile">
    </div>

    <h2>Hobbies</h2>
    <div id="hobbies">
        <ul>
            <li>
                Playing musical instruments, singing, and playing computer games.
            </li>
        </ul>
    </div>

    <!-- Add a button to toggle the visibility of the Learning Goals section -->
    <button class="toggleBtn" onclick="toggleHobbies()">Toggle Hobbies</button>

    <h2>Learning Goals</h2>
    <div id="learning-goals">
        <ul>
            <li>
                I’d like to learn all the necessary stuff related to HTML, CSS, and JS. The easier way, and practical way of coding in these languages.
            </li>
        </ul>
    </div>

    <!-- Add a button to toggle the visibility of the Learning Goals section -->
    <button class="toggleBtn" onclick="toggleLearningGoals()">Toggle Learning Goals</button>

    <h2>Life Goals</h2>
    <div id="life-goals">

        <div>
            <ul>
                <li>
                   <strong> Goals in life:</strong> 
                   As of now, after this subject I’d like to have certificates in HTML, CSS, and JS. I’d want to set up my GitHub and be able to start more projects related to Web programming.
                </li>
                <li>
                   <strong> Dream to fulfill:</strong> 
                   To have a job related to IT while being a student. I’d like to start early in this field so that I’ll have a boost of experience when I graduate.
                </li>
            </ul>
        </div>
    </div>

    <!-- Add a button to toggle the visibility of the Learning Goals section -->
    <button class="toggleBtn" onclick="toggleLifeGoals()">Toggle Life Goals</button>

    <div id="footer">
        <span id="social-links">Social Links</span>
        <ul id="footer-links">
            <li>
                <a href="https://www.youtube.com/@kurtfegarido" target="_blank">
                    <button class="youtube-button">
                        YouTube
                      </button>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/kurtfegarido" target="_blank">
                    <button class="facebook-button">
                        Facebook
                      </button> 
                </a>
            </li>
            <li>
                <a href="https://www.tiktok.com/@_kurtfegarido" target="_blank">
                    <button class="tiktok-button">
                        Tiktok
                      </button>  
                </a>
            </li>
        </ul>

        <p class="contact-info">
            Contact: 0915-924-9051
        </p>
    </div>


    <script>
        // JavaScript function to toggle the visibility of the Learning Goals section
        function toggleHobbies() {
            var hobbiesSection = document.getElementById("hobbies");
            hobbiesSection.style.display = (hobbiesSection.style.display === "none") ? "block" : "none";
        }
    </script>

    <script>
        // JavaScript function to toggle the visibility of the Learning Goals section
        function toggleLearningGoals() {
            var learningGoalsSection = document.getElementById("learning-goals");
            learningGoalsSection.style.display = (learningGoalsSection.style.display === "none") ? "block" : "none";
        }
    </script>

    <script>
        // JavaScript function to toggle the visibility of the Learning Goals section
        function toggleLifeGoals() {
            var lifeGoalsSection = document.getElementById("life-goals");
            lifeGoalsSection.style.display = (lifeGoalsSection.style.display === "none") ? "block" : "none";
        }
    </script>

<script>
    function performSearch() {
      // Get the value entered in the search bar
      var searchTerm = document.getElementById('searchBar').value.toLowerCase();

      // Perform your search logic here (replace this with your actual search logic)
      // For demonstration, we'll just show a simple message in the results container
      var searchResultsContainer = document.getElementById('searchResults');
      if (searchTerm.trim() === '') {
        searchResultsContainer.innerHTML = ''; // Clear the results if the search term is empty
      } else {
        searchResultsContainer.innerHTML = 'Search results for: ' + searchTerm;
      }
    }
  </script>
</body>
</html>
