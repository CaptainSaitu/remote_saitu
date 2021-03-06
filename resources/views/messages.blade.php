@extends('app')

@section('title', 'messages')


@section('content')

<!-- Navbar -->
<nav class="text-black-200 bg-purple-500 body-font shadow w-full">
  <div class="container flex items-center p-6 mx-auto text-gray-800 capitalize dark:text-gray-300">
      
      <a
      class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0">
      <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
          alt="logo">
      </a>

      <a href="{{ route('dashboard') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Dashboard</a>

      <a href="{{ route('dtrlogs') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">DTR/Logs</a>

      <a href="{{ route('employees') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Employees</a>

      <a href="{{ route('requests') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Requests</a>

      <a href="{{ route('messages') }}" class="text-gray-800 hover:text-gray-800 dark:text-gray-200 border-b-2 border-purple-800 mx-1.5 sm:mx-6">Messages</a>

      <a href="{{ route('payroll') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Payroll</a>

      <a class="lg:ml-20 lg:m border-transparent bg-purple-500 hover:text-purple-300 hover:bg-purple-800 text-gray-800 ml-4 py-2 px-3 rounded-lg">
          Hello, User
      </a>

  </div>
</nav>

<!--Employee List Table -->
<style>
    body{background:white!important;}
</style>
<p class="text-xl text-center font-bold m-5">Messages</p>

<!--Search Bar -->
<div class="col-md-10 offset-md-9">
    <div class="relative md:w-1/5 ">
      <input type="search"
            class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Search...">

        <div class="absolute top-0 left-0 inline-flex items-center p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
        </div>
    </div>
</div>

<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-purple-300 text-gray-800">
  
  
  <tr class="bg-gray-100 border-b border-purple-400">
    <td>
      <button type="button" class="px-4 py-3 bg-purple-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-75 transition-transform">
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
      </button>
    </td>
    <td class="px-4 py-3">LG212387</td>
    <td class="px-4 py-3">John Luelle Gabales</td>
    <td class="px-4 py-3">Pabili po yelo</td>
    <td class="px-4 py-3">10:30 AM August 28, 2021</td>
  </tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
  <td>
    <button type="button" class="px-4 py-3 bg-purple-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-75 transition-transform">
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
    </button>
  </td>
  <td class="px-4 py-3">LG212387</td>
  <td class="px-4 py-3">John Luelle Gabales</td>
  <td class="px-4 py-3">Pabili po yelo</td>
  <td class="px-4 py-3">10:30 AM August 28, 2021</td>
</tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
  <td>
    <button type="button" class="px-4 py-3 bg-purple-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-75 transition-transform">
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
    </button>
  </td>
  <td class="px-4 py-3">LG212387</td>
  <td class="px-4 py-3">John Luelle Gabales</td>
  <td class="px-4 py-3">Pabili po yelo</td>
  <td class="px-4 py-3">10:30 AM August 28, 2021</td>
</tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
  <td>
    <button type="button" class="px-4 py-3 bg-purple-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-75 transition-transform">
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
    </button>
  </td>
  <td class="px-4 py-3">LG212387</td>
  <td class="px-4 py-3">John Luelle Gabales</td>
  <td class="px-4 py-3">Pabili po yelo</td>
  <td class="px-4 py-3">10:30 AM August 28, 2021</td>
</tr> 
<!-- each row -->

@endsection