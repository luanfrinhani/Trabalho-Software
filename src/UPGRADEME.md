# Projeto Pradão Backend Laravel

### Atualizando para 7.x de 6.x
Trocar 
```
@alert(['type' => session('response')['type']])
    {!! session('response')['message'] !!}
@endalert
```
por
```
<x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
```

Atualize as seguintes dependências em seu arquivo ```composer.json```:
* ```laravel/framework``` para ```^7.0```
* ```nunomaduro/collision``` para ```^4.1```
* ```phpunit/phpunit``` para ```^8.5```
* ```laravel/tinker``` para ```^2.0```
* ```facade/ignition``` para ```^2.0```

Para mais informações sobre o update consulte o link.

[laravel.com/docs/7.x/upgrade](https://laravel.com/docs/7.x/upgrade)
