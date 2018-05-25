# ManagePET
Aplicação web voltada para o gerenciamento de atividades desenvolvidas por grupos PET.
## Funcionalidades
#### Voltadas para usuários normais
* Agenda para visualização das atividades desenvolvidas
* Emissão de certificados de participação em atividades
* Controle de presenças em atividades
#### Voltadas aos petianos
* Gerenciamento de petianos
* Gerenciamento de atividades
* Geração de relatórios
## Tecnologias necessárias para execução da aplicação
* PHP >= v7.1.3 (com as extensões: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype e JSON)
* Composer
* MySQL
* Node.js
* npm
> Por conveniência é interessante adicionar o PHP, o Composer e o npm à variável PATH do seu sistema.
## Instalação do Homestead (opcional)
O Laravel disponibiliza uma box Vagrant chamada *Homestead* que possui todas essas dependências já instaladas.\
Caso preferir não utilizar o *Homestead* pule direto para o tópico *Configuração inicial do projeto* após ter instalado as dependências na sua máquina.
#### Requisitos
* VirtualBox (ou outro hypervisor)
* Vagrant
#### Download e configuração do Homestead
* Clonar o repositório do [*Homestead*](https://github.com/laravel/homestead) para um diretório local 
* Entrar no diretório criado e executar o comando:
```
./init.sh                           #(para Linux)
./init.bat                          #(para Windows)
```
* Abrir arquivo *Homestead.yaml* e adaptar as opções conforme necessário:
    * A opção *map* dentro de *folders* deve apontar para a raiz do projeto atual no seu disco
    * A opção *map* dentro de *sites* indica a URI que será utilizada para acessar a aplicação (o Homestead utiliza o Nginx por padrão para servir a aplicação via http)
    * A opção *databases* indica o nome da base de dados que será criada
* Adicionar a URI e o endereço IP especificados dentro do arquivo *Homestead.yaml* ao arquivo de resolução de DNS local do sistema operacional (hosts)
* Caso não possua um par de chaves ssh, abrir bash e executar o comando:
```
ssh-keygen -t rsa -C "user@mail.com"           #(basta confirmar todas as opções padrões)
```
* Abrir bash no diretório do *Homestead* e executar o comando:
```
vagrant up
```
> Para verificar se o *Homestead* está funcionando devidamente acesse a URI configurada no *Homestead.yaml* através de seu navegador.

> Para acessar a VM do Homestead basta abrir o bash no diretório do *Homestead*, executar '*vagrant ssh*' e navegar até o diretório do projeto (o diretório do projeto será igual à opção *to* dentro de *folders* no arquivo *Homestead.yaml*).
## Configuração inicial do projeto
* Criar base de dados local para conseguir testar a aplicação (para usuários do *Homestead* já está criada)
* Criar cópia do arquivo *.env.example* no root da aplicação e renomeá-la para *.env*
* Abrir o arquivo *.env* e configurar conexão com a base de dados criada:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_database        #(para usuários do Homestead deve ser igual à opção 'databases' do arquivo 'Homestead.yaml')
DB_USERNAME=usuario_do_database     #(para usuários do Homestead o username padrão é 'homestead')
DB_PASSWORD=senha_do_usuario        #(deixar em branco caso não tiver senha | para usuários do Homestead a senha é 'secret')
```
* Abrir bash no root da aplicação e executar os comandos:
```
composer install
npm install
php artisan key:generate
php artisan migrate
```
> Usuários do *Homestead* devem executar esses comandos através da VM do *Homestead*.

> Para testar se a aplicação está funcionando devidamente abra o bash no root da aplicação, execute o comando *php artisan serve* e acesse o endereço IP do host na porta 8000 através de seu navegador.