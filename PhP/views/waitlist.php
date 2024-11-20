<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../style/globals.css">
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <title>Waitlist | Unschooledd</title>
  <meta name="description" content="Join our waitlist for exclusive access to upcoming features, events, and resources. Be the first to experience what's next with Unschooledd.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
  
  <?php 

require "db/config.php";

if(isset($_POST["submit"])){
  $mailu = $_POST["mailuserT"];
  
  $query = "INSERT INTO Emails VALUES('$mailu')";
  mysqli_query($conn,$query);
  echo "
  <script> alert('Thank you for signing up for the waitlist.'); </script>";
    
}
?>


  <div>
    <img class="bg-no-repeat bg-center bg-cover w-full h-full" alt="Unschooledd Girl" src="images/Kiz.png">
    <div class="w-full max-w-xs lg:max-w-lg absolute text-lg lg:text-3xl top-20 lg:top-1/2 mt-12 left-2 lg:left-40 rounded-3xl">
      <form method="POST" action="" class="bg-white shadow-md max-h-11 lg:max-h-20 pl-4" style="border-radius:1.25rem;">
        <input name="mailuserT" id="email" type="email" placeholder="E-mail" class="outline-none focus:outline-none border w-1/2 lg:w-2/3 my-1 lg:my-3 text-gray-700 leading-tight" style="border:none;">
        <button type="submit" name="submit" class="bg-orange-500 text-center font-medium text-white ml-7 lg:ml-8 py-2 lg:py-4 px-7 lg:px-8 rounded" style="border-radius: 1.25rem;font-size: 1.5rem;"> Enter </button>
      </form>
    </div>  
  </div>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
</html>