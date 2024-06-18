<?php
        // Check if form is submitted
        if (isset($_POST['submit'])) {
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pet = $_POST['pet'];
            $message = $_POST['message'];

            // Save the application data to a file (you can customize this part)
            $file = 'applications.txt';
            $content = "Name: $name\nEmail: $email\nPet: $pet\nMessage: $message\n\n";

            // Append to the file
            if (file_put_contents($file, $content, FILE_APPEND | LOCK_EX)) {
                echo '<p style="color: green;">Application submitted successfully!</p>';
            } else {
                echo '<p style="color: red;">Failed to submit application. Please try again.</p>';
            }
        }
        ?>