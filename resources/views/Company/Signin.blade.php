@extends('front.layouts.master')

@section('main-content')

<section class="bg-[#F1F6FB]">
    <div class="pt-12 pb-12  border-slate-100 border rounded-xl">
        <div class="flex   container    mx-auto shadow-lg w-[600px] h-[600px]">
            <div class="basis-2/6 p-3  bg-[#044EA1]">
                <h1 class="text-4xl  text-white">Sign in</h1>
            </div>
            <div class="basis-4/6 bg-[#FFFFFF] ">
                <h1 class="text-black text-3xl font-bold text-center">Company Sign in</h1>

                <div class=" p-4">            
                    <form  method="POST" action="{{ route('loginSubmit') }}" >
                        @csrf
                         <div class="mt-5 mb-5">
                            <label for="email"> Email*</label>
                            <input id="email"  name="email" type="email"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="email" >
                        </div>

                         <div class="mb-5 mt-5">
                            <label for="password"> password*</label>
                            <input id="password" name="password" type="password"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="password" >
                        </div>

                    
                        
                       <button type="submit" class=" px-4 py-2 bg-[#044EA1] rounded-4xl font-medium text-white w-full">submit</button>
                    </form>
                   <div class="flex my-4 justify-items-start ">
                    <p class="text-[#60758A] font-medium">no account?</p>  <a class="text-[#044EA1] font-bold" href="{{ route('company_ShowSignUp') }}">sign up</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection