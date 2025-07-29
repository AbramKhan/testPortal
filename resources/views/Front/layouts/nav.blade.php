 <nav class="sticky top-0 shadow p-2.5 bg-white">
        <div class=" flex justify-between items-center">
            <div>
                <a href="{{ route('home') }}"> <img class="w-50" src="{{ asset('front-dist/images/logo.png') }}" alt=""></a>

            </div>

            <div class=" flex justify-center item-center">
                <ul class="list-none">
                    <li class="tansition basis-[12.5%] rounded cursor-pointer mr-2 px-5 py-2 duration-400 hover:bg-[#FF757B] hover:text-white  text-black inline-block mx-6  text-lg">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                     <li class="tansition basis-[12.5%] rounded cursor-pointer mr-2 px-5 py-2 duration-400 hover:bg-[#FF757B] hover:text-white  text-black inline-block mx-6  text-lg">
                        <a href="">brows job</a>
                    </li>
                   
                     <li class="tansition basis-[12.5%] rounded cursor-pointer mr-2 px-5 py-2 duration-400 hover:bg-[#FF757B] hover:text-white  text-black inline-block mx-6  text-lg">
                        <a href="">about us</a>
                    </li>

                    <li id="login" class="text-black cursor-pointer inline-block login mx-6 font-thin  text-l">
                        <p>login </p>
                    </li>
                    <li class="text-black inline-block mx-6 font-thin  text-l">
                        <a href="">registration </a>
                    </li>
                    <li
                        class="bg-[#FF757B] duration-300  ease-in-out px-5 py-2 rounded-full hover:bg-[#00ADEE] focus:outline-2 focus:outline-offset-2 focus:outline-violet-500 active:bg-violet-700 text-white inline-block mx-6  text-l">
                        <a href="">Membership </a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div id="loginPageShow" class="ease-in relative ml-270 hidden bg-[#FFFFFF]  ">
        
            <div class="flex text-center absolute  ">
               
                     <div class="basis-3/6  h-55 bg-[#034EA1] p-3">
                    <h2 class="font-medium text-white">User login</h2>
                    <a href="" class="btn mt-3.5 bg-amber-200 block rounded-full  my-3 px-8 py-2">sign in</a>

                    <a href="" class="text-white">create an account</a>
                </div>
                <div class="basis-3/6 h-55 p-3  bg-[#00ADEE]">
                    <h2 class="font-medium text-white">Company login</h2>
                    <a href="{{ route('company_show_login') }}" class="btn mt-3.5 bg-amber-200  my-3 block rounded-full px-8 py-2">sign in</a>
                     <a href="{{ route('company_ShowSignUp') }}" class="text-white">create an account</a>
                </div>
              
            </div>
        
    </div>