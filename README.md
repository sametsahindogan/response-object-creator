# response-object-creator

[![GitHub license](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://raw.githubusercontent.com/sametsahindogan/response-object-creator/master/LICENSE)

>This package provides to standardized response objects for your API.

<a><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Nullset.svg/1200px-Nullset.svg.png" width="80"></a>

>One of the important things in an API is that it has a standard response type. This package provides a standard response structure for your API.

## Installation
```bash
composer require sametsahindogan/response-object-creator
```
## Usage

**If you want to return a "success" result;**
```php
// Your array that you want to return as an object. 
 $data = [
        'id' => 1,
        'name' => 'John',
        'surname' => 'Doe'
    ];

// If you use pure PHP;
 return json_encode( new SuccessResult($data) );
    
// If you use Laravel Framework;
 return response()->json( new SuccessResult($data) );

// If you use Symfony Framework;
 return new JsonResponse( new SuccessResult($data) );
```
Output;
```json
{
      "success": true,
      "data": {
          "id": 1,
          "name": "John",
          "surname": "Doe"
      }
}
```
**If you want to return an "error" result;**
```php
// You must create an Error Builder object.
 $errorBuilder = new ErrorBuilder();

// If you use pure PHP;
  return json_encode(new ErrorResult(
             $errorBuilder->title('Error')
                 ->message('Something wrong happened.')
                 ->code(1)
                 ->extra(['You can add some extra messages or etc.'])
         )
     );
    
// If you use Laravel Framework;
 return response()->json(new ErrorResult(
             $errorBuilder->title('Error')
                 ->message('Something wrong happened.')
                 ->code(1)
                 ->extra(['You can add some extra messages or etc.'])
         )
     );

// If you use Symfony Framework;
 return new JsonResponse(new ErrorResult(
             $errorBuilder->title('Error')
                 ->message('Something wrong happened.')
                 ->code(1)
                 ->extra(['You can add some extra messages or etc.'])
         )
     );
```
Output;
```json
{
      "success": false,
      "data": {
          "message": "User does not have the right roles or permissions.",
          "title": "Operation Failed",
          "code": 1,
          "extra": [ 
               "You can add some extra messages or etc."
          ]
      }
}
```
## License
MIT © [Samet Sahindogan](https://github.com/sametsahindogan/laravel-jwtredis/blob/master/LICENSE)
