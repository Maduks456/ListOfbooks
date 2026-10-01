<x-layout>
    <div class="flex" x-data="{
        basket: JSON.parse(localStorage.getItem('basket') || '[]'),
        has(id) { return this.basket.some(b => b.id === id) },
        toggle(book) {
            this.basket = this.has(book.id)
                ? this.basket.filter(b => b.id !== book.id)
                : [...this.basket, { ...book, amount: 1 }]
        },
        openParent: null,
        Basketopen: window.innerWidth > 768
    }"
    @resize.window="Basketopen = window.innerWidth > 768"
    x-init="$watch('basket', v => localStorage.setItem('basket', JSON.stringify(v)))">
    @if (session('success'))
        <h1>{{ session('success') }}</h1>
        <script>localStorage.removeItem('basket')</script>
    @endif
         <div class="grid" >
            @foreach($parentbooks as $book)
                <div
                :class="{ 'selected': has({{ $book->id }}) }"
                    @click="toggle({{ Js::from(['id' => $book->id, 'name' => $book->name]) }})">
                    
                    <div>
                        <img src="{{ asset($book->cover) }}" width="150" height="150" alt="{{$book->name}}">
                    </div>
                    <div>
                        {{$book->name}}
                    </div>
                    @if($book->children->isNotEmpty())
                        <div>
                            <button type="button"  @click.stop="openParent= (openParent === {{$book->id}} ? null: {{$book->id}})">X</button>
                            <div x-show="openParent === {{$book->id}}">
                                <button type="button" @click.stop="openParent = null">Close</button>
                                @foreach ($book->children as $child)
                                    <div
                                    :class="{ 'selected': has({{ $child->id }}) }"
                                    @click.stop="toggle({{ Js::from(['id' => $child->id, 'name' => $child->name]) }})">
                                        <div>
                                            <img src="{{ asset($child->cover) }}" width="150" height="150" alt="{{$child->name}}">
                                        </div>
                                        <div>
                                            {{$child->name}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div>
            <button type="button"  @click="Basketopen = !Basketopen">Basket</button>
            <div x-show="Basketopen === true">
                <form method="POST" action="/transactions">
                @csrf
                <ul>
                    <template x-for="b in basket">
                        <li>
                            <span x-text='b.name'></span>
                            <span x-text="b.amount"></span>
                            <input type="number" :name="'amounts[' + b.id + ']'" x-model.number="b.amount" min=1>
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
    </div>
</x-layout>