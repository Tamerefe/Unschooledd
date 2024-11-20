<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../style/globals.css">
  <title>404 | Unschooledd </title>
  <meta name="description" content="Oops! It looks like you've stumbled upon a page that doesn't exist. Don't worry, let's get you back on track. Explore our site to find the information you're looking for, or contact our support team for assistance.">
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
  <?php include './components/navbar/nav.php';?>
  <div class="mt-36 mx-auto max-w-2xl">
    <img class="mx-auto my-16" src="images/404.png" alt="">
    <p class="text-center text-3xl garet tracking-wider">This page is unavaible at the moment.</p>
    <div class="max-w-xs mx-auto">
      <button onclick="window.location.href='/'"  type="button" class="px-6 lg:px-16 py-3 my-0 lg:my-16 text-white bg-black garet border-2 border-black hover:bg-white hover:text-black focus:outline-none rounded-full" data-aos="zoom-out">Go To The Homepage</button>
    </div>
  </div>
  
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>
</html>