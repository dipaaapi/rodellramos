@push('title','Rodell Ramos | News Page')
<x-guest-layout>

    <div class="container mx-auto text-center my-10">
        <p class="text-aquag font-bold md:text-2xl text-xl uppercase">latest news</p>
    </div>

    <div class="md:w-2/3 w-full mx-auto my-10 gap-3">
        <div class="my-2 p-3">
            <p class="text-2xl text-aquag font-black">Aklanon Health Card</p>
            <p class="text-aquag text-base mb-2">October 12, 2021</p>
            <p class="text-gray-700 text-base mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit </p>
            <a href="{{ __('/projects') }}" class="bg-transparent border-2 border-aquag text-aquag py-2 px-3">Read More</a>
        </div>
        <div class="my-2 p-3">
            <p class="text-2xl text-aquag font-black">Second Project of Aklan</p>
            <p class="text-aquag text-base mb-2">October 13, 2021</p>
            <p class="text-gray-700 text-base mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit </p>
            <a href="{{ __('/projects') }}" class="bg-transparent border-2 border-aquag text-aquag py-2 px-3">Read More</a>
        </div>
    </div>

</x-guest-layout>