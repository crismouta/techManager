<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <em>{{ __('Lore')}}meets</em>&nbsp;&nbsp;{{('Tech Events') }}
        </h2>
    </x-slot>

    <!-- flash message -->
    <div class="flex justify-center pt-8">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <body>
        <div class="sliderAx h-auto pt-4">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth

                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif


    </body>

   
    <div class="py-12">
       
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
                                        <tr>@foreach ($myList as $event)
                                            <td class="px-6 py-4 whitespace-wrap w-92">
                                                <div class="flex items-center w-92">
                                                    <div class="flex-shrink-0 h-16 w-32">
                                                        <a href="{{url('/user/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">
                                                            <img class="h-16 w-32" src="{{ asset('storage').'/'.$event->image}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="ml-4">
                                                        <a href="{{url('/user/show/'.$event->id)}}" class="text-gray-600 hover:text-gray-900">{{$event->title}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">{{$event->description}}</div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <span class="px-4 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                                                    {{count($event->users)}} / {{$event->capacity}}
                                                </span>
                                            </td>
                                            <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{date('d/m/Y', strtotime($event->date))}}
                                            </td>

                                            @if($event->isSubscribed($user) === false)
                                            <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                <a method="GET" href="{{url('/join/'.$event->id)}}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Join</a>

                                            </td>
                                            @endif

                                            @if($event->isSubscribed($user) === true)
                                            <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                <a method="GET" href="{{url('/unsubscribe/'.$event->id)}}" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">Cancel</a>

                                            </td>
                                            @endif

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
     
        </div>
    </div>
</x-app-layout>