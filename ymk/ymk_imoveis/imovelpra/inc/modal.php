<!-- MODAL CONTATO -->
<div class="modal fade" id="ModalContato" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Entre em Contato</h4>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">Nome Completo</label>
                        <input id="nome" name="nome" type="text" placeholder="" class="form-control" required="">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">Telefone</label>
                        <input id="telefone" name="telefone" pattern="[0-9]+$" type="tel" placeholder="" class="form-control" required="">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="nome">Mensagem</label>

                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    
                    
                    
                    <div class="form-group enviar">
                        <label class="control-label" for="enviar"></label>
                        
                        <button class="btn btn-default btn-enviar">Enviar</button>
                    </div>
                    
                    
                </form>
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->            
<!-- FIM MODAL CONTATO -->


<!-- MODAL FALE CORRETOR -->
<div class="modal fade" id="ModalAgende" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insira os dados abaixo e aguarde o contato</h4>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">Nome Completo</label>
                        <input id="nome" name="nome" type="text" placeholder="" class="form-control" required="">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">Telefone</label>
                        <input id="telefone" name="telefone" pattern="[0-9]+$" type="tel" placeholder="" class="form-control" required="">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="nome">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="selectbasic">Renda familiar</label>
                        <div>
                            <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="0" selected="selected" disabled="disabled" style="display: none">Escolha uma opção</option>
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nome">Quanto deseja financiar?</label>
                        <input id="nome" name="nome" type="text" placeholder="" class="form-control" required="">
                    </div>
                    
                    <div class="form-group enviar">
                        <label class="control-label" for="enviar"></label>
                        
                        <button class="btn btn-default btn-enviar">Enviar</button>
                    </div>
                    
                    
                </form>
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                   