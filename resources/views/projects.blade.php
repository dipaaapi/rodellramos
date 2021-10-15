@push('title','Rodell Ramos | News Page')
<x-guest-layout>

    <div class="relative w-full md:h-screen">
        <div class="container mx-auto text-center my-10">
            <img src="{{ __('/img/aklanonhealthcard.png') }}" alt="logo health card" class="mx-auto">
        </div>
    
        <div class="md:w-3/4 w-full md:p-0 p-5 mx-auto md:flex my-10  inline-block gap-3">
            <div class="md:w-1/2 w-full md:p-0 p-3">
                <p class="text-sm text-gray-700 md:text-left text-justify tracking-widest leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque orci et felis iaculis tincidunt. Sed eu justo lectus. Pellentesque felis velit, laoreet a blandit vel, imperdiet sit amet massa. Donec semper faucibus fermentum. Nam ante magna, venenatis non risus quis, interdum porttitor metus. Fusce vitae sodales metus. Mauris euismod leo semper, tincidunt velit elementum, molestie nisl. Fusce et tempor nisi. Fusce vestibulum dignissim mi in sagittis. Phasellus eget nisl sit amet velit bibendum dictum. Donec eleifend massa et ex ornare, efficitur gravida massa tempor. Fusce convallis diam porttitor ipsum efficitur vehicula. Maecenas magna erat, feugiat sed lectus quis, consequat dictum nisl. Fusce luctus viverra mi ut pretium. Vestibulum egestas arcu nec orci scelerisque fringilla quis quis quam.</p>
                <div class="mt-5 flex gap-5">
                    <img src="{{ __('/img/phpera.png') }}" alt="phone pera logo" class="">
                    <img src="{{ __('/img/aimedical.png') }}" alt="ai medical logo" class="">
                    <img src="{{ __('/img/papicares.png') }}" alt="papi cares logo" class="">
                </div>
            </div>
    
            <div class="md:w-1/2 w-full md:p-0 p-5 mx-auto">
                <img src="{{ __('/img/healthcard.png') }}" alt="healthcard" class="object-cover">
            </div>
        </div>
    
        <img src="{{ __('/img/bgisland.png') }}" alt="island" class="w-full absolute left-0 bottom-0 -z-10">
    </div>


</x-guest-layout>