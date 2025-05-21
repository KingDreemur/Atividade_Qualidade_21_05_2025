<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Sobre o Projeto

Este projeto foi desenvolvido especificamente com propósito educativo.
O propósito inicial é o aprendizado básico sobre o uso da ferramenta PhPUnit aplicado em um projeto simples em Laravel.

Este projeto contém 2 CRUDs básicos sendo eles: Pessoa e Produto.

## Rotas disponíveis

Considerando o propósito do projeto descrito acima, existem somente 2 rotas, ambas sem direcionamento para a outra. São elas:

- **/pessoas**
- **/produtos**

## Comandos interessantes para possíveis dificuldades

- **php artisan migrate**
- **php artisan serve**
- **php artisan tinker**
- **php artisan test**
- **php artisan test --filter=PessoaTest**
- **composer dump-autoload**
- **php artisan key:generate**
- **php artisan migrate:refresh**

## Ordem dos comandos e possíveis dificuldades
Inicialmente é necessário fazer o clone do repositório utilizando o comando **git clone**

O segundo passo é fazer a instalação das dependências necessárias utilizando: composer install

Após concluido a instalação, é aconselhavel verificar as pastas: 

- **/storage/framework/cache**
- **/storage/framework/views**
- **/storage/framework/sessions**
- **/storage/framework/testing**

Caso estas pastas não estejam criadas, será necessário criá-las.

Uma alternativa para este passo é reinstalar o laravel utilizando o comando **composer create-project laravel/laravel nome_do_projeto** e em seguida copiar os arquivos do repositório para dentro da pasta do projeto.

Caso seja escolhido a primeira opção (criar os diretórios) fazer uma cópia do arquivo **.env.example** e renomeá-lo somente para **.env**

Para as configurações do **.env** verificar principalmente as conexções de banco. Para este projeto será necessário o uso do mysql

O próximo passo será criar o banco de dados e utilizar o nome para configuração do **.env**

Em seguida é necessário executar o comando php artisan key:generate

Após estes passos executar o comando **php artisan migrate** caso o banco ja esteja criado, utilizado o comando **php artisan migrate:refresh**, o mesmo dará um rollback nas tabelas criadas e rodas o comando para criar as tabelas novamente, então cuidado com o seu uso.

Por fim, se tudo estiver de acordo, **php artisan serve** para iniciar o servidor.

Após estes passos a configuração do Laravel está OK

Para a execução do PHPUnit:
- Verificar se o arquivo phpunit.xml está na pasta raíz do projeto
- Realizar a configuração do banco de dados adequado

Após realizar estas verificações, o PHPUnit deve estar apto para uso.

Para utilizar, basta rodar o comando **php artisan test**, ou o comando filtrado como apresentado na sessão anterior

## Documentação do Laravel

A documentação base do Laravel pode ser encontrada em: [Laravel documentation](https://laravel.com/docs/contributions).

Caso queira entender melhor o funcionamento da ferramenta, é recomendado acesso e leitura.
