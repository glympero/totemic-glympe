test-totemic
=======

### Requirements
  - PHP 7
  - Symfony

### composer install
  - Install dependencies.

### php bin/console server:run
   - Start Application

### Check application with Postman

#### 1.
   - http://127.0.0.1:8000/fizzbuzz
   returns
   ```
   {
     "author": "Georgios Lymperopoulos",
     "result": [
        "Number: 1 = 1",
        "Number: 2 = 2",
        "Number: 3 = Fizz",
        "Number: 4 = 4",
        "Number: 5 = Buzz",
        "Number: 6 = Fizz",
        "Number: 7 = 7",
        "Number: 8 = 8",
        "Number: 9 = Fizz",
        "Number: 10 = Buzz",
        "Number: 11 = 11",
        "Number: 12 = Fizz",
        "Number: 13 = 13",
        "Number: 14 = 14",
        "Number: 15 = FizzBuzz",
        "Number: 16 = 16",
        "Number: 17 = 17",
        "Number: 18 = Fizz",
        "Number: 19 = 19",
        "Number: 20 = Buzz"
    ]
   }
   ```

#### 2.
   - http://127.0.0.1:8000/fibonacci
   returns
   ```
   {
     "author": "Georgios Lymperopoulos",
     "fibonacci(5)": [
          0,
          1,
          1,
          2,
          3
      ],
      "fibonacci(10)": [
          0,
          1,
          1,
          2,
          3,
          5,
          8,
          13,
          21,
          34
      ],
      "fibonacci(1)": [
          0
      ]
   }
   ```

#### 3.
   - http://127.0.0.1:8000/magicGetterSetter
   returns
  ```
  [
    "author": "Georgios Lymperopoulos",
    "first_state": "John Doe 20",
    "updated_state": "George Lympe 40"
  ]
  ```
##### MagicGetterSetter - Trait
  - A trait has been chosen because:
    - We can just share the get and set functionality and make it reusable
      without forcing a class to inherit extra functionality that is not needed
    - We would never need to instantiate the magicGetterSetter so using a trait
      instead of class is perfectly valid
  - Any class can use this trait in order to provide pretty properties:
    - $this->age = 20; is much nicer than $this->setAge(20)
    - print $this->age; again much better than $this->getAge();
