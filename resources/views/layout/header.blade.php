
    <header class="lg:mx-10 lg:mb-4 font-roboto ">
        <div class="inline-flex justify-between w-full lg:border-b border-gray-sl border-dashed ">

            <nav class="bg-white px-3 py-1">
                <div id="dropdown-wrapper" class="relative">
                    <button onclick="toggleMenu()" class="lg:pt-3 inline-block">
                        <div class="text-gray">
                            <i class="fa-solid fa-bars fa-2x text-gray"></i>
                            <p class="text-2xl text-black tracking-tightest font-black hidden lg:inline-block ">
                                SECTIONS </p>
                        </div>
                    </button>
                </div>
            </nav>

            <div class="text-center text-gray py-1 lg:text-xl lg:pt-5">
                <p class="hidden lg:block">Friday, February 24, 2017</p>
                <p class="h-auto w-full text-center text-black text-2xl mg:py-3 lg:hidden font-bitter"><b> The News </b>
                </p>
            </div>

            <div class="lg:text-right py-1 px-3 lg:py-5 lg:inline-block">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="hidden placeholder:px-4 focus:px-2 focus:outline border-none lg:w-36 lg:h-10 lg:inline-block"
                    type="search" size="20" placeholder="SEARCH">
                <button class="bg-sport hidden lg:inline-block lg:w-24 lg:h-10 "> <a href="{{ route('web.login') }}">Log in</a></button>
            </div>

        </div>

        <div class=" w-full h-auto text-center lg:text-8xl lg:pt-3 lg:inline-block">
            <p class=" mt-5 text-center text-bitter hidden lg:block"><a href="{{ route('web.home')}}"> <b>The News</b> </a></p>
        </div>

        <div class="menu text-center w-full border-t border-b border-gray-sl lg:my-3 lg:py-3 hidden lg:inline-block">
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200 " href="#">World</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Politics</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Business</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Opinion</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Tech</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Science</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Heath</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Sport</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Entertaiment</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200" href="#">Travel</a>
            <a class="px-5 pt-3 text-xl hover:bg-slate-300 border-gray-200 " href="#">More</a>
            <a class="px-5 text-xl hover:bg-slate-300 border-gray-200 float-right text-blue pr-10" href="{{ route('web.category')}}">
                <i class="fas fa-newspaper fa-1x mx-2 text-blue"></i> E-PAPER </a>
        </div>

    </header>
