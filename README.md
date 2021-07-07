# Biblioteca Online
Este � um pequeno projeto desenvolvido em Symfony 5.3 com uso de banco de dados MySQL.

A sua principal fun��o � realizar login, permitir a cria��o de livros e vincula��o de autores al�m de utilizar uma API para mostrar o clima.

## Requisitos
- PHP 7.2.5 e acima.
- Docker e docker-compose instalados.

## Instala��o
Para instala��o deste projeto siga os seguintes passos: 

### 1. Instale e ative o container
Abra seu terminal e digite:

```
docker compose build && docker compose up -d
```

Aguarde a instala��o e ativa��o do mesmo.

### 2. Instale os pacotes utilizando composer

Entre dentro do container de PHP criado e rode o seguinte comando:

```
docker exec -it php bash
```
Ou caso voc� esteja utilizando Windows utilize o winpty:
```
winpty docker exec -it php bash if window
```

Dentro do container, execute o comando: 
```
composer build
```

Aguarde a instala��o dos pacotes.

### 3. Execute as migrations
A fim de criar as tabelas do banco de dados, rode o seguinte comando a partir do container de PHP:

```
symfony console doctrine:migrations:migrate
```

## Uso do sistema
Ap�s a instala��o ser� poss�vel acessar o projeto via a URL http://localhost:8080, o usu�rio padr�o � admin 123456.