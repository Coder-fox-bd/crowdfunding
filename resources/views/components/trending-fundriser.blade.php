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
              <div class="w-80 lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-xl overflow-hidden bg-white my-12 mx-8">
                <a href="#link">
                  <!-- Card Image -->
                  <img src="https://picsum.photos/id/342/2106/1404" alt=""class="overflow-hidden">
                  <!-- Card Content -->
                  <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id commodi illo quisquam eaque ex nostrum totam debitis accusamus iure ullam, alias eos sed consequuntur. Soluta dolorum natus ipsum iste esse.</h3>
                    <div class="flex items-center">
                      {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                      <span class="text-xs ml-2">by Test User</span>
                    </div>
                    <div class="relative pt-1 mt-2">
                      <span><strong>$30000</strong> <span class="text-gray-400">raised out of $100000</span></span>
                      <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                    <div class="flex mt-10">
                      <div class="flex items-center">
                        <svg class="w-4 h-auto" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m479.451 112.98-53.74-53.74c-7.811-7.811-20.474-7.811-28.284 0s-7.811 20.474 0 28.284l12.728 12.728-26.102 26.102c-33.978-28.346-75.292-45.458-119.362-49.441v-36.913h18c11.046 0 20-8.954 20-20s-8.954-20-20-20h-76c-11.046 0-20 8.954-20 20s8.954 20 20 20h18v36.913c-109.724 9.916-198 102.055-198 217.087 0 120.482 97.501 218 218 218 120.482 0 218-97.501 218-218 0-51.511-17.756-100.286-50.354-139.362l26.102-26.102 12.728 12.728c7.81 7.81 20.473 7.811 28.284 0 7.81-7.81 7.81-20.473 0-28.284zm-234.76 359.02c-98.149 0-178-79.851-178-178s79.851-178 178-178 178 79.851 178 178-79.85 178-178 178zm103.923-178c0 11.046-8.954 20-20 20h-83.922c-11.046 0-20-8.954-20-20v-117.675c0-11.046 8.954-20 20-20s20 8.954 20 20v97.675h63.922c11.046 0 20 8.954 20 20z"/></svg>
                        <span class="text-xs ml-2"><strong>17</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Days left</span>
                      </div>
                      <div class="flex items-center ml-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="w-4 h-auto text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
                        <span class="text-xs ml-2"><strong>24534</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Supporters</span>
                      </div>
                    </div>
                    <div class="flex mt-2">
                      <a href="#"
                        class="flex items-center bg-transparent mr-auto hover:bg-blue-500 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-8 border border-blue-500 hover:border-transparent">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="w-4 h-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                        &nbsp;Share</a>
                      <a href="#" class="hover:bg-gray-700 rounded py-2 px-9 font-semibold hover:text-white bg-gray-400 text-gray-100">Donate</a>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-80 lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-xl overflow-hidden bg-white my-12 mx-8">
                <a href="#link">
                  <!-- Card Image -->
                  <img src="https://picsum.photos/id/342/2106/1404" alt=""class="overflow-hidden">
                  <!-- Card Content -->
                  <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id commodi illo quisquam eaque ex nostrum totam debitis accusamus iure ullam, alias eos sed consequuntur. Soluta dolorum natus ipsum iste esse.</h3>
                    <div class="flex items-center">
                      {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                      <span class="text-xs ml-2">by Test User</span>
                    </div>
                    <div class="relative pt-1 mt-2">
                      <span><strong>$30000</strong> <span class="text-gray-400">raised out of $100000</span></span>
                      <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                    <div class="flex mt-10">
                      <div class="flex items-center">
                        <svg class="w-4 h-auto" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m479.451 112.98-53.74-53.74c-7.811-7.811-20.474-7.811-28.284 0s-7.811 20.474 0 28.284l12.728 12.728-26.102 26.102c-33.978-28.346-75.292-45.458-119.362-49.441v-36.913h18c11.046 0 20-8.954 20-20s-8.954-20-20-20h-76c-11.046 0-20 8.954-20 20s8.954 20 20 20h18v36.913c-109.724 9.916-198 102.055-198 217.087 0 120.482 97.501 218 218 218 120.482 0 218-97.501 218-218 0-51.511-17.756-100.286-50.354-139.362l26.102-26.102 12.728 12.728c7.81 7.81 20.473 7.811 28.284 0 7.81-7.81 7.81-20.473 0-28.284zm-234.76 359.02c-98.149 0-178-79.851-178-178s79.851-178 178-178 178 79.851 178 178-79.85 178-178 178zm103.923-178c0 11.046-8.954 20-20 20h-83.922c-11.046 0-20-8.954-20-20v-117.675c0-11.046 8.954-20 20-20s20 8.954 20 20v97.675h63.922c11.046 0 20 8.954 20 20z"/></svg>
                        <span class="text-xs ml-2"><strong>17</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Days left</span>
                      </div>
                      <div class="flex items-center ml-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="w-4 h-auto text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
                        <span class="text-xs ml-2"><strong>24534</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Supporters</span>
                      </div>
                    </div>
                    <div class="flex mt-2">
                      <a href="#"
                        class="flex items-center bg-transparent mr-auto hover:bg-blue-500 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-8 border border-blue-500 hover:border-transparent">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="w-4 h-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                        &nbsp;Share</a>
                      <a href="#" class="hover:bg-gray-700 rounded py-2 px-9 font-semibold hover:text-white bg-gray-400 text-gray-100">Donate</a>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-80 lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-xl overflow-hidden bg-white my-12 mx-8">
                <a href="#link">
                  <!-- Card Image -->
                  <img src="https://picsum.photos/id/342/2106/1404" alt=""class="overflow-hidden">
                  <!-- Card Content -->
                  <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id commodi illo quisquam eaque ex nostrum totam debitis accusamus iure ullam, alias eos sed consequuntur. Soluta dolorum natus ipsum iste esse.</h3>
                    <div class="flex items-center">
                      {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                      <span class="text-xs ml-2">by Test User</span>
                    </div>
                    <div class="relative pt-1 mt-2">
                      <span><strong>$30000</strong> <span class="text-gray-400">raised out of $100000</span></span>
                      <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                    <div class="flex mt-10">
                      <div class="flex items-center">
                        <svg class="w-4 h-auto" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m479.451 112.98-53.74-53.74c-7.811-7.811-20.474-7.811-28.284 0s-7.811 20.474 0 28.284l12.728 12.728-26.102 26.102c-33.978-28.346-75.292-45.458-119.362-49.441v-36.913h18c11.046 0 20-8.954 20-20s-8.954-20-20-20h-76c-11.046 0-20 8.954-20 20s8.954 20 20 20h18v36.913c-109.724 9.916-198 102.055-198 217.087 0 120.482 97.501 218 218 218 120.482 0 218-97.501 218-218 0-51.511-17.756-100.286-50.354-139.362l26.102-26.102 12.728 12.728c7.81 7.81 20.473 7.811 28.284 0 7.81-7.81 7.81-20.473 0-28.284zm-234.76 359.02c-98.149 0-178-79.851-178-178s79.851-178 178-178 178 79.851 178 178-79.85 178-178 178zm103.923-178c0 11.046-8.954 20-20 20h-83.922c-11.046 0-20-8.954-20-20v-117.675c0-11.046 8.954-20 20-20s20 8.954 20 20v97.675h63.922c11.046 0 20 8.954 20 20z"/></svg>
                        <span class="text-xs ml-2"><strong>17</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Days left</span>
                      </div>
                      <div class="flex items-center ml-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="w-4 h-auto text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
                        <span class="text-xs ml-2"><strong>24534</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Supporters</span>
                      </div>
                    </div>
                    <div class="flex mt-2">
                      <a href="#"
                        class="flex items-center bg-transparent mr-auto hover:bg-blue-500 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-8 border border-blue-500 hover:border-transparent">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="w-4 h-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                        &nbsp;Share</a>
                      <a href="#" class="hover:bg-gray-700 rounded py-2 px-9 font-semibold hover:text-white bg-gray-400 text-gray-100">Donate</a>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-80 lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-xl overflow-hidden bg-white my-12 mx-8">
                <a href="#link">
                  <!-- Card Image -->
                  <img src="https://picsum.photos/id/342/2106/1404" alt=""class="overflow-hidden">
                  <!-- Card Content -->
                  <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id commodi illo quisquam eaque ex nostrum totam debitis accusamus iure ullam, alias eos sed consequuntur. Soluta dolorum natus ipsum iste esse.</h3>
                    <div class="flex items-center">
                      {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                      <span class="text-xs ml-2">by Test User</span>
                    </div>
                    <div class="relative pt-1 mt-2">
                      <span><strong>$30000</strong> <span class="text-gray-400">raised out of $100000</span></span>
                      <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                    <div class="flex mt-10">
                      <div class="flex items-center">
                        <svg class="w-4 h-auto" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m479.451 112.98-53.74-53.74c-7.811-7.811-20.474-7.811-28.284 0s-7.811 20.474 0 28.284l12.728 12.728-26.102 26.102c-33.978-28.346-75.292-45.458-119.362-49.441v-36.913h18c11.046 0 20-8.954 20-20s-8.954-20-20-20h-76c-11.046 0-20 8.954-20 20s8.954 20 20 20h18v36.913c-109.724 9.916-198 102.055-198 217.087 0 120.482 97.501 218 218 218 120.482 0 218-97.501 218-218 0-51.511-17.756-100.286-50.354-139.362l26.102-26.102 12.728 12.728c7.81 7.81 20.473 7.811 28.284 0 7.81-7.81 7.81-20.473 0-28.284zm-234.76 359.02c-98.149 0-178-79.851-178-178s79.851-178 178-178 178 79.851 178 178-79.85 178-178 178zm103.923-178c0 11.046-8.954 20-20 20h-83.922c-11.046 0-20-8.954-20-20v-117.675c0-11.046 8.954-20 20-20s20 8.954 20 20v97.675h63.922c11.046 0 20 8.954 20 20z"/></svg>
                        <span class="text-xs ml-2"><strong>17</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Days left</span>
                      </div>
                      <div class="flex items-center ml-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="w-4 h-auto text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
                        <span class="text-xs ml-2"><strong>24534</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Supporters</span>
                      </div>
                    </div>
                    <div class="flex mt-2">
                      <a href="#"
                        class="flex items-center bg-transparent mr-auto hover:bg-blue-500 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-8 border border-blue-500 hover:border-transparent">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="w-4 h-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                        &nbsp;Share</a>
                      <a href="#" class="hover:bg-gray-700 rounded py-2 px-9 font-semibold hover:text-white bg-gray-400 text-gray-100">Donate</a>
                    </div>
                  </div>
                </a>
              </div>
              <div class="w-80 lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-xl overflow-hidden bg-white my-12 mx-8">
                <a href="#link">
                  <!-- Card Image -->
                  <img src="https://picsum.photos/id/342/2106/1404" alt=""class="overflow-hidden">
                  <!-- Card Content -->
                  <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id commodi illo quisquam eaque ex nostrum totam debitis accusamus iure ullam, alias eos sed consequuntur. Soluta dolorum natus ipsum iste esse.</h3>
                    <div class="flex items-center">
                      {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                      <span class="text-xs ml-2">by Test User</span>
                    </div>
                    <div class="relative pt-1 mt-2">
                      <span><strong>$30000</strong> <span class="text-gray-400">raised out of $100000</span></span>
                      <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                    <div class="flex mt-10">
                      <div class="flex items-center">
                        <svg class="w-4 h-auto" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m479.451 112.98-53.74-53.74c-7.811-7.811-20.474-7.811-28.284 0s-7.811 20.474 0 28.284l12.728 12.728-26.102 26.102c-33.978-28.346-75.292-45.458-119.362-49.441v-36.913h18c11.046 0 20-8.954 20-20s-8.954-20-20-20h-76c-11.046 0-20 8.954-20 20s8.954 20 20 20h18v36.913c-109.724 9.916-198 102.055-198 217.087 0 120.482 97.501 218 218 218 120.482 0 218-97.501 218-218 0-51.511-17.756-100.286-50.354-139.362l26.102-26.102 12.728 12.728c7.81 7.81 20.473 7.811 28.284 0 7.81-7.81 7.81-20.473 0-28.284zm-234.76 359.02c-98.149 0-178-79.851-178-178s79.851-178 178-178 178 79.851 178 178-79.85 178-178 178zm103.923-178c0 11.046-8.954 20-20 20h-83.922c-11.046 0-20-8.954-20-20v-117.675c0-11.046 8.954-20 20-20s20 8.954 20 20v97.675h63.922c11.046 0 20 8.954 20 20z"/></svg>
                        <span class="text-xs ml-2"><strong>17</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Days left</span>
                      </div>
                      <div class="flex items-center ml-auto">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" class="w-4 h-auto text-red-600" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
                        <span class="text-xs ml-2"><strong>24534</strong></span>
                        <span class="text-xs text-gray-400 ml-1">Supporters</span>
                      </div>
                    </div>
                    <div class="flex mt-2">
                      <a href="#"
                        class="flex items-center bg-transparent mr-auto hover:bg-blue-500 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-8 border border-blue-500 hover:border-transparent">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="w-4 h-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                        &nbsp;Share</a>
                      <a href="#" class="hover:bg-gray-700 rounded py-2 px-9 font-semibold hover:text-white bg-gray-400 text-gray-100">Donate</a>
                    </div>
                  </div>
                </a>
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