<?php
  require_once "../_conexao_banco/conexao.php";

  if(isset($_GET["turma"])):
      $id_turma  = $_GET["turma"];
      $id_escola = $_GET["escola"];

      $selecao_turma_unica    = "SELECT * FROM turmas WHERE ID_turma = $id_turma";
      $executar_selecao_turma = mysqli_query($conecta, $selecao_turma_unica);
      $dados_turma            = mysqli_fetch_assoc($executar_selecao_turma);

      $selecao_escola          = "SELECT nome_escola FROM escolas WHERE ID_escola = $id_escola";
      $executar_selecao_escola = mysqli_query($conecta, $selecao_escola);
      $dados_escola            = mysqli_fetch_assoc($executar_selecao_escola);
  endif;
?>

<section id="janela-exclusao">
    <div class="modal modal-exclusao animate" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Exclusão da turma <?php echo "<strong>" . $dados_turma["nome_turma"] . "</strong>"?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Você realmente deseja excluir a turma <strong>"<?php echo $dados_turma["nome_turma"]?>"</strong> e todos os alunos permanentemente da escola <strong>"<?php echo $dados_escola["nome_escola"]?>"</strong>?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-cancelar-exclusao">Cancelar</button>
            <a href="../_php_action/excluir_turma.php?escola=<?php echo $_GET['escola']?>&turma=<?php echo $_GET['turma']?>"><button type="button" class="btn btn-danger">Excluir Turma</button></a>
          </div>
        </div>
      </div>
    </div>
</section>