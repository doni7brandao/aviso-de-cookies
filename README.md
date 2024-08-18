# Aviso de Cookies com PHP e Javascript

Implementei este script desenvolvido em PHP e Javascript cuja funcionalidade é ativar um modal de **Aviso de Cookies** no meu site. Ele está funcionando corretamente. Se eu ACEITAR, o modal não aparece na atualização, nem na abertura de outra página do site ou em uma nova aba até que eu feche o navegador. Se eu fechar e reabrir o navegador, o site aberto aceita mostrando o cookie modal novamente. Se eu RECUSAR, o modal continua a ser exibido toda vez que eu abrir uma nova página no site, até que eu o aceite.

Espero que seja útil para você. Se tiver dificuldades fale comigo pelo e-mail: [paradonizete@gmail.com](mailto:paradonizete@gmail.com), talvez, eu possa lhe ajudar, não sei muito, mas vou te ajudar.

## Modal simples de Aviso de Cookies

[Aviso de Cookies simples com PHP e Javascript:]
![Aviso de Cookies simples com PHP e Javascript](/exemplo-basico.png)]

```html

<!-- Modal Aviso de Cookies -->
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
<!--/Fim do Modal -->

```

### Termos de Uso e Licença

Os scripts e os arquivos de documentação associados são disponibilizados com permissão concedida, gratuitamente, a qualquer pessoa que obtenha uma cópia, sujeito às seguintes condições:

1. **Uso, Cópia e Modificação:** Você tem permissão para usar, copiar e modificar os scripts de acordo com suas necessidades.

2. **Mesclagem, Publicação e Distribuição:** Você pode mesclar os scripts em outros projetos, publicá-los e distribuí-los de acordo com suas preferências.

3. **Sublicença e Venda:** Você não tem o direito de sublicenciar e/ou vender cópias dos projetos.

**No entanto, você deve cumprir a seguintes condição:** Incluir o aviso de direitos autorais original em todas as cópias ou partes substanciais dos projectos.

***_O aviso de direitos autorais acima e este aviso de permissão devem ser incluídos em todas as cópias ou partes substanciais dos projetos._***

### Isenções de Responsabilidade

Os scripts são fornecidos "como estão" e não vêm com garantias de qualquer tipo, expressas ou implícitas, incluindo, mas não se limitando a garantias de comercialização, adequação a uma finalidade específica e não infração. Em nenhum caso, os autores ou detentores de direitos autorais serão responsáveis por qualquer reclamação, danos ou qualquer outra responsabilidade, seja em ação de contrato, ato ilícito ou qualquer outra teoria legal, decorrente de, fora de ou em conexão com os projectos ou o uso ou outras interações com os mesmos.

Fique à vontade para usar, modificar e distribuir os scripts e projetos de acordo com os termos desta licença.

### Contribuições

Se deseja contribuir para este projecto, por favor, siga estas diretrizes:

1. Faça um fork deste repositório.
2. Crie uma branch para sua contribuição: `git checkout -b minha-contribuicao`
3. Faça suas modificações e adições.
4. Envie um pull request descrevendo suas alterações.

### Contato

Se você tiver alguma dúvida ou precisar entrar em contato comigo, sinta-se à vontade para fazê-lo através do seguinte endereço de e-mail: [paradonizete@gmail.com](mailto:paradonizete@gmail.com).

Este projeto é licenciado sob os termos da [Licença MIT](LICENSE). Sinta-se à vontade para usar, modificar e distribuir este projeto de acordo com os termos da licença.
