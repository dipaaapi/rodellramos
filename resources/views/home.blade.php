@push('title','Rodell Ramos | Welcome Page')
<x-guest-layout>

    <div class="relative text-center">
        <div class="md:my-44 md:w-1/2 mx-auto my-20 w-full md:p-0 p-5">
            <p class="text-aquag font-bold md:text-2xl text-xl">Get Involved</p>
            <p class="text-gray-700 text-base text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices magna at mollis interdum. Aliquam condimentum a ipsum vitae mollis. Etiam velit justo, viverra et lobortis et, blandit posuere justo. Morbi placerat lobortis lectus sed malesuada. Aliquam ut consectetur tortor, quis suscipit leo. Donec ac nibh nec lectus eleifend tristique a vel massa. Nunc mollis porttitor odio eget elementum. Mauris a ligula sed nulla placerat hendrerit. Ut varius diam a nibh scelerisque dictum eu vel elit. Fusce egestas, felis vitae tincidunt feugiat, est eros accumsan purus, porttitor molestie massa tellus nec arcu.</p>
        </div>
        <img src="{{ __('/img/bgflag.png') }}" alt="bg-flag" class="-z-10 absolute left-0 md:-top-40 md:object-cover object-cover top-0 w-full">
    </div>

    <div class="my-20 h-20"></div>

    <div class="md:w-1/2 w-full mx-auto md:p-0 p-5 text-center my-20">
        <p class="text-aquag font-bold md:text-2xl text-xl">Help to make our district be more wonderful!</p>
        <p class="text-aquag text-sm">Join us</p>
        <hr class="bg-aquag h-2 mb-5 md:w-20 mx-auto w-1/4">
        <input type="text" class="border-aquag p-2 my-3 block mx-auto w-1/2" placeholder="ENTER YOUR EMAIL">
        <input type="number" class="border-aquag p-2 my-3 block mx-auto w-1/2" placeholder="ENTER YOUR NUMBER">
        <button class="bg-aquag text-white font-bold uppercase p-2 text-center w-1/2 hover:shadow">submit</button>
    </div>

</x-guest-layout>