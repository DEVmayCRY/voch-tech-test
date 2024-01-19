<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Voch Tech Test

Introdução
Este teste é uma oportunidade para você demonstrar suas habilidades em desenvolvimento de software usando a tecnologia Laravel. O teste consiste em criar um sistema simples de gerenciamento de colaboradores.

#### Instalação
Para instalar o projeto, siga estas etapas:

#### Clone o projeto do GitHub:
git clone https://github.com/DEVmayCRY/voch-tech-test.git
#### Acesse o diretório do projeto:
cd voch-tech-test
#### Instale as dependências:
composer install
#### Configure o banco de dados no arquivo .env conforme suas configurações:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voch_test
DB_USERNAME=root
DB_PASSWORD=

### Execução
#### Para executar o projeto, siga estas etapas:

##### Migre as tabelas do banco de dados:
php artisan migrate
##### Popule o banco de dados com dados de exemplo:
php artisan db:seed
##### Inicie o servidor de desenvolvimento:
php artisan serve
