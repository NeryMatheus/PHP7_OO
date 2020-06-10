<?php
//Gerenciador de Dependencias do PHP
//getcomposer.org
//packgist.org
//Estudado alguns comandos do cmd

/*Visto sobre o servido embutido do PHP{
Para inicializar: php -S localhost: 8080 ou 80
Para parar: CRTL + C
}
 */

/*Composer Init{Comandos feito no cmd e na pasta que deseja colocar o composer
Comandos:
composer init
Package name: treinocomposer/composer
Description[]: Testando composer
Author: Matheus Nery <matheusnery345@gmail.com>
Minimum Stability []: *última versão estável do nosso pacote*
Package Type (e.g. library, project, metapackage, composer-plugin) []:
License []:
Would you like to define your dependencies (require) interactively [yes]? *A partir daqui declaramos as dependências que terá nosso projeto*
Enter the version constraint to require (or leave blank to use the latest version):
Search for a package:
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Do you confirm generation [yes]? yes
Would you like the vendor directory added to your .gitignore [yes]? no
Would you like to install dependencies now [yes]? yes
}
 */

/*
Pasta vendor
- Dentro desta pasta vão ficar todos os pacotes de 3º que utilizar no projeto;

autoload.php
-Fará todo o carregamento automático e dinâmico dos pacotes PHP;

composer.json
- Contém todas as definições e dependências do pacote;

composer.lock
- Contém todas as especificações do pacote
 */

/*
Para instalar ou remvoer outro pacote no composer quando o mesmo ja foi configurado
- Ex de instalar: compeser require agseguro/pagseguro-php-sdk;
- Ex de remover: remover a linha que contem o pacote a ser removido no arquivo composer json e salvar, abrir o cmd na pasta que está o composer que esta usando e digitar composer update
 */
?>