<div class="rows mx-0">
    <div class="col-9 central mb-3">

        <div class="rows">
            <div class="col-12">
                <div class="caixa">
                    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                        <span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Localização </span>

                    </div>

                    <div class="p-1">
                        <?php
                        $this->verMsg();
                        $this->verErro();

                        ?>

                    </div>
                    <form action="<?php echo URL_BASE . "produtolocalizacao/salvar" ?>" method="POST">

                        <div class="px-2 pt-2">
                            <div class="bg-padrao border radius-4 mt-2 p-3 radius-4">
                                <div class="rows">
                                    <div class="col-3">
                                        <label class="text-label d-block text-branco">Produto</label>
                                        <select class="form-campo" name="id_produto">
                                            <option value="">Selecione um valor..</option>
                                            <?php foreach ($produto as $key => $produtos) {
                                                $selecionado = ($produtos->id_produto == $produto_localizacao->id_produto) ? "selected" : null;
                                                echo   "<option value='$produtos->id_produto'$selecionado>$produtos->produto</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="text-label d-block text-branco">Localização</label>
                                        <select class="form-campo" name="id_localizacao">
                                            <option value="">Selecione um valor..</option>
                                            <?php foreach ($local as $key => $localiza) {

                                                $selecionado = ($localiza->id_localizacao == $produto_localizacao->id_localizacao) ? "selected" : null;
                                                echo  "<option value='$localiza->id_localizacao'$selecionado>$localiza->localizacao</option>";
                                            } ?>
                                        </select>
                                    </div>



                                    <div class="col-2">
                                        <label class="text-label d-block text-branco">Em Massa</label>
                                        <select class="form-campo" name="em_massa">
                                            <option value="N">Não</option>
                                            <option value="S">Sim</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label class="text-label d-block text-branco">Tipo</label>
                                        <select class="form-campo" name="tipo">
                                            <option value="">Todos</option>
                                            <option value="P">Produtos</option>
                                            <option value="I">Insumos</option>
                                        </select>
                                    </div>

                                    <div class="col-2 mt-1 pt-1">
                                        <input type="hidden" name="id_produto_localizacao" value="<?php echo ($produto_localizacao->id_produto_localizacao) ? $produto_localizacao->id_produto_localizacao : null ?>">
                                        <input type="submit" value="Inserir" class="btn btn-verde text-uppercase width-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 mt-3">
                <div class="px-2">
                    <div class="tabela-responsiva pb-4">
                        <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                <tr>
                                    <th align="center" width="5%">Id</th>
                                    <th align="center">Produto</th>
                                    <th align="center">Localização</th>
                                    <th align="center">Estoque</th>
                                    <th align="center" width="70">Editar</th>
                                    <th align="center" width="70">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($lista as $key => $proloc) {

                                ?>
                                    <tr>
                                        <td align="center"><?php echo $proloc->id_produto_localizacao ?></td>
                                        <td align="center"><?php echo $proloc->produto ?></td>
                                        <td align="center"><?php echo $proloc->localizacao ?></td>
                                        <td align="center"><?php echo $proloc->estoque ?></td>
                                        <td align="center"><a href="<?php echo URL_BASE . "produtolocalizacao/edit/" . $proloc->id_produto_localizacao ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Editar</a></td>
                                        <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade="produtolocalizacao" data-id="<?php echo $proloc->id_produto_localizacao ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                        </td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>