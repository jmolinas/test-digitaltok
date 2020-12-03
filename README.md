Choose ONE of the following tasks.
Please do not invest more than 2-5 hours on this.
Upload your results to a Github Gist, for easier sharing and reviewing.

Thank you and good luck!



## Code to refactor
=================
```
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php
```

## Code to write tests
=====================
```
3) App/Helpers/TeHelper.php method willExpireAt
$ vendor/bin/phpunit unit-tests/TeHelperTests.php
4) App/Repository/UserRepository.php, method createOrUpdate
```




What I expect:

A. A readme with:

1.  Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. How would you have done it. Thoughts on formatting. Logic..
* Code is good and easy to read but can be Improved
* Formatting not All are using PSR2
* Some function needs refactoring


2.  Refactor it if you feel it needs formatting. The more love you put isnto it. The easier for us to asses.
# Booking Repository
* Creating models can be purely saving of models
* Creating Adapter Class to build data
* Separating Response Formating by using Trasformer Classes
* Using User Object instead of userId, user model is accessible in Request Object

Make two commits. First commit with original code. Second with your refactor so we can easily trace changes.

Vänliga hälsningar / Best regards
Virpal Singh