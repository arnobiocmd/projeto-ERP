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
                    <form action="<?php echo URL_BASE."localizacao/salvar"?>" method="POST">

                        <div class="px-2 pt-2">
                            <div class="bg-padrao border radius-4 mt-2 p-3 radius-4">
                                <div class="rows">
                                    <div class="col-8">
                                        <label class="text-label d-block text-branco">Localização</label>
                                        <input type="text" name="localizacao" value="<?php echo ($localizacao->localizacao) ? $localizacao->localizacao : null ?>" class="form-campo">
                                    </div>

                                    <div class="col-2">
                                        <label class="text-label d-block text-branco">Galpão</label>
                                        <select name="galpao" class="form-campo">
                                            <option value="N">Não</option>
                                            <option value="S">Sim</option>
                                        </select>
                                    </div>
                                    <div class="col-2 mt-1 pt-1">
                                        <?php if(!$localizacao->id_localizacao) {?>
                                        <input type="submit" value="Inserir" class="btn btn-verde text-uppercase width-100">
                                        <?php }else{?>
                                            <input type="submit" value="Editar" class="btn btn-verde text-uppercase width-100">
                                            <input type="hidden" name="id_localizacao" value="<?php echo ($localizacao->id_localizacao) ? $localizacao->id_localizacao : null ?>">
                                            <?php }?>
                                        
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
                                    <th align="center">Status</th>
                                    <th align="center" width="70">Editar</th>
                                    <th align="center" width="70">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($lista as $key => $localizacao) {
                                   
                                ?>
                                <tr>
                                    <td align="center"><?php echo $localizacao->id_localizacao?></td>
                                    <td align="center"><?php echo $localizacao->localizacao?></td>
                                    <td align="center"><a href="<?php echo URL_BASE."localizacao/edit/".$localizacao->id_localizacao?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Editar</a></td>
                                    <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade="localizacao" data-id="<?php echo $localizacao->id_localizacao?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
                                    </td>
                                </tr>
                               
                                    <?php }?>
                                    
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>