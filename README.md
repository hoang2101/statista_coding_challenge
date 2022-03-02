# Statista Coding Challenge
Write a program that prints the numbers from 1 to 100. But for multiples of three print Fizz instead of the number and for the multiples of five print Buzz. For numbers which are multiples of both three and five print FizzBuzz.
### Environment
PHP 7.4.5  
Composer 2.2.7  
Symfony 5.4.5  
PHPUnit 9.5 
### Usage

* Init install: `composer i`
* Play the game (count to 100 by default): `php bin/console fizz-buzz:classic`
* You can also make it count to any number: `php bin/console fizz-buzz:classic --endNumber=YOUR_NUMBER`
* Run the test: `php ./vendor/bin/phpunit`  

Output is printed in the console

----
Time complexity = O(n)