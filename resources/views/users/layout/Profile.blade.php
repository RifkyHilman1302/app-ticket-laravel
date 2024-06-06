@extends('users/pagesUser')

@section('content')
<nav class="relative  flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
      <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
          <li class="text-sm leading-normal">
            <a class="text-white opacity-50" href="javascript:;">Pages</a>
          </li>
          <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Profile</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">Profile</h6>
      </nav>
    </div>
    <li class="flex items-center pl-4 xl:hidden">
        <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
          <div class="w-4.5 overflow-hidden">
            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
            <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
          </div>
        </a>
      </li>
</nav>


{{-- profile --}}
<div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0  shadow-3xl rounded-2xl bg-clip-border">
    <div class="flex flex-wrap  mt-10">
      <div class="flex-none w-auto max-w-full px-3">
        <div class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
          <img src="{{ asset('icons/logo.png') }}" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
        </div>
      </div>
      <div class="flex-none w-auto max-w-full px-3 my-auto">
        <div class="h-full">
          <h5 class="mb-1 dark:text-white">Rifky Hilman</h5>
          <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">Developer</p>
        </div>
      </div>
      <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
        <div class="relative right-0">
          <ul class="relative flex flex-wrap p-1 list-none bg-gray-50 rounded-xl" nav-pills role="tablist">
            <li class="z-30 flex-auto text-center">
              <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link active href="javascript:;" role="tab" aria-selected="true">
                <i class="ni ni-app"></i>
                <span class="ml-2">App</span>
              </a>
            </li>
            <li class="z-30 flex-auto text-center">
              <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-email-83"></i>
                <span class="ml-2">Messages</span>
              </a>
            </li>
            <li class="z-30 flex-auto text-center">
              <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-colors ease-in-out border-0 rounded-lg bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="ml-2">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- profile --}}

{{-- content --}}
    <div class="w-full p-6 mx-auto ">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
              <div class="flex items-center">
                <p class="mb-0 dark:text-white/80">Edit Profile</p>
                <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Settings</button>
              </div>
            </div>
            <div class="flex-auto p-6">
              <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">User Information</p>
              <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                  <div class="mb-4">
                    <label for="username" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Username</label>
                    <input type="text" name="username" value="lucky.jesse" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                  <div class="mb-4">
                    <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email address</label>
                    <input type="email" name="email" value="jesse@example.com" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                  <div class="mb-4">
                    <label for="first name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">First name</label>
                    <input type="text" name="first name" value="Jesse" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                  <div class="mb-4">
                    <label for="last name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Last name</label>
                    <input type="text" name="last name" value="Lucky" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
              </div>
              <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
              
              <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Contact Information</p>
              <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                  <div class="mb-4">
                    <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                    <input type="text" name="address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                    <input type="text" name="city" value="New York" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                    <input type="text" name="country" value="United States" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                  <div class="mb-4">
                    <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal code</label>
                    <input type="text" name="postal code" value="437300" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
              </div>
              <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
              <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">About me</p>
              <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                  <div class="mb-4">
                    <label for="about me" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About me</label>
                    <input type="text" name="about me" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <img class="w-full rounded-t-2xl" src="{{ asset('images/bg-profile.jpg') }}" alt="profile cover image">
            <div class="flex flex-wrap justify-center -mx-3">
              <div class="w-4/12 max-w-full px-3 flex-0 ">
                <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                  <a href="javascript:;">
                    <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" 
                    src="{{ asset('icons/logo.png') }}" alt="profile image">
                  </a>
                </div>
              </div>
            </div>
            <div class="flex-auto p-6 pt-0">
              <div class="mt-6 text-center">
                <h5 class="dark:text-white ">
                  Mark Davis
                </h5>
                <div class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                  <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                  Bucharest, Romania
                </div>
                <div class="mt-2 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                  <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                  Web / Android Developer
                </div>
                <div class="dark:text-white/80">
                  <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                  University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
    {{-- content --}}

@endsection