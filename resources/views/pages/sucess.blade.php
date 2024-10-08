<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Success</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Full viewport height */
      margin: 0; /* Remove default margin */
    }
    #lottie-container {
      width: 100%;
      height: 60%;
      margin-bottom: 20px; /* Space between animation and text */
    }
    h1 {
      color: #4CAF50;
      font-size: 2.5em; /* Large font size */
      font-weight: bold; /* Bold text */
      margin: 0; /* Remove default margin */
    }
    p {
      color: #555;
      font-size: 1.2em; /* Slightly larger font size */
      font-weight: bold; /* Bold text */
      margin: 0; /* Remove default margin */
    }
  </style>
</head>
<body>
  <div id="lottie-container"></div>
  <h1>Thank You for Your Payment!</h1>
  <p>Your transaction was successful. We appreciate your business.</p>
  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      lottie.loadAnimation({
        container: document.getElementById('lottie-container'), // The container ID
        renderer: 'svg', // The rendering method
        loop: true, // Set to true if you want the animation to loop
        autoplay: true, // Set to true if you want the animation to start automatically
        path: '{{ asset('images/sucessanimation.json') }}' // Path to your Lottie JSON file
      });
    });
  </script>
</body>
</html>
