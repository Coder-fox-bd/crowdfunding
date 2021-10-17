<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<main class="relative flex items-center justify-center" x-data="carouselFilter()">
    <div class="inset-0 container grid grid-cols-1">      
        <div class="row-start-2 col-start-1"
           x-show="active == 0"
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="opacity-0 transform scale-90"
           x-transition:enter-end="opacity-100 transform scale-100"
           x-transition:leave="transition ease-in duration-300"
           x-transition:leave-start="opacity-100 transform scale-100"
           x-transition:leave-end="opacity-0 transform scale-90">
          <div class="relative grid grid-cols-1 text-white text-center justify-items-center md:mb-12 z-10">
              <h1 class="text-2xl sm:text-4xl">Trending Fundraisers</h1>
              <p class="text-xl sm:text-2xl text-gray-300">View the fundraisers that are most active right now</p>
          </div>
          <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">  
            <div class="carousel col-start-1 row-start-1 z-20" x-ref="carousel">
              <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                <a href="#">
                    <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="font-normal text-gray-700 mb-3">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                        Read more
                    </a>
                </div>
            </div>
            </div>
          </div>
          <div class="relative grid grid-cols-1 text-white text-center justify-items-center z-10">
              <a href="#" class="border border-teal-500 bg-teal-500 text-white rounded-sm font-bold flex items-center px-1 py-1 mt-2 mb-2 md:mt-0 md:mb-0">
                  View More
                  <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                  <path id="XMLID_11_" d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                      l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                      c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z"/>
                  </svg>
              </a>
          </div>
        </div>      
    </div>
    <svg class="absolute w-full h-auto md:h-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
        <g mask="url(&quot;#SvgjsMask1079&quot;)" fill="none">
            <rect width="1440" height="560" x="0" y="0" fill="rgba(37, 35, 97, 1)"></rect>
            <path d="M 0,234 C 96,207.4 288,102.8 480,101 C 672,99.2 768,240.8 960,225 C 1152,209.2 1344,62.6 1440,22L1440 560L0 560z" fill="rgba(46, 44, 89, 1)"></path>
            <path d="M 0,532 C 96,508.2 288,407.6 480,413 C 672,418.4 768,566.4 960,559 C 1152,551.6 1344,412.6 1440,376L1440 560L0 560z" fill="rgba(37, 35, 97, 1)"></path>
        </g>
        <defs>
            <mask id="SvgjsMask1079">
                <rect width="1440" height="560" fill="#ffffff"></rect>
            </mask>
        </defs>
    </svg>
</main>