@push('title','Rodell Ramos | Contacts Page')
<x-guest-layout>

    <div class="md:w-1/2 w-full mx-auto md:p-0 p-5 text-center my-20">
        <p class="text-aquag font-bold md:text-2xl text-xl">Get in Touch!</p>
        <p class="text-aquag text-sm">Contact us</p>
        <hr class="bg-aquag h-2 mb-5 md:w-20 mx-auto w-1/4">
        <p class="text-aquag font-bold md:text-2xl text-xl mt-5">Contact Us</p>
        <p class="text-aquag text-sm mt-3">+63 912 345 6789</p>
        <p class="text-aquag text-sm">(02) 123 4567</p>
        <p class="text-aquag text-sm">aklansupport@email.com</p>
        <input type="text" class="border-aquag p-2 my-3 block mx-auto w-1/2" placeholder="ENTER YOUR EMAIL">
        <input type="number" class="border-aquag p-2 my-3 block mx-auto w-1/2" placeholder="ENTER YOUR NUMBER">
        <button class="bg-aquag text-white font-bold uppercase p-2 text-center w-1/2 hover:shadow">submit</button>
    </div>

    <livewire:main.map />

</x-guest-layout>