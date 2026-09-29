<x-layout>
    <div class="flex">
         @foreach($books as $book)
            <div>
                <div>
                    <img src="{{$book->cover}}" width="150" height="150" alt="{{$book->name}}">
                </div>
                <div>
                    {{$book->name}}
                </div>
            </div>
        @endforeach
    </div>
</x-layout>