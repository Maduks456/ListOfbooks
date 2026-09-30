<x-layout>
    <div class="flex" x-data="{
        basket: JSON.parse(localStorage.getItem('basket') || '[]'),
        has(id) { return this.basket.some(b => b.id === id) },
        toggle(book) {
            this.basket = this.has(book.id)
                ? this.basket.filter(b => b.id !== book.id)
                : [...this.basket, { ...book, amount: 1 }]
        }
    }"
    x-init="$watch('basket', v => localStorage.setItem('basket', JSON.stringify(v)))">
    @if (session('success'))
        <h1>{{ session('success') }}</h1>
        <script>localStorage.removeItem('basket')</script>
    @endif
         <div class="grid" >
            @foreach($books as $book)
                <div
                :class="{ 'selected': has({{ $book->id }}) }"
                    @click="toggle({{ Js::from(['id' => $book->id, 'name' => $book->name]) }})">
                    
                    <div>
                        <img src="{{ asset($book->cover) }}" width="150" height="150" alt="{{$book->name}}">
                    </div>
                    <div>
                        {{$book->name}}
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            Basket
            <form method="POST" action="/transactions">
                @csrf
                <ul>
                    <template x-for="b in basket">
                        <li>
                            <span x-text='b.name'></span>
                            <span x-text="b.amount"></span>
                            <input type="number" :name="'amounts[' + b.id + ']'" x-model="b.amount" min=1>
                            <button type="button"  @click="toggle(b)">X</button>
                            <input type="hidden" name="book_ids[]" :value="b.id">
                            
                        </li>
                    </template>
                </ul>
                <label>
                    <input type="radio" name="type" value="withdraw" checked> Withdraw
                </label>
                <label>
                    <input type="radio" name="type" value="sent_back" > Sent Back
                </label>
                <button type="submit">test</button>
            </form>
        </div>
    </div>
</x-layout>