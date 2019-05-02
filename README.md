# App

## Instalação

  1. Entre no servidor via SSH:

    $ ssh root@vpsXXXXX.publiccloud.com.br


  2. Clone este repositório no diretório `root` do Apache:

    $ cd /var/www
    $ git clone https://github.com/vpschallenge/app.git 
    $ rm -rf html
    $ mv app html


  3. Acesse a aplicação pelo browser:

    http://vpsXXXXX.publiccloud.com.br
