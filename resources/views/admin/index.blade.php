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


        // loopSlider();






        });


        </script>
        </head>

        <body>
        <div class="sliderAx h-auto pt-4">

        <?php $counter = 0; ?>
        @foreach($events as $event)
       
        @if($event->isFavorite)
        
        <?php $counter++; ?>
        <div id='slider-{{$counter}}' class='container mx-auto'>
        <div class='bg-cover bg-top  h-auto text-white py-24 px-10 object-fill' style='background-image: url({{asset('storage').'/'.$event->image}}); background-position: center;'>

        <p class='font-bold text-sm uppercase'>TedTalk</p>
        <p class='text-3xl font-bold'>{{$event -> title}}</p>
        <p class='text-2xl mb-10 leading-none'>{{$event -> description}}</p>
        <a href='#' class='bg-green-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800'>Select</a>
        
        </div> 
        <br>
        </div>

        @endif
        
        
        
        @endforeach
        

        

        </div>
        <div  class="flex justify-center w-12 mx-auto pb-2">
            <div class="flex">
                <?php $counterButton = 0 ; ?>
                @foreach($events as $event)
                @if($event->isFavorite)
                <?php ++$counterButton; ?>
                <button id="sButton{{$counterButton}}" onclick="sliderButton{{$counterButton}}()" class="bg-green-300 rounded-full w-4 p-2 " ></button>
                @endif
                @endforeach
            </div>
        </div>

        </body>

        </body>
        <div class="py-12">
        <div class="flex justify-end pb-8 max-w-7xl">
        <a href="{{url('/admin/create')}}">
        <button class="uppercase px-8 py-2 rounded bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg ">New event</button>

        </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
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
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only"></span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>@foreach ($events as $event)
                <td class="px-6 py-4 whitespace-wrap w-84">
                <div class="flex items-center w-84">
                <div class="flex-shrink-0 h-20 w-40">
                <a href="{{url('/admin/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">
                <img class="h-20 w-40" src="{{ asset('storage').'/'.$event->image}}" alt="">
                </a>
                    </div>
                    <div class="ml-4">
                    <a href="{{url('/admin/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">{{$event->title}}</a>
                    </div>
                </div>
                </td>
                <td class="px-4 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">{{$event->description}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                {{count($event->users)}} / {{$event->capacity}}
                </span>
                </td>
                <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                {{($event->date))}}
                </td>
                <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="{{url('/admin/edit/'.$event->id)}}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Edit</a>

                </td>
                <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form action="{{ url('/events/'.$event->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" class="bg-white border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline"
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
            {{$events->appends(request()->except('page'))->links()}}
        </div>
        </div>
        </x-app-layout>
