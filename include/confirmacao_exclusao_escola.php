<?php
  require_once "../_conexao_banco/conexao.php";

  if(isset($_GET["escola"])):
      $id_escola = $_GET["escola"];

      $selecao_escola_unica    = "SELECT nome_escola FROM escolas WHERE ID_escola = $id_escola";
      $executar_selecao_escola = mysqli_query($conecta, $selecao_escola_unica);
      $dados_escola            = mysqli_fetch_assoc($executar_selecao_escola);
  endif;
?>

<section id="janela-exclusao">
    <div class="modal modal-exclusao animate" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Exclusão da escola <?php echo "<strong>" . $dados_escola["nome_escola"] . "</strong>"?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Você realmente deseja excluir a escola <strong>"<?php echo $dados_escola["nome_escola"]?>"</strong> permanentemente?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-cancelar-exclusao">Cancelar</button>
            <a href="../_php_action/excluir_escola.php?escola=<?php echo $_GET['escola']?>"><button type="button" class="btn btn-danger">Excluir Escola</button></a>
          </div>
        </div>
      </div>
    </div>
</section>