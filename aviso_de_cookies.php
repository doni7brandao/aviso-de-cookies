<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" title="Fechar"><i class="fa fa-times-circle" style="font-size:24px;color:black"></i></button>
                    <h3 class="modal-title text-center">Aviso de Cookies</h3>
                </div>
                <div class="modal-body">
                    <div class="notice d-flex justify-content-between align-items-center">
                        <div class="text-justify">
                            Este site faz uso de cookies ou tecnologias similares que podem conter informações de rastreamento sobre os visitantes. 
                            Você pode aceitar ou negá-los, mas isso pode afetar o funcionamento do site. <u><a href="https://www.tcepi.tc.br/politica-de-cookies">Saiba mais...</a></u>
                        </div>
                            <div class="buttons d-flex flex-column flex-lg-row">
                                <h5 class="modal-title text-right"><img src="../transparencia/ativos/imgs/imagem-cookie.png" width="30px"/></h5>
                                <a href="javascript:;" class="btn btn-success mr-2 aceita-cookies" data-dismiss="modal">Aceitar</a>
                                <a href="javascript:;" class="btn btn-danger mr-2 recusa-cookies" data-dismiss="modal">Recusar</a>
                                <a href="https://www.tcepi.tc.br/politica-de-cookies" target="_blank" class="btn btn-primary mr-2 aceita-cookies" data-dismiss="modal">Política de Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    if (document.cookie.indexOf("accepted_cookies=") < 0) {
        $('#cookieModal').modal('show');
    }
    
    
    $('.aceita-cookies').on('click', function () {
        document.cookie = "accepted_cookies=yes;"
        $('#cookieModal').modal('hide');
    })
    
    
    $('.recusa-cookies').on('click', function () {
        $('#cookieModal').modal('hide');
    })

</script>