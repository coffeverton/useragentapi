Uma implementação da biblioteca https://github.com/browscap/browscap-php, para retornar alguns dados do navegador.

Requisitos:
php7.1 ou maior;
composer;
um servidor web (Apache, Nginx etc)

Como usar:

1) Clonar este repositório;
2) Executar o comando install do composer para instalar as dependências (exemplo: php composer.phar install)
3) Atualizar o arquivo do browscap: php vendor/bin/browscap-php browscap:update
4) Configurar o servidor para servir a pasta web.
5) Envie uma requisição GET para a aplicação. O retorno da requisição será um objeto json, contendo as informações obtidas do user-agent. Para informar um user-agent diferente do atual, utilize o parâmetro "ua" na url.

Exemplo: https://useragentapi.everton.rocks/?ua=Mozilla/4.0%20(compatible;%20MSIE%206.0;%20Windows%20NT%205.1;%20SV1;%20.NET%20CLR%201.1.4322);

Para atualizar o arquivo do browscap, execute periodicamente o comando do passo 3.

Exemplo de virtual host para o Apache:
<VirtualHost *:80>
        ServerName useragentapi.everton.rocks

        ServerAdmin webmaster@localhost
        DocumentRoot /home/everton/vhosts/useragentapi/web

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

</VirtualHost>
