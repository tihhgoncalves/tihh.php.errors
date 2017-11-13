<?
/*
 * Manipula erros do PHP
 */
function tihh_errorHandler( $errno, $errstr, $errfile, $errline, $errcontext){
  tihh_erros($errstr);
}
set_error_handler('tihh_errorHandler');

function tihh_exception_handler($e) {
  echo tihh_erros($e->getMessage());
}
set_exception_handler('tihh_exception_handler');


function tihh_erros($msg){
  $html  = '<p class="tihh_errors" style="font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size: 14px;">';
  $html .= '<strong>Erro: </strong>' . $msg;
  $html .= '</p>';
  die($html);
}
?>
