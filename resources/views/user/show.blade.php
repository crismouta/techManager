<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Event Details') }}
    </h2>
  </x-slot>

  <!-- component -->
  <div class="flex justify-between m-6">
    <div class="flex flex-col h-full w-4/5 mx-auto bg-green-100 rounded-lg">
      <img class="rounded-lg rounded-b-none" src="{{asset('storage').'/'.$event->image}}" alt="thumbnail" loading="lazy" />
      <div class="flex justify-between -mt-4 px-4">
        <span class="inline-block ring-4 bg-green-500 ring-gray-800 rounded-sm text-sm font-medium tracking-wide text-gray-100 px-3 pt-0.5">TED Talk</span>
        <span class="flex h-min space-x-1 items-center rounded-full text-gray-400 bg-gray-800 py-1 px-2 text-xs font-medium">
          <!--<svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-blue-500"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>-->
          
              @if(count($event->users) >= $event->capacity)
                <p class="text-red-500 font-semibold text-xs">
                  Full
                </p>
              @endif
              @if(count($event->users) < $event->capacity)
                <p class="text-green-500 font-semibold text-xs">
                  {{count($event->users)}} / {{$event->capacity}}
                </p>
              @endif
          
        </span>
      </div>
      <div class="py-2 px-4">
        <h1 class="text-xl font-medium leading-6 tracking-wide text-black">
          <a href="blog/detail">{{$event->title}}</a>
        </h1>
      </div>
      <div class="px-4 space-y-2">
        <p class="text-gray-600 font-normal leading-5 tracking-wide">
          {{$event->description}}
        </p>
      </div>
      <div class="flex flex-row items-end h-full w-full px-4 mt-4">
        <div class="flex border-t border-gray-700 w-full py-4">
          <div class="flex items-center space-x-3 border-r border-gray-700 w-full">
            <img class="object-cover h-14 w-14 h-8 border-2 border-white rounded-full" src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/92956305_2657214634604682_7735388051743965184_n.png?_nc_cat=103&ccb=1-3&_nc_sid=174925&_nc_ohc=RWyJbYkX2VYAX-FEsfA&_nc_ht=scontent-mad1-1.xx&oh=53f42958e8949b64f900ef839e384489&oe=60E7AB36" alt="profile users" loading="lazy" />
            <div class="">
              <p class="text-sm font-semibold tracking-wide text-black">
                Author
              </p>
              <p class="text-xs font-light tracking-wider text-gray-600">
                {{date('d/m/Y h:i A', strtotime($event->date))}}
              </p>
            </div>
          </div>

          @if($event->isSubscribed($user)===false && count($event->users) < $event->capacity)
          <div class="flex items-center flex-shrink-0 px-2">
            
            <div class="flex items-center space-x-1 text-gray-400">
              <a href="{{url('/join/'.$event->id)}}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Join</a>
            </div>
            @endif

            @if($event->isSubscribed($user)===true && count($event->users) < $event->capacity)
            <div class="flex items-center space-x-1 text-gray-400">
              <a href="{{url('/unsubscribe/'.$event->id)}}" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">Cancel</a>
            </div>
            @endif



          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
</x-app-layout>