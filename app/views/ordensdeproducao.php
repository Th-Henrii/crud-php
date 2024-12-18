
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="buttonmodal">
    Cadastrar nova Ordem de Produção
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controllers/opController.php" method="POST">
            <div class="row">
                <div class="col-md-5">
                    <label>Numero da OP</label>
                    <input type="text" name="numop" class="form-control" require />
                 </div>
                <div class="col-md-7">
                    <label>Relatório de Produção</label>
                    <input type="text" name="relprd" class="form-control" require />
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Usina</label>
                        <input type="text" name="usina" class="form-control" require />
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="hidden" name="id"/>
        <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
      </div>
    </div>
  </div>
</div>