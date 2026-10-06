<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of books</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body x-data="{
        basket: JSON.parse(localStorage.getItem('basket') || '[]'),
        has(id) { return this.basket.some(b => b.id === id) },
        toggle(book) {
            this.basket = this.has(book.id)
                ? this.basket.filter(b => b.id !== book.id)
                : [...this.basket, { ...book, amount: 1 }]
        },
        openParent: null,
        openside: null,
        OpenChildren(id, el){
            const rect = el.getBoundingClientRect();
            let spaceright = window.innerWidth - rect.right;
            let spaceleft = rect.left;
            const diff = spaceright - spaceleft;
            if (diff > 150) {
                this.openside = 'left';
            } else if(diff < -150){
                this.openside = 'right';
            }else{
                this.openside = 'middle';
            }
            this.openParent= (this.openParent === id ? null: id)
        },
        Basketopen: false
    }"
    @resize.window="Basketopen = window.innerWidth > 768"
    x-init="$watch('basket', v => {
    localStorage.setItem('basket', JSON.stringify(v));
    if (v.length > 0 && window.innerWidth > 768) {
        Basketopen = true;
    }
    if(v.length <= 0){
        Basketopen = false
    }})">
    <x-navigation></x-navigation>
    {{ $slot }}
</body>
</html>