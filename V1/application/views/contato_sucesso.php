<header class="rellax">
    <div class="gallery-wrapper">
        <div class="gallery">
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 01.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 02.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 03.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 04.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 05.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 06.png">
            </div>
            <div class="gallery-item">
                <img src="<?= base_url(); ?>assets/images/FRAME 07.png">
            </div>
        </div>
    </div>
    <form method="post" role="form" id="hitssantacatarina" action="<?php echo base_url("contato") ?>">
        <h2>Quer viver bem?<br>Fale com a gente</h2>
        <div class="fieldset">
            <input id="nome" type="text" class="nome" name="nome" required="required" placeholder="NOME*" />
        </div>
        <div class="fieldset">
            <input id="email" type="email" class="email" name="email" required="required" placeholder="E-MAIL*" />
        </div>
        <div class="fieldset">
            <input id="telefone" class="phone" type="tel" name="phone" required="required" placeholder="TELEFONE*" />
        </div>
        <div class="fieldset">
            <input id="imovel" class="imovel" type="text" name="imovel" required="required" placeholder="QUANDO PRETENDE COMPRAR UM IMÓVEL?*" />
        </div>
        <div class="fieldset">
            <textarea id="form-mensagem" class="msg" cols="30" rows="5" name="mss" placeholder="SUA MENSAGEM">Quero mais informações sobre o HITS VILA SANTA CATARINA</textarea>
        </div>
        <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
        <button style="display: none;" type="submit" class="btn-trigger" title="enviar" name="enviar_email" value="enviar">Enviar</button>
        <div style="margin-top: 1rem; display: flex; justify-content: center;">
            <a href="https://m.facebook.com/tsincorporacaoeconstrucao" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-facebook@2x.png" alt=""></a>
            <a href="https://instagram.com/tranchesisadek?utm_medium=copy_link" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-instagram@2x.png" alt=""></a>
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511998039252" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-phone@2x.png" alt=""></a>
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511998039252" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-whatsapp@2x.png" alt=""></a>
            <a href="#" target="_blank" class="links"><img src="<?= base_url(); ?>assets/images/icon-chat@2x.png" alt=""></a>
        </div>
    </form>
</header>
<main>
    <section class="hero">
        <div class="hero-container">
            <div id="banner">
                <div id="circles">
                    <img id="dots" class="rellax" src="<?= base_url(); ?>assets/images/dots@4x.png" data-rellax-zindex="-10" alt="">
                    <img id="dorms" class="rellaxx" src="<?= base_url(); ?>assets/images/dorms@2x.png" data-rellax-zindex="10" alt="">
                    <img id="casa" class="rellaxx" src="<?= base_url(); ?>assets/images/casa@2x.png" data-rellax-zindex="20" alt="">
                </div>
                <div>
                    <img id="hits" class="rellaxx" src="<?= base_url(); ?>assets/images/hits@2x.png" data-rellax-zindex="30" alt="">
                </div>
            </div>
            <img id="arrows" class="rellax" src="<?= base_url(); ?>assets/images/arrows@4x.png" data-rellax-zindex="-5" alt="">
            <img id="x" class="rellax" src="<?= base_url(); ?>assets/images/x.png" data-rellax-zindex="-20" alt="">
        </div>
    </section>
    <section>
        <img src="<?= base_url(); ?>assets/images/waze@2x.png" id="waze" alt="">
        <hr>
        <p id="endereco">
            Local do empreendimento:<br>RUA 8 DE MARÇO ESQUINA COM <strong style="color: #e94e1f;"><br/> Emílio de Sousa Docca, 149</strong></strong><br> Vila Santa Catarina
        </p>
    </section>
    <footer>
        <div><img src="<?= base_url(); ?>assets/images/footer-a@2x.png" alt=""></div>
        <div class="spacer"></div>
        <div><img src="<?= base_url(); ?>assets/images/footer-b@2x.png" alt=""></div>
        <div class="spacer"></div>
        <div><img src="<?= base_url(); ?>assets/images/footer-c@2x.png" alt=""></div>
    </footer>
    <p class="disclaimer" style="margin-bottom: 4rem; text-align: center;">o empreendimento só será comercializado após a expedição do RI. Imagens meramente ilustrativas. Futuras Vendas: Itaplan - R. Ministro Jesuíno Cardoso, 633 Cj. 42 - Vila Nova Conceição - CRECI J-33051 e TS Intermediações imobiliárias - R. Costa
        Carvalho 148 - Pinheiros CRECI 216363</p>
</main>

<div id="aviso" class="aviso text-center">
    <div>
        <button type="button" class="close" id="close"><span aria-hidden="true">&times;</span></button>
        <p>Obrigado pelas informações.<br />
            Já entraremos em contato para um <strong>atendimento exclusivo!</strong></p>
    </div>
</div>