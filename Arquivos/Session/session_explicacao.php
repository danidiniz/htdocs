 Sessões são uma forma simples de armazenar dados para usuários individuais usando um ID de sessão único. Sessões podem ser usadas para persistir informações entre requisições de páginas. IDs de sessão normalmente são enviados ao navegador através de cookies de sessão e o ID é usado para recuperar dados da sessão existente. A ausência de um ID ou cookie de sessão permite que o PHP saiba que deve criar uma nova sessão e gerar um novo ID de sessão.

Sessões seguem um fluxo simples. Quando uma sessão é iniciada, o PHP recupera uma sessão existente usando o ID informado (normalmente de um cookie de sessão) ou se nenhum é informado então será criada uma nova sessão. O PHP preencherá a super global $_SESSION com todos os dados de sessão depois que a sessão iniciar. Quando o PHP finalizar, automaticamente ele pegará o conteúdo da super global $_SESSION, então vai serializá-lo e enviá-lo para armazenamento usando o manipulador de gravação da sessão.

Por padrão, o PHP usa o manipulador de gravação interno files que é configurado por session.save_handler. Isto salva os dados da sessão no servidor no local configurado pela diretiva de configuração session.save_path.

Sessões podem ser iniciadas manualmente usando a função session_start(). Se a diretiva session.auto_start estiver configurada como 1, a sessão será iniciada automaticamente no início da requisição.

Sessões normalmente se encerram automaticamente quando o PHP termina de executar um script, mas podem ser encerradas manualmente usando a função session_write_close(). 



Exemplo #1 Registrando uma variável com $_SESSION.
<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>

Exemplo #2 Desregistrando uma variável com $_SESSION.
<?php
session_start();
unset($_SESSION['count']);
?>

Cuidado

NÃO desregistre toda a $_SESSION com unset($_SESSION) já que isso desativará o registro de variáveis de sessões da super global $_SESSION.
Aviso

Referências não podem ser usadas nas variáveis de sessão já que não existe uma maneira de restaurar uma referência para outra variável.
Aviso

register_globals sobrescreverá as variáveis no escopo global que compartilham o mesmo nome com as variáveis de sessão. Por favor veja Usando a diretiva Register Globals para detalhes.

    Nota:

    Sessões baseadas em arquivos (padrão no PHP) adicionam travas no arquivo de sessão assim que a sessão é iniciada via session_start() ou simplesmente via session.auto_start. Assim que adicionada a trava, nenhum outro script pode acessar o mesmo arquivo de sessão até que ela seja finalizada pelo encerramento do primeiro script ou pela chamada de session_write_close().

    Isto é possivelmente um problema para web sites que utilizam fortemente o AJAX e que tem múltiplas solicitações concorrentes. A maneira mais fácil de lidar com isto é chamar session_write_close() assim que as alterações necessárias na sessão forem feitas, de preferência no início do script. Como alternativa, um manipulador de sessão diferente que suporte concorrência poderia ser usado. 
