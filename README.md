## teste-php-api-sodresantoro
# Sodre Santoro - Teste API em PHP# teste-php-api-sodresantoro

## Setup backend

```

crie uma base de dados mysql, por exemplo com o nome 'sodresantoro'

importe os arquivos .sql que estão no diretório mysql

acesse o diretório 'backend' 
$ cd backend/

e instale os pacotes
$ composer install

abra o arquivo .env e altere os valores das constantes:

DB_DATABASE=nome do seu banco de dados criado 
DB_USERNAME=seu usuario mysql
DB_PASSWORD=sua senha mysql

Para rodar o backend:
$ php artisan serve

http://127.0.0.1:8000
```

## Setup frontend

```
acesse o diretório 'frontend' 
$ cd frontend/

e instale os pacotes
$ npm install

Para rodar o frontend:
$ npm run serve 

http://localhost:8080/
```