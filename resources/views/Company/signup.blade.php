@extends('front.layouts.master')

@section('main-content')

<section class="bg-[#F1F6FB]">
    <div class="pt-12 pb-12  border-slate-100 border rounded-xl">
        <div class="flex   container    mx-auto shadow-lg w-[600px] h-[600px]">
            <div class="basis-2/6 p-2 bg-[#044EA1]">
                <h1 class="text-4xl  text-white">create your account</h1>
            </div>
            <div class="basis-4/6 bg-[#FFFFFF] ">
                <h1 class="text-black m3-5 text-3xl font-bold text-center">Company Signup</h1>

                <div class=" p-4">
                    {{-- @if($errors->any())
                        @foreach ($errors->all() as $error)
                            {{ $error }}</br>
                        @endforeach
                    @endif

                    @if(session('success'))
                        {{ session('success') }}
                    @endif

                    @if (session('error'))
                        {{ session('error') }}
                        
                    @endif --}}
                    
                    <form  method="POST" action="{{ route('company_registered') }}" >
                        @csrf
                        <div class="mb-3">
                            <label for="companyName"> compny Name*</label>
                            <input id="companyName" name="name" type="text"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="company name"  >
                            @error('name')
                                <p id="name-error" class="text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                         <div class="mb-3">
                            <label for="email"> Email*</label>
                            <input id="email"  name="email" type="email" autocomplete="off" class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="email" >
                        </div>

                         <div class="mb-3">
                            <label for="password"> password*</label>
                            <input id="password" autocomplete="off" name="password" type="password"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="password" >
                        </div>

                         <div class="mb-3">
                            <label for="cpassword">confirm password*</label>
                            <input id="cpassword" autocomplete="off" name="c_password" type="password"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="confirm password" >
                        </div>

                         <div class="mb-3">
                            <label for="phone">mobile number*</label>
                            <input id="phone" name="phone" type="password"  class="w-full p-3 border-slate-100 border rounded shadow-sm" placeholder="phone" >
                        </div>
                        
                       <button type="submit" class=" px-4 py-2 bg-[#044EA1] rounded-4xl font-medium text-white">submit</button>
                    </form>
                   <div class="flex my-4 justify-items-start "><p class="text-[#60758A] font-medium">already have an account?</p>  <a class="text-[#044EA1] font-bold" href="{{ route('company_show_login') }}">sign in</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection