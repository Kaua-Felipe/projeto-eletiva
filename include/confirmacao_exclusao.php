<?php
  if(isset($_GET["deletar_aluno"])):
      $id_aluno = $_GET["deletar_aluno"];
  endif;
?>

<section id="janela-exclusao">
    <div class="modal modal-exclusao animate" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Exclusão do(a) aluno(a)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Você realmente deseja excluir o(a) aluno(a) permanentemente?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn-cancelar-exclusao">Cancelar</button>
            <a href="../_php_action/excluir_aluno.php?deletar_aluno=<?php echo $id_aluno?>&escola=<?php echo $_GET['escola']?>&turma=<?php echo $_GET['turma']?>"><button type="button" class="btn btn-danger">Excluir Aluno</button></a>
          </div>
        </div>
      </div>
    </div>
</section>