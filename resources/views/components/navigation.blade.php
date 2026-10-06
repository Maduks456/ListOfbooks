<div class="nav">
    @if(request()->is('/'))
        <div class="nav_box">
            <button class="nav_button" @click="Basketopen = !Basketopen">
                Basket 
            </button>
        </div>
    @endif
    <div class="nav_box">
        <a href="/transactions">
            <button class="nav_button" >
                Transactions
            </button>
        </a>
    </div>
    <div class="nav_box">
        <a href="/">
            <button class="nav_button" >
                Catalogue
            </button>
        </a>
    </div>
</div>