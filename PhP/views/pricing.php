<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/globals.css">
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <title>Pricing | Unschooledd</title>
    <meta name="description" content="Welcome to Unschooledd's Pricing Page! We offer flexible plans designed to cater to your unique learning needs. Whether you're an individual learner or part of an educational institution, we have a pricing option that suits you.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.dropdown-content {
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/*  */
.checkbox {
  height: 50px;
  background-color: #d0d0d0;
  border-radius: 30px;
  position: relative;
  color: black;
  overflow: hidden;
}

#checkbox_toggle {
  display: none;
}

.checkbox .toggle {
  width: 85px;
  height: 40px;
  position: absolute;
  border-radius: 30px;
  left: 5px;
  cursor: pointer;
  background: linear-gradient(40deg, #FF0080,#FF8C00 70%);
  transition: 0.4s;
  box-shadow: 0px 0px 3px rgb(255, 255, 20), 0px 0px 5px rgb(255, 255, 20);
}

.checkbox .slide {
  width: 180px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  cursor: pointer;
}

.check:checked + .checkbox .slide .toggle {
  transform: translateX(85px);
  background: linear-gradient(40deg, #8983F7, #A3DAFB 70%);
  box-shadow: -0px -0px 10px #8983F7, -0px -0px 3px #8983F7;
}

.check:checked + .checkbox .slide {
  background-color: #0a1929;
  color: #fff;
}
</style>

<?php include './components/navbar/nav.php';?>

<div class="flex max-w-7xl mx-auto mt-16">
  <p class="text-lg max-w-xl " style="font-family:'Garet'">Whether your time-saving automation needs are large or small, we’re here to help you scale.</p>
  
      <input id="checkbox_toggle" type="checkbox" class="check">
      <div class="checkbox ml-auto">
        <label class="slide" for="checkbox_toggle">
          <label class="toggle" for="checkbox_toggle"></label>
          <label class="text-sm cursor-pointer z-10" for="checkbox_toggle">MONTHLY</label>
          <label class="text-sm cursor-pointer z-10" for="checkbox_toggle">YEARLY</label>
        </label>
      </div>
      
      <div class="dropdown inline-block relative ml-16 max-w-[25%] mr-auto my-auto h-7">
        <span class="cursor-pointer border-2 border-black bg-indigo-50 py-1 px-2">TL <i class="fa-solid fa-chevron-down"></i></span>
        <div class="dropdown-content bg-gray-100 hidden absolute px-4 py-3">
          <button>EUR</button>
          <button>USD</button>
          <button>GBP</button>
        </div>
      </div>
      
    </div>
    <div class="flex max-w-6xl mx-auto my-16">
      <div class="mx-10 font-medium border-2 border-black rounded-xl w-80 px-8" style="font-family: 'Poppins', sans-serif;">
        <p class="text-lg my-6"><span class="text-4xl font-semibold">?? <i class="fa-solid fa-turkish-lira-sign"></i></span> / month</p>
        <h1 class="text-3xl">Starter</h1>
        <p class="text-base my-3">Unleash the power of automation.</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Multi-step Zaps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> 3 Premium Apps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> 2 Users team</p>
      <button class="w-60 mt-24 mb-6 px-14 py-3 rounded-lg lg:rounded-full text-white bg-black hover:bg-emerald-400 focus:outline-none">Choose Plan</button>
    </div>
    
    <div class="mx-10 font-medium border-2 border-black rounded-xl w-80 px-8" style="font-family: 'Poppins', sans-serif;">
      <p class="text-lg my-6"><span class="text-4xl font-semibold">?? <i class="fa-solid fa-turkish-lira-sign"></i></span> / month</p>
      <h1 class="text-3xl">Professional</h1>
      <p class="text-base my-3">Advanced tools to take your work to the next level.</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Multi-step Zaps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Unlimited Premium Apps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> 50 Users team</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Shared Workspace</p>
      <button class="w-60 mt-16 mb-6 px-14 py-3 rounded-lg lg:rounded-full text-white bg-black hover:bg-emerald-400 focus:outline-none">Choose Plan</button>
    </div>
    
    <div class="mx-10 text-white font-medium border-2 border-black rounded-xl w-80 px-8" style="font-family: 'Poppins', sans-serif; background-color: #241427;">
      <p class="text-lg my-6"><span class="text-4xl font-semibold">?? <i class="fa-solid fa-turkish-lira-sign"></i></span> / month</p>
      <h1 class="text-3xl">Company</h1>
      <p class="text-base my-3">Automation plus enterprise-grade features.</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Multi-step Zaps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Unlimited Premium Apps</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Unlimited Users Team</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Advanced Admin</p>
      <p class="my-1"><i class="fa-regular fa-circle-check"></i> Custom Data Retention</p>
      <button class="w-60 mt-9 mb-6 px-14 py-3 rounded-lg lg:rounded-full text-black bg-white hover:bg-emerald-400 focus:outline-none">Choose Plan</button>
    </div>
  </div>
  
  <?php include './components/finalbar/final.php';?>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  
</body>
</html>