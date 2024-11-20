<style> 
.hovunderanime:after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #FF6200;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.hovunderanime:hover:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
</style>

<nav class="mx-2 lg:mx-6 text-xs lg:text-base py-4 flex text-black font-medium">
  <a href="/" class="items-center">
    <img src="images/unstext.png" class="h-7 lg:h-10" alt="Unschooled Logo"> 
  </a>
  <ul class="flex mx-auto my-auto flex-row">
    <li class="hovunderanime inline-block relative">
      <a href="/">Home</a>
    </li>
    <li>
      <img class="mt-1.5 lg:mt-2.5 mx-0.5 lg:mx-1" src="images/circle.png" alt="Little Nav Dot" style="width: 5px;height:5px">
    </li>
    <li class="hovunderanime inline-block relative"> 
      <a href="/about">About</a>
    </li>
    <li>
      <img class="mt-1.5 lg:mt-2.5 mx-0.5 lg:mx-1" src="images/circle.png" alt="Little Nav Dot" style="width: 5px;height:5px">
    </li>
    <li class="hovunderanime inline-block relative">
      <a href="/blog">Blog</a>
    </li>
    <li>
      <img class="mt-1.5 lg:mt-2.5 mx-0.5 lg:mx-1" src="images/circle.png" alt="Little Nav Dot" style="width: 5px;height:5px">
    </li>
    <li class="hovunderanime inline-block relative">
      <a href="/404">Pricing</a>
    </li>
    <li>
      <img class="mt-1.5 lg:mt-2.5 mx-0.5 lg:mx-1" src="images/circle.png" alt="Little Nav Dot" style="width: 5px;height:5px">
    </li>
    <li class="hovunderanime inline-block relative">
      <a href="/contact">Contact</a>
    </li>
  </ul>
    <button onclick="window.location.href='/waitlist'" type="button" class="px-1 py-2 ml-1 lg:px-5 lg:py-2.5 rounded-lg lg:rounded-full border-2 border-black hover:bg-black hover:text-white focus:outline-none focus:ring-4 text-center">
      Join the Waitlist
    </button>
</nav>