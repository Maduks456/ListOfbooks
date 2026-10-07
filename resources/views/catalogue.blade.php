<x-layout>
    <div>
    @if (session('success'))
    <div class="alert success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  
        <strong>{{ session('success') }}</strong>
        <script>localStorage.removeItem('basket')</script>
    </div>
    @endif
        <div class="basket" >
            <div class="basket_panel" x-show="Basketopen === true">
                <div class="basket_panel_inner" >
                    <form method="POST" action="/transactions">
                    @csrf
                    <p x-show="basket.length === 0">You're basket is empty</p>
                    <div class="basket_box" x-show="basket.length > 0">
                        <ul>
                            <template x-for="b in basket">
                                <li>
                                    <div class="basket_book">
                                        <div class="basket_book_title">
                                            <span x-text='b.name'></span>
                                        </div>
                                        <div class="basket_book_bottom">
                                            <div class="basket_book_amount">
                                                <label>
                                                    Amount: <input type="number" :name="'amounts[' + b.id + ']'" x-model.number="b.amount" min=1>
                                                </label>
                                            </div>
                                            <div class="basket_book_button_menu">
                                                <button class="basket_book_button" type="button"  @click="toggle(b)">X</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="book_ids[]" :value="b.id">    
                                    </div>   
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
                    <div class="bottom_basket" x-show="basket.length > 0">
                        <div class="bottem_basket_type">
                            <div>
                                <label>
                                    <input type="radio" name="type" value="withdraw" checked> Withdraw
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="type" value="sent_back" > Sent Back
                                </label>
                            </div>
                        </div>
                        <div class="bottom_basket_button">
                            <button class="basket_button" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
         <div class="book_grid" >
            @foreach($parentbooks as $book)
                <div class="book"
                    :class="{ 'selected': has({{ $book->id }}) }"
                    @click="toggle({{ Js::from(['id' => $book->id, 'name' => $book->name]) }})">
                    <div class="book_cover">
                        <img class="cover_picture" src="{{ asset($book->cover) }}" width="152" height="152" alt="{{$book->name}}">
                    </div>
                    <div class="book_title">
                        {{$book->name}}
                    </div>
                    @if($book->children->isNotEmpty())
                        <div>
                            <button class="book_button" type="button"  @click.stop="OpenChildren({{$book->id}}, $el)">Book collection</button>
                            <div class="children_book_menu" :class="{'open_left': openside === 'left', 'open_right': openside === 'right', 'open_middle': openside === 'middle','selected': has({{ $book->id }})}"  x-show="openParent === {{$book->id}}">
                                <button class="child_close_button" type="button" @click.stop="openParent = null">X</button>
                                @foreach ($book->children as $child)
                                    <div class="child_book"
                                    :class="{ 'selected': has({{ $child->id }}) }"
                                    @click.stop="toggle({{ Js::from(['id' => $child->id, 'name' => $child->name]) }})">
                                        <div class="book_cover">
                                            <img class="cover_picture" src="{{ asset($child->cover) }}" width="100" height="100" alt="{{$child->name}}">
                                        </div>
                                        <div class="child_book_title">
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
    </div>
</x-layout>