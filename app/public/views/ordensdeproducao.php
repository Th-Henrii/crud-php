<?php
set_include_path(__DIR__ . '/../../src');
include_once 'conexao/Conexao.php';
include_once 'dao/UsuarioDAO.php';
include_once 'model/Usuario.php';

$op = new ordemProducao();
$opdao = new opDAO();
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="buttonmodal">
    Cadastrar nova Ordem de Produção
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastrar OP's</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="controllers/opController.php" method="POST">
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
                        <input type="text" name="nomeusina" class="form-control" require />
                    </div>
                </div>
                <div class="modal-footer">
                <input type="hidden" name="id"/>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($opdao->readOP() as $op) : ?>
                        <tr>
                            <td><?= $usuario->getId() ?></td>
                            <td><?= $usuario->getNome() ?></td>
                            <td><?= $usuario->getEmail() ?></td>
                            <td><?= $usuario->getSenha() ?></td>
                            <td class="text-center">
                                <button class="btn  btn-primary btn-sm" data-toggle="modal" data-target="#editar><?= $usuario->getId() ?>" type="submit">
                                    Editar
                                </button>
                                <a href="../controllers/UsuarioController.php?del=<?= $usuario->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="submit" id="del">Excluir</button>
                                </a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="editar><?= $usuario->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../controllers/UsuarioController.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Nome</label>
                                                    <input type="text" name="nome" value="<?= $usuario->getNome() ?>" class="form-control" require />
                                                </div>
                                                <div class="col-md-7">
                                                    <label>Email</label>
                                                    <input type="text" name="email" value="<?= $usuario->getEmail() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Senha</label>
                                                    <input type="text" name="senha" value="<?= $usuario->getSenha() ?>" class="form-control" require />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="hidden" name="id" value="<?= $usuario->getId() ?>" />
                                                    <button class="btn btn-primary" type="submit" name="editar">Cadastrar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
</div>
