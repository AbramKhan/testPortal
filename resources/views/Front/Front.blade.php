@extends('front.layouts.master');

@section('main-content')
 <header class=" bg-linear-65 from-[#9fc3e8] to-[#c9d6e3]">
        <div class="container py-30 mx-auto flex items-center ">

            <div>
                <h1 class="font-thin text-4xl text-black">Find your dream job</h1>
                <p class="font-medium ">Are you looking for a job? Find all recent job circular available in Bangladesh
                    and
                    around the globe in one place with easy job application feature. Post your resume or discover
                    valuable
                    career resources on Skill Jobs..</p>
                <form action="">
                    <div class="flex bg-white items-center px-8 py-4">
                        <div class="basis-3/6 ">
                            <span class="relative">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="search" class="outline-none font-thin focus:outline-none"
                                placeholder="search job">
                        </div>
                        <div class="basis-2/6 flex">
                            <div>
                                <i class="fa-solid fa-location-dot bg-white font-thin text-gray-400 "></i>
                            </div>
                            <div class="flex-1 w-full">
                                <input type="search" class="outline-none font-thin focus:outline-none"
                                    placeholder="search job location">
                            </div>
                        </div>
                        <div class="basis-1/6">
                            <button
                                class="bg-[#FF757B] duration-300 w-full ml-3 ease-in-out px-8 font-medium  py-2 rounded-full hover:bg-[#00ADEE] text-white">search</button>

                        </div>
                    </div>
                </form>
                <div class="flex">
                    <strong>popular search:</strong>
                    <span class="text-gray-600">software devloper</span>
                </div>
            </div>

            <div class=" bg-contain bg-no-repeat size-100 bg-[right_0px_top_10px]"
                style="background-image: url('{{ asset('front-dist/images/lady.png') }}') "></div>

        </div>
</header>
@endsection