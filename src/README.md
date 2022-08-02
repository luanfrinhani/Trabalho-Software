# Projeto de Engenharia de Software

Projeto desenvolvido em Laravel 9.

### Requisitos
* PHP >= 8.0

### Instalação

* Clonar o Projeto
  
* Copie o arquivo `.env.example` para um novo arquivo denominado `.env`</cod>
  
* O próximo paso é definir a chave do projeto com uma string aletória usando o seguinte comando.
    ```
    php artisan key:generate
    ```
  
* Rode o comando abaixo para baixar as dependencias do php. 
    ```
    composer install
    ```

* Crie o banco, por padrão é usado o MySQL

* Adicionar configurações do banco no `.env`

* Rodar o comando abaixo para criar as tabelas e popular o banco de dados
    ```
    php artisan migrate —-seed
    ```

* Para o upload de imagem localmente rodar o comando:
    ```
    php artisan storage:link
    ```

* Para evitar alguma falha ao instalar as dependências do tema, use o comando.
    ```
    npm cache clear --force
    ```

* Instalar as dependências do tema do admin.
    ```
    npm install
    ```

* O próximo comando vai compilar todos os assets (sass, js, media) e copiar para a pasta `/public`.
    ```
    npm run dev
    ```
  
### Identity and ACcess Management (IAM) ###

Esse projeto tem por padrão uma implementação para IAM, essa implementação faz usso o Keycloak


Para fazer uso dessa implementação, você deve.
Adicionar o IAM Web e Api guard no arquivo ```config/auth.php```.
Apenas commente a opção padrão e descomente as configurações do IAM.

```php
        //'web' => [
        //    'driver' => 'session',
        //    'provider' => 'users',
        //],

        //'api' => [
        //    'driver' => 'token',
        //    'provider' => 'users',
        //    'hash' => false,
        //],

        //IAM usar essa configuração
        'web' => [
            'driver' => 'iam-web',
            'provider' => 'users',
        ],
        
        'api' => [
            'driver' => 'iam-api',
            'provider' => 'users',
            'hash' => false,
        ],
```
e mudar as configurações do provider também.
```php
    //'users' => [
    //    'driver' => 'eloquent',
    //    'model' => App\User::class,
    //],

    //IAM usar essa configuração
    'users' => [
        'driver' => 'iam-users',
        'model' => App\UserIAM::class,
    ],
```
No arquivo de rotas ```web.php```.
Comentar as configurações padrão.
```php
//Auth::routes(['register' => false]);
...
//Route::resource('/user', 'System\Admin\UserController', ['as' => 'system']);
```
Descomentar as rotas do IAM.
```php
    Route::get('/login', 'Auth\IAMController@login')->name('login');
    Route::get('/register', 'Auth\IAMController@register')->name('register');
    Route::get('/logout', 'Auth\IAMController@logout')->name('system.get.logout');
    Route::post('/logout', 'Auth\IAMController@logout')->name('logout');
    Route::get('/callback', 'Auth\IAMController@callback')->name('callback');
    ...
    Route::resource('/user', 'System\Admin\UserIAMController', ['as' => 'system']);
    Route::get('/user-search', 'System\Admin\UserIAMController@searchByEmail')
        ->name('system.user.search');
```
E adicionar o middleware ```iam-web``` para proteção das rotas.
```php
Route::middleware('iam-web')->group(function () {...
```
Você pode verificar o usário em uma ou mais roles usando o middleware ```iam-web-can```.

```php
$this->middleware('iam-web-can:manage-something-cool');
//Para várias roles, separe com '|'
$this->middleware('keycloak-web-can:manage-something-cool|manage-something-nice|manage-my-application');
```
Essa middleare funciona procurando por todas as roles no realm, mas pode ser adaptado para procurar pelas 
roles no client.

### Projeto de Software

A arquitetura de software do Projeto Padrão é organizado em três camadas, como mostra a figura abaixo.

![](/ArquiteturaProjeto.png)

Para organizar a camada de Interface com o Usuário e sua comunicação com a Camada de Lógica de Negócio, é usado o padrão MVC (Model-View-Controller). 
Assim, a camada de interface com o usuário contém tanto classes desempenhando o papel de visão, quanto classes desempenhando o papel de controlador. 
Todas as classes do pacote dessa camada que desempenha papel de controladores devem ser nomeadas terminando com o sufixo **Controller**.

Para organizar a camada de Lógica de Negócio, é usado o padrão arquitetônico Camada de Serviço, o qual considera dois tipos de lógico de negócio: 
a Lógica de Domínio, que trata das classes de domínio e são agrupadas no Componente Model, e a Lógica de Aplicação, que se refere à lógica de negócio e tratada pelo Componente Service. 
Uma vez que as classes do pacote service capturam a lógica de aplicação, elas dever ser nomeadas terminando com o sufixo **Service**.

As classes de visão do pacote View podem chamar os métodos básicos das classes do pacote Model (get e set) para montar as interfaces e para criar objetos do pacote Model a serem passados como parâmetro na comunicação com as classes controladoras (pacote Controller).

Por fim, a camada de Gerência de Dados é organizada seguindo o padrão Repositório. 
Objetos dessa camada podem ser acessados por objetos do pacote Service. 
Como os objetos do pacote Service são os responsáveis pela lógica de aplicação, é natural que os mesmos solicitem serviços de persistência.

Explicar o `Base/Service.php` e `Base/DataMaanger.php`

### Pastas do Projeto

Mostrar as pasta dos Services e do DataManager

### Testes

Meta: começar a usar teste no projetos  

###  Contribuições

Contribuições são bem-vindas!

###  Links

* Tema Metronic: [https://metronic.uppersoft.cc](https://metronic.uppersoft.cc/)
