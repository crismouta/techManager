<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <em>{{ __('Lore')}}meets</em>&nbsp;&nbsp;{{('Tech Events') }}
        </h2>
        </x-slot>
        <!-- component -->
        <head>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
        var cont=0;
        function loopSlider(){
        var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-green-400");
            $("#sButton2").addClass("bg-green-400");
        cont=2;

        break;
        }
        case 1:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-green-400");
            $("#sButton1").addClass("bg-green-400");

        cont=0;

        break;
        }
        case 2:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-3").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-green-400");
            $("#sButton3").addClass("bg-green-400");

        cont=3;

        break;
        }
        case 3:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-4").delay(400).fadeIn(400);
            $("#sButton3").removeClass("bg-green-400");
            $("#sButton4").addClass("bg-green-400");

        cont=4;

        break;
        }
        case 4:
        {
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-5").delay(400).fadeIn(400);
            $("#sButton4").removeClass("bg-green-400");
            $("#sButton5").addClass("bg-green-400");

        cont=5;

        break;
        }
        case 5:
        {
            $("#slider-5").fadeOut(400);
            $("#slider-4").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-1").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton5").removeClass("bg-green-400");
            $("#sButton1").addClass("bg-green-400");

        cont=1;

        break;
        }


        }},4000);

        }

        function reinitLoop(time){
        clearInterval(xx);
        setTimeout(loopSlider(),time);
        }



        function sliderButton1(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton1").addClass("bg-green-400");
        reinitLoop(4000);
        cont=1

        }

        function sliderButton2(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton2").addClass("bg-green-400");
        reinitLoop(4000);
        cont=0

        }

        function sliderButton3(){
        $("#slider-5").fadeOut(400);
        $("#slider-4").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton3").addClass("bg-green-400");
        reinitLoop(4000);
        cont=2

        }

        function sliderButton4(){
        $("#slider-5").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-4").delay(400).fadeIn(400);
        $("#sButton5").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton4").addClass("bg-green-400");
        reinitLoop(4000);
        cont=3

        }

        function sliderButton5(){
        $("#slider-4").fadeOut(400);
        $("#slider-2").fadeOut(400);
        $("#slider-1").fadeOut(400);
        $("#slider-3").fadeOut(400);
        $("#slider-5").delay(400).fadeIn(400);
        $("#sButton4").removeClass("bg-green-400");
        $("#sButton3").removeClass("bg-green-400");
        $("#sButton1").removeClass("bg-green-400");
        $("#sButton2").removeClass("bg-green-400");
        $("#sButton5").addClass("bg-green-400");
        reinitLoop(4000);
        cont=4

        }


        $(window).ready(function(){
        $("#slider-5").hide();
        $("#slider-4").hide();
        $("#slider-3").hide();
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-green-400");


        loopSlider();






        });


        </script>
        </head>

        <body>
        <div class="sliderAx h-auto pt-4">

        <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://femtech2019.files.wordpress.com/2019/01/women-in-tech.jpg?w=1137); background-position: center;">

        <p class="font-bold text-sm uppercase">TedTalk</p>
        <p class="text-3xl font-bold">Women in technology</p>
        <p class="text-2xl mb-10 leading-none">A case for positive discrimination</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a>
        <!-- ETIQUETA CON SHOW DE EVENTOS FALTA BIGOTITIOS   <a href="url ('/events/show/'.$event->id)" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a> -->
        </div> <!-- container -->
        <br>
        </div>


        <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://i.ytimg.com/vi/KJ0u8z_8btw/maxresdefault.jpg); background-position: center;">

        <p class="font-bold text-sm uppercase">Masterclass</p>
        <p class="text-3xl font-bold">Agile mindset: nobody expects the Spanish inquisition</p>
        <p class="text-2xl mb-10 leading-none">How to become friends with adversity</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a>

        </div> <!-- container -->
        <br>
        </div>


        <div id="slider-3" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80); background-position: bottom;">

        <p class="font-bold text-sm uppercase">Webinar</p>
        <p class="text-3xl font-bold">Break into Web Development</p>
        <p class="text-2xl mb-10 leading-none">How to get started as a web developer and build solid apps</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a>

        </div> <!-- container -->
        <br>
        </div>



        <div id="slider-4" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)">
        <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Workshop</p>
        <p class="text-3xl font-bold">Laravel 8 for Begginers</p>
        <p class="text-2xl mb-10 leading-none">Life is CRUD(e)</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a>
        </div>
        </div> <!-- container -->
        <br>
        </div>

        <div id="slider-5" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://elporteno.cl/wp-content/uploads/2020/07/Antonio-Gramsci.jpg)">
        <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Aquelarre</p>
        <p class="text-3xl font-bold">Populism: a defense</p>
        <p class="text-2xl mb-10 leading-none">Why all politicians should be populists</p>
        <a href="#" class="bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Select</a>
        </div>
        </div> <!-- container -->
        <br>
        </div>



        </div>
        <div  class="flex justify-center w-12 mx-auto pb-2">
            <div class="flex">
                <button id="sButton1" onclick="sliderButton1()" class="bg-green-300 rounded-full w-4 p-2 " ></button>
                <button id="sButton2" onclick="sliderButton2() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton3" onclick="sliderButton3() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton4" onclick="sliderButton4() " class="bg-green-300 rounded-full w-4 p-2"></button>
                <button id="sButton5" onclick="sliderButton5() " class="bg-green-300 rounded-full w-4 p-2"></button>
            </div>
        </div>

        </body>

        </body>
        <div class="py-12">
        <div class="flex justify-end pb-8 max-w-7xl">
        <a href="{{url('/events/create')}}">
        <button class="uppercase px-8 py-2 rounded bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg ">New event</button>

        </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Event
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Available places
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Dates
                </th>
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only"></span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr> @foreach ($events as $event)
                <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-20">
                <a href="{{url('/events/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">
                <img class="h-10 w-20" src="{{ asset('storage').'/'.$event->image}}" alt=""> 
                </a>
                  </div>
                  <div class="ml-4">
                  <a href="{{url('/events/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">{{$event->title}}</a>
                  </div>
                </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Laravel 8 for Beginners</div>
                <div class="text-sm text-gray-500">{{$event->description}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                    5 / {{$event->capacity}}
                </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                28/09/2021 - 19/10/2021
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="{{url('/events/edit/'.$event->id)}}" class="bg-white text-indigo-600 hover:text-indigo-900">Edit</a>

              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form action="{{ url('/events/'.$event->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                  <input type="submit" class="bg-white text-red-600 hover:text-red-900"
                  onclick="return confirm('Are you sure you want to permanently remove this item?')" value="Delete">
                </form>
              </td>

            </tr>

            </tbody>
            @endforeach

        </table>

        </div>

        </div>

        </div>

        </div>

            </div>
        </div>

        <div class="flex justify-center pt-8">
            {{$events->links()}}
        </div>
        </div>
        </x-app-layout>

        </div>
    </body>
</html>
