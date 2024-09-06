## Installation
```php 
composer install
cp .env.example .env
php artisan key:generate
npm install
```

# Choose A Number
This is a mini game done in Livewire and Laravel. The game is simple, you choose a number between 1 and 255 and the game will show you 8 cards, each car has 128 numbers sorted assending.  You need to say if your number is in that card or not.

At the end, the game will show you the number you choose.

### The concept of the game
The concept of the game is converting your answers of each card to a binary number, then convert this binary number to decimal.

### Example
If you choose 237, the game will show that number in the following cards:
- Card 1: true
- Card 2: false
- Card 3: true
- Card 4: true
- Card 5: false
- Card 6: true
- Card 7: true
- Card 8: true

So the binary number is 11101101, and the decimal number is 237.

Have Fun.

The Code uses:
Laravel 11.22.0
Livewire 3.5.6
Tailwindcss 2.2.19
