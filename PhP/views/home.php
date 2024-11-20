<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style/globals.css">
        <link rel="stylesheet" href="/components//carousel/style.css">
        <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
        <title>Unschooledd</title>
        <meta name="description" content="Unschooledd is a platform providing resources on alternative education approaches. Discover your own learning path and draw inspiration from non-traditional methods of education.">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
<body>
    
    <?php include './components/navbar/nav.php';?>

    <div class='mt-2 lg:mt-10 flex max-w-7xl mx-2 lg:mx-auto'>
        <div data-aos="zoom-in">
            <div class="max-h-48 my-auto">
                <h2 class="mt-3 lg:mt-32 text-lg lg:text-5xl max-w-xs lg:max-w-md text-orange-500 font-extrabold">Control Your Learning Process</h2>
                <p class="text-sm lg:text-3xl mt-4 max-w-xs lg:max-w-3xl">by adding and organizing your <br> recources in our web-app.</p>
            </div>
        </div>
        <img class="w-1/2 h-1/2 ml-auto" src="images/computer.png" alt="Unschooledd Computer" data-aos="zoom-in">
    </div> 
    <img class="mx-auto my-12 h-4 lg:h-12" alt="Down Arrow" data-aos="zoom-in" src="images/Arr.png">
    <div class="bg-orange-500 text-white py-12" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
        <h2 class="mt-2 lg:mt-12 ml-8 lg:mx-auto text-base lg:text-3xl max-w-2xl text-center font-bold">Are you tired of the traditional, one-size-fits-all approach to education?</h2>
        <p class="mx-auto text-xs lg:text-base text-center mt-4 lg:mt-8">Then, take a look where we redefine the educational landscape.</p>

        <div>
            <div class="flex max-w-3xl mx-auto my-12">
                <img class="h-14 w-14 mx-4" src="images/1.png" alt="">
                <p class="max-w-xs">The inefficiency of note-taking apps in the learning process.<br><span class="font-semibold">On the platform, external content can be selected and organized in an orderly manner.</span></p>
                <img class="h-14 w-14 mx-4" src="images/3.png" alt="">
                <p class="max-w-xs">Existing online courses have limited materials.<br><span class="font-semibold">And you don't!</span></p>
            </div>
            <div class="flex max-w-3xl mx-auto my-12">
                <img class="h-14 w-14 mx-4" src="images/2.png" alt="">
                <p class="max-w-xs">Excessive and unorganized recources<br><span class="font-semibold">You can organize and create a learning path from your recources.</span></p>
                <img class="h-14 w-14 mx-4" src="images/plus.png" alt="">
                <p class="max-w-xs">Users can track their and shared people’s learnings.<br><span class="font-semibold">The created documents can be easily shared.</span></p>
            </div>
        </div>
    
    </div>

    <div class="flex my-6 lg:my-32 lg:max-w-5xl mx-4 lg:mx-auto" data-aos="zoom-in">
        <h2 class="text-xl lg:text-5xl max-w-2xl">Visit to learn <br> more about us.</h2> 
        <img class="ml-auto mt-6 h-4 lg:h-12" style="rotate:270deg" alt="Down Arrow" src="images/Arr.png">
        <button onclick="window.location.href='/about'" type="button" class="ml-auto text-xs lg:text-xl rounded-lg lg:rounded-full px-6 lg:px-24 my-0 lg:my-4 text-white bg-orange-500 hover:bg-black focus:outline-none font-medium">About Us</button>
    </div>

    <h2 class="text-xl lg:text-5xl mx-auto max-w-sm text-center my-2 lg:my-12 font-semibold">Our Blog</h2> 
    <?php include './components/carousel/carousel.php';?>

    <div class="flex max-w-sm lg:max-w-5xl mx-auto my-36 lg:mt-44 mb-24 lg:mb-32">
    <img class="h-10 lg:h-1/6" src="images/quot.png" alt="2 Quots" data-aos="zoom-in">
    <p class="text-lg lg:text-4xl mx-auto font-light text-center" data-aos="zoom-in">"Learning is a treasure that follows its <br> owner everywhere."</p>
    <img class="h-10 lg:h-1/6" src="images/quot2.png" alt="2 Quots" data-aos="zoom-in">
    </div>

    <div class="flex font-light max-w-sm lg:max-w-4xl mx-auto" data-aos="zoom-in">
        <div class="max-w-md mr-4 border-2 border-black rounded-xl">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">Our Product</span>    
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4">At <span class="text-orange-600">Unschooledd</span>, our product is designed with a clear vision: to enable efficient self-education for everyone. We recognize that traditional education methods can be inaccessible and costly, and that self-education can be challenging without proper guidance. Our aim is to bridge this gap by providing an easy and effective platform that empowers individuals to take control of their own learning journey and achieve their goals.</p>
            </div>
        </div>
        <div class="max-w-md mr-4 border-2 border-black rounded-xl mr-auto">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">Our Team</span>    
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4"><span class="text-orange-600">Our Team:</span> Ela Bağlama, Elif Engin, Eylül Özten, Işıl Anıl, Tamer Akipek</p>
            </div>
        </div>
    </div>
    <div class="flex font-light mt-1 lg:mt-8 max-w-sm lg:max-w-4xl mx-auto text-xs lg:text-base" data-aos="zoom-in">
        <div class="max-w-md mr-4 border-2 border-black rounded-xl">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">Our Vision</span>    
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4">Our vision is to enable efficient self-education for everyone. Traditional education methods are not always accessible or affordable, and self-education can be hard without guidance. We want to make it easy and effective for everyone to take control of their own learning and achieve their goals. Efficiency is key, so we aim to provide a user-friendly platform that maximizes learners's time. </p>
            </div>
        </div>
        <div class="max-w-md mr-4 border-2 border-black rounded-xl mr-auto">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">Year Founded</span>    
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4"><span class="text-orange-600">Unschooled</span> was founded by Ela Baglama in March 2022.</p>
            </div>
        </div>
    </div>
    <div class="flex font-light mt-1 lg:mt-8 max-w-sm lg:max-w-4xl mx-auto text-xs lg:text-base" data-aos="zoom-in">
        <div class="max-w-md mr-4 border-2 border-black rounded-xl">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">How to Support Us?</span>    
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4">For the development of <span class="text-orange-600">Unschooledd</span>, you can support us in three ways for now: <br> 1. Use Our App <br> 2. Tell Your Community <br> 3. Donate</p>
            </div>
        </div>
        <div class="max-w-md mr-4 border-2 border-black rounded-xl mr-auto">
            <button class="collapsible flex max-w-sm px-2 py-2 lg:px-3 lg:py-6 mx-auto">
                <span class="font-medium">Location</span>
                <i class="fa-solid fa-plus ml-auto mt-1 px-1 rounded-sm"></i>
            </button>
            <div class="content">
            <p class="mb-4"><span class="text-orange-600">Unschooledd</span> has a office in Habitat Yaşam Merkezi, Şişli, İstanbul <br></p>
            </div>
        </div>
    </div>

    <div class="border-2 border-black flex rounded-xl max-w-sm lg:max-w-4xl mx-auto my-2 mx-auto lg:my-8 px-3 lg:px-6 py-4 lg:py-8" data-aos="zoom-in">
    <div class="font-light">
        <p class="text-base lg:text-3xl">Subscribe To Our Newsletter!</p>
    </div>


    <div class="max-w-sm rounded-3xl ml-auto text-2xl border-3">
      <form method="POST" action="" class="bg-white shadow-md pl-4" style="border-radius:1.25rem;">
        <input name="mailuserT" id="email" type="email" placeholder="E-mail" class="outline-none focus:outline-none border w-1/2 text-gray-700 leading-tight" style="border:none;">
        <button type="submit" name="submit" class="bg-emerald-500 text-center text-white rounded py-2 px-4 ml-7" style="border-radius: 1.25rem;">Subscribe</button>
      </form>
    </div> 
    </div>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>

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
    <?php include './components/finalbar/final.php';?>

</body>
</html>