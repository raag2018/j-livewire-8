    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{route('course', $c->slug)}}">
                <img src="{{$c->image}}" class="rounded-md mb-2">
                <h2 class="text-lg text-gray-600 truncate uppercase">{{$c->name}}</h2>
                <h3 class="text-md text-gray-500">{{$c->excerpt}}</h3>
                <img src="{{$c->user->avatar}}" class="rounded-full mx-auto h-16 w-16">
            </a>
        </div>
