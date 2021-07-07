# Biblioteca Online
Este é um pequeno projeto desenvolvido em Symfony 5.3 com uso de banco de dados MySQL.

A sua principal função é realizar login, permitir a criação de livros e vinculação de autores além de utilizar uma API para mostrar o clima.

## Requisitos
- PHP 7.2.5 e acima.
- Docker e docker-compose instalados.

## Instalação
Para instalação deste projeto siga os seguintes passos: 

### 1. Instale e ative o container
Abra seu terminal e digite:

```
docker compose build && docker compose up -d
```

Aguarde a instalação e ativação do mesmo.

### 2. Instale os pacotes utilizando composer

Entre dentro do container de PHP criado e rode o seguinte comando:

```
docker exec -it php bash
```
Ou caso você esteja utilizando Windows utilize o winpty:
```
winpty docker exec -it php bash if window
```

Dentro do container, execute o comando: 
```
composer build
```

Aguarde a instalação dos pacotes.

### 3. Execute as migrations
A fim de criar as tabelas do banco de dados, rode o seguinte comando a partir do container de PHP:

```
symfony console doctrine:migrations:migrate
```

## Uso do sistema
Após a instalação será possível acessar o projeto via a URL http://localhost:8080, o usuário padrão é admin 123456.