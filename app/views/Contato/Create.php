<div class="rows mx-0">
    <div class="col-9 central mb-3">
        <div class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
            <span><i class="fas fa-plus-circle" aria-hidden="true"></i> Cadastrar contato</span>
            <a href="<?php echo URL_BASE."contato"?>" class="btn btn-verde btn-pequeno"><i class="fas fa-arrow-left" aria-hidden="true"></i> Voltar</a>
        </div>
        <div class="p-1">
            <?php
            $this->verMsg();
            $this->verErro();
           

            ?>  

        </div>

        <form action="<?php echo URL_BASE."contato/salvar"?>" method="POST">
            <div id="tab">
                <ul>
                    <li><a href="#tab-1">Dados gerais</a></li>
                    <li><a href="#tab-2">Endereço</a></li>
                    <li><a href="#tab-3">Informações adicionais</a></li>
                </ul>
                <div id="tab-1">
                    <div class="p-2">
                        <span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Informações básicas</span>
                        <div class="rows">
                            <div class="col-12 mb-4">
                                <span class="h5 d-block text-upp">Marque os tipos desejados:</span>
                                <div class="rows itens-check px-3">
                                    <div><input type="checkbox" value="S" <?php echo ($contato->eh_cliente == "S") ? "checked" : null?> name="eh_cliente" class="form-control tipo" id="contato" > <label class="p-2 mr-1" for="contato"><i class="fas fa-user"></i> Contato</label>
                                    </div>
                                    <div><input type="checkbox" name="eh_fornecedor" class="form-control tipo" id="fornecedor" value="S" <?php echo ($contato->eh_fornecedor == "S") ? "checked" : null?>> <label class="p-2 mr-1" for="fornecedor"><i class="fas fa-cart-arrow-down"></i> Fornecedor</label>
                                    </div>

                                    <div><input type="checkbox" name="eh_transportador" class="form-control tipo" id="transportador" value="S" <?php echo ($contato->eh_transportador == "S") ? "checked" : null?>> <label class="p-2" for="transportador"><i class="fas fa-truck"></i> Transportador</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <label class="text-label">Nome</label>
                                <input type="text" name="nome" value="<?php echo ($contato->nome) ? $contato->nome : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-6 mb-3">
                                <label class="text-label">Nome Fantasia</label>
                                <input type="text" name="nome_fantasia" value="<?php echo ($contato->nome_fantasia) ? $contato->nome_fantasia : null ?>" class="form-campo">
                            </div>

                            <div class="col-4 mb-3">
                                <label class="text-label">CPF</label>
                                <input type="text" name="cpf" value="<?php echo ($contato->cpf) ? $contato->cpf : null ?>" placeholder="Digite aqui..." class="form-campo mascara-cpf">
                            </div>


                            <div class="col-4 mb-3">
                                <label class="text-label">CNPJ</label>
                                <input type="text" name="cnpj" value="<?php echo ($contato->cnpj) ? $contato->cnpj : null ?>" placeholder="Digite aqui..." class="form-campo mascara-cnpj">
                            </div>

                            <div class="col-4 mb-3">
                                <label class="text-label">Data Cadastro</label>
                                <input type="date" name="data_cadastro" value="<?php echo ($contato->data_cadastro) ? $contato->data_cadastro : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>

                            <div class="col-8 mb-3">
                                <label class="text-label">E-mail</label>
                                <input type="text" name="email" value="<?php echo ($contato->email) ? $contato->email : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-4 mb-3">
                                <label class="text-label">Senha</label>
                                <input type="password" name="senha" value="<?php echo ($contato->senha) ? $contato->senha : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>

                           
                            <div class="col-3 mb-3">
                                <label class="text-label">Fone:</label>
                                <input type="text" name="fone" value="<?php echo ($contato->fone) ? $contato->fone : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-3 mb-3">
                                <label class="text-label">Celular:</label>
                                <input type="text" name="celular" value="<?php echo ($contato->celular) ? $contato->celular : null ?>" placeholder="Digite aqui..." class="form-campo mascara-celular">
                            </div>
                            <div class="col-2">
                                <label class="text-label">Ativo</label>
                                <select class="form-campo" name="ativo">
                                    <option value="">Selecione</option>
                                    <option value="S" <?php echo ($contato->ativo == "S") ? "selected" : null?>>Sim</option>
                                    <option value="N" <?php echo ($contato->ativo == "N") ? "selected" : null?>>Não</option>
                                </select>
                            </div>


                        </div>
                    </div>
                </div>

                <div id="tab-2">
                    <div class="p-2">
                        <span class="d-block mt-4 h4 border-bottom text-uppercase">Endereço</span>
                        <div class="rows">
                            <div class="col-6 mb-3">
                                <label class="text-label">Logradouro</label>
                                <input type="text" name="logradouro" id="logradouro" value="<?php echo ($contato->logradouro) ? $contato->logradouro : null ?>" placeholder="Digite aqui..." class="form-campo rua">
                            </div>
                            <div class="col-3 mb-4">
                                <label class="text-label">Numero</label>
                                <input type="text" name="numero" id="numero" value="<?php echo ($contato->numero) ? $contato->numero : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-3 mb-3">
                                <label class="text-label">Complemento</label>
                                <input type="text" name="complemento" id="complemento" value="<?php echo ($contato->complemento) ? $contato->complemento : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-6 mb-3">
                                <label class="text-label">Bairro</label>
                                <input type="text" name="bairro" id="bairro" value="<?php echo ($contato->bairro) ? $contato->bairro : null ?>" placeholder="Digite aqui..." class="form-campo bairro">
                            </div>
                            <div class="col-3 mb-3">
                                <label class="text-label">CEP</label>
                                <div class="input-grupo">
                                    <input type="text" value="<?php echo ($contato->cep) ? $contato->cep : null ?>" name="cep" id="cep" placeholder="Digite aqui..." class="form-campo mascara-cep busca_cep">

                                </div>
                            </div>
                            <div class="col-3 mb-2">
                                <label class="text-label">UF</label>
                                <input type="text" value="<?php echo ($contato->uf) ? $contato->uf : null ?>" name="uf" id="uf" placeholder="Digite aqui..." class="form-campo estado">
                            </div>
                            <div class="col-4 mb-2">
                                <label class="text-label">Cidade</label>
                                <input type="text" value="<?php echo ($contato->cidade) ? $contato->cidade : null ?>" name="cidade" id="cidade" placeholder="Digite aqui..." class="form-campo cidade">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-3">
                    <div class="p-2">
                        <span class="d-block mt-4 h4 border-bottom text-uppercase">Informações Adicionais</span>
                        <div class="rows">
                            <div class="col-4 mb-3">
                                <label class="text-label">Insc. Estadual</label>
                                <input type="text" name="ie" value="<?php echo ($contato->ie) ? $contato->ie : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            
                            

                            <div class="col-4 mb-3">
                                <label class="text-label">RG</label>
                                <input type="text" name="rg" value="<?php echo ($contato->rg) ? $contato->rg : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                           
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center pb-4">
                
                <input type="submit" value="Salvar" class="btn btn-laranja m-auto">
                <input type="hidden" name="id_contato" value="<?php echo ($contato->id_contato) ? $contato->id_contato : null ?>">
            </div>
        </form>
    </div>

</div>