<h1>Rede Feminina</h1>

<p>O projeto atual está sendo feito com o framework Slim 4 (<a href="http://www.slimframework.com/docs/v4/">link</a>) e utiliza o composer localmente para gerenciar as dependências. O arquivo composer.phar é o executavel e para utilizá-lo, basicamente abra um terminal no diretório do projeto e execute : php composer.phar "comando"</p>

<p>O comando mais utilizado será o "update". Esse comando irá carregar as dependencias do projeto. Sempre que os comandos git clone ou pull forem utilizados, recomenda-se rodar "php composer.phar update" para verificar se alguma dependencia foi adicionada ao projeto e evitar erros por falta das mesmas.</p>

<p>Porém, antes de rodar o comando "update" do composer, verifique se a pasta "vendor" existe na raiz do projeto. Esse diretório armazena as dependecias carregadas pelo composer e se caso ele não exista o comando update irá falhar.</p>

<p>Quando todas as dependências ja estiverem resolvidas, para testar a aplicação, execute o comando "php -S localhost:8080" no terminal, dentro do diretório public, para ativar o servidor local do projeto. Para acessar a aplicação no navegador, digite na barra de enderço "localhost:8080".</p>
