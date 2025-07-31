  
## To-Do-List

Projeto simples para criação de tarefas!



## Pré-Requisitos

- Xampp
- Composer
- Node.js e npm

## Instalação (Back-end)

1. No git, clone o repositório para a pasta que deseje salvar os arquivos
 1. cd /c/users/...
 2. git clone https://github.com/YuriCabrera/to-do-list-client-serv.git

2. Instale o Composer
 1. composer install
 2. cp.env.exemple .env   -- Configure o arquivo .env caso necessário/ database: laravel
 3. No Xampp inicie o MySQL e acesse admin(phpMySql)
  1.Crie o banco com o mesmo nome configurado no database: laravel
 4. php artisan key:generate
 5. php artisan migrate:fresh --seed    					# Esse comando apaga as tabelas e cria novas existentes
 6. php artisan serve							                #Iniciar servidor


### Instalação (Front-end)

 1. No git, clone o repositório para a pasta que deseje salvar os arquivos
 1. cd /c/users/...
 2. git clone https://github.com/YuriCabrera/to-do-list-client-dev.git
 3. npm install
 4. npm install -g @quasar/cli 						#Instalar o Quasar
 5. quasar dev  								          #Iniciar o servidor



