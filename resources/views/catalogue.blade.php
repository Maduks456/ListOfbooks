<x-layout>
    <div class="flex" x-data="{
        basket: JSON.parse(localStorage.getItem('basket') || '[]'),
        has(id) { return this.basket.some(b => b.id === id) },
        toggle(book) {
            this.basket = this.has(book.id)
                ? this.basket.filter(b => b.id !== book.id)
                : [...this.basket, { ...book, amount: 1 }]
        }
     }">
         @foreach($books as $book)
            <div
            :class="{ 'selected': has({{ $book->id }}) }"
            @click ='toggle({{Js::from(["id" => $book->id, "name" => $book->name]) }})'
            >
                
                <div>
                    <img src="{{ asset($book->cover) }}" width="150" height="150" alt="{{$book->name}}">
                </div>
                <div>
                    {{$book->name}}
                </div>
            </div>
        @endforeach
    </div>

</x-layout>