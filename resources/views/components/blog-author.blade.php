@props(['author'])

<div class="prose prose-lg pb-12 max-w-4xl container mx-auto">
    <div class="bg-gray-50 rounded-md p-4 flex border-gray-200 ">
        <div class="mr-6 w-1/5 text-center">
            <img src="{{$author->avatar}}" class="h-32 w-32 rounded-full p-2 bg-white" alt="">
        </div>
        <div class="flex-1 pt-3">
            <p class="text-lg mt-4 font-semibold underline">By {{$author->name}}</p>
            <div class="text-lg -mt-4">
                {!! $author->bio !!}
            </div>
        </div>
    </div>
</div>

