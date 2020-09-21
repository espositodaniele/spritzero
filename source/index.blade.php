@extends('_layouts.master')

@section('body')

<main class="min-h-screen flex flex-col relative">
    <section class="bg-10 py-16">
        <div class="md:py-8 py-4">
            <div class="mb-2 md:mb-2">
                @include('_svgs.logo')
            </div>
        </div>
    </section>
    <section class="bg-white py-10 px-10 relative">
        <div role="presentation" class="absolute inset-0">  
            <div class="hidden lg:block absolute left-0 ml-16 translate-x-4 xl:translate-x-0" style="top:25%">
                <div class="block w-full">
                    <img class="" src="/assets/images/Bandiera.png" alt="bottiglia aperol">
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <p class="text-center text-3xl md:text-4xl text-10 leading-none font-sans uppercase">apri con noi</p>
            <p class="text-center text-5xl md:text-6xl text-10 leading-none font-sans uppercase">il tuo store</p>
        </div>
    </section>
    <section class="bg-20 py-16 min-h-half">
        <div class="container mx-auto">
            <h1 class="text-center text-7xl md:text-8xl text-30 leading-none font-sans uppercase">spritzero</h1>
            <h2 class="text-center text-4xl md:text-5xl text-white leading-none font-sans uppercase">in franchising</h2>
            <div class="text-center w-48 md:w-74 h-1 bg-white text-white mx-auto my-2"></div>
            <p class="text-center text-4xl md:text-5xl text-white leading-none font-sans">Scrivici a:</p>
            <p class="text-center text-3xl md:text-5xl text-white leading-none font-sans hover:underline"><a href="mailto:franchising@spritzero.it">franchising@spritzero.it</a></p>
            
            <p class="text-center text-2xl md:text-3xl text-white leading-none font-sans">seguici sui social</p>
            <div class="md:py-2 py-1 flex justify-center">
                <div class="py-2 px-2">
                    <a class="block flex items-center cursor-pointer" href="https://it-it.facebook.com/spritzeroaperitivoitaliano/">
                        @include('_svgs.facebook')
                    </a>
                </div>
                <div class="py-2 px-2">
                    <a class="block flex items-center cursor-pointer" href="https://www.instagram.com/spritzero/">
                        @include('_svgs.instagram')
                    </a>
                </div>
            </div>
            <h2 class="text-center text-4xl md:text-5xl text-30 leading-none font-sans uppercase">#spritzero</h2>

            <div class="pt-10">
                <div class="flex flex-wrap justify-center text-md text-white font-sans uppercase">
                    <span class="px-2 py-2 font-bold text-30">Napoli</span>
                    <span class="px-2 py-2">Antignano</span>
                    <span class="px-2 py-2">Vomero</span>
                    <span class="px-2 py-2">Colli Aminei</span>
                    <span class="px-2 py-2">San Pasquale</span>
                    <span class="px-2 py-2">Via Chiaia</span>
                    <span class="px-2 py-2">Mergellina</span>
                </div>

                <div class="flex flex-wrap justify-center text-md text-white font-sans uppercase">
                    <span class="px-2 py-2 font-bold text-30">Pomigliano</span>
                    <span class="px-2 py-2">Via Roma</span>
                    <span class="px-2 py-2 font-bold text-30">Salerno</span>
                    <span class="px-2 py-2">Centro Storico</span>
                </div>


                <div class="flex flex-wrap justify-center text-md text-white font-sans uppercase">
                    <span class="px-2 py-2 font-bold text-30">Roma</span>
                    <span class="px-2 py-2">Ponte Milvio</span>
                    <span class="px-2 py-2 font-bold text-30">Torino</span>
                    <span class="px-2 py-2">San Salvario</span>
                    <span class="px-2 py-2 font-bold text-30">Trani</span>
                    <span class="px-2 py-2">Centro Storico</span>
                </div>

            </div>
        </div>
    </section>
</main>


@endsection
