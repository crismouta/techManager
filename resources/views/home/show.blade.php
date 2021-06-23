<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <!-- component -->
<div class="flex justify-between m-6">
  <div class="flex flex-col h-full w-4/5 mx-auto bg-green-100 rounded-lg">
          <img
            class="rounded-lg rounded-b-none"
            src="{{asset('storage').'/'.$event->image}}"
            alt="thumbnail"
            loading="lazy"
          />
          <div class="flex justify-between -mt-4 px-4">
            <span
              class="inline-block ring-4 bg-green-500 ring-gray-800 rounded-sm text-sm font-medium tracking-wide text-gray-100 px-3 pt-0.5"
              >TED Talk</span
            >
            <span
              class="flex h-min space-x-1 items-center rounded-full text-gray-400 bg-gray-800 py-1 px-2 text-xs font-medium"
            >
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
              <p class="text-green-500 font-semibold text-xs">
                5 / {{$event->capacity}}
              </p>
            </span>
          </div>
          <div class="py-2 px-4">
            <h1
              class="text-xl font-medium leading-6 tracking-wide text-black"
            >
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
              <div
                class="flex items-center space-x-3 border-r border-gray-700 w-full"
              >
                <img
                  class="object-cover h-14 w-14 h-8 border-2 border-white rounded-full"
                  src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.6435-9/92956305_2657214634604682_7735388051743965184_n.png?_nc_cat=103&ccb=1-3&_nc_sid=174925&_nc_ohc=RWyJbYkX2VYAX-FEsfA&_nc_ht=scontent-mad1-1.xx&oh=53f42958e8949b64f900ef839e384489&oe=60E7AB36"
                  alt="profile users"
                  loading="lazy"
                />
                <div class="">
                  <p class="text-sm font-semibold tracking-wide text-black">
                    Author
                  </p>
                  <p class="text-xs font-light tracking-wider text-gray-600">
                    08/12/2021
                  </p>
                </div>
              </div>
              <div class="flex items-center flex-shrink-0 px-2">
                <div class="flex items-center space-x-1 text-gray-400">
                <a href="{{ route('login') }}" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Join</a>


                </div>
              </div>
            </div>
          </div>
        </div>
</div>

    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!<form action="{{ url('/events/edit/'.$event->id)}}" method="post" enctype="multipart/form-data"> -->
                <!-- <div class="flex flex-col">
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
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-20">
                    <img class="h-10 w-20" src="{{asset('storage').'/'.$event->image}}" alt="">   <!-Copiar y pegar el <img> en el edit.blade para que aparezca -->
                  <!-- </div>
                  <div class="ml-4">
                  <div class="text-gray-600">{{$event->title}}</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-500">Life is CRUD(e)</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  12/20
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                28/09/2021 - 19/10/2021
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                 <button class="uppercase px-8 py-2 rounded bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg ">Join</button>

               <!- <a href="{{url('/events/edit/'.$event->id)}}" class="bg-white text-indigo-600 hover:text-indigo-900">Edit</a>

              </td>-->
              <!--td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
               <!- <form action="{{ url('/events/'.$event->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                  <input type="submit" class="bg-white text-red-600 hover:text-red-900"
                  onclick="return confirm('Are you sure you want to permanently remove this item?')" value="Delete">
                </form>-->
              <!--</td>

            </tr>

          </tbody>

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
                </form>
                </div>
            </div>
        </div>-->
    </div>
</x-app-layout>
