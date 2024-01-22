<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form - Display Data</title>
    <style>
      body {
        font-family: "Arial", sans-serif;
        background-color: white;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .contact-form {
        max-width: 400px;
        width: 100%;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px; /* Tambahkan margin-bottom agar ada jarak antara kedua formulir */
      }

      .contact-form h2 {
        color: #2c3e50;
      }

      .contact-form label {
        display: block;
        margin-bottom: 8px;
        color: #333;
      }

      .contact-form input,
      .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .contact-form .error {
        color: #e74c3c;
        margin-bottom: 16px;
      }

      .contact-form input[type="submit"] {
        background-color: #27ae60;
        color: #fff;
        cursor: pointer;
        border: none;
        padding: 12px 15px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
      }

      .contact-form input[type="submit"]:hover {
        background-color: #219652;
      }

      .contact-form + .contact-form {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
  <div class="contact-form">
      <h2>Contact Data</h2>

      <?php
      // Check if the form is submitted
      if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['name']) && isset($_GET['message'])) {
          // Retrieve submitted data
          $name = htmlspecialchars($_GET['name']);
          $message = htmlspecialchars($_GET['message']);

          // Display the submitted data
          echo '<p><strong>Nama Contact:</strong> ' . $name . '</p>';
          echo '<p><strong>Pesan:</strong> ' . $message . '</p>';
      } else {
          // If the form is not submitted, redirect to the form page
          header("Location: index.html");
          exit();
      }
      ?>

    </div>
  </body>
</html>