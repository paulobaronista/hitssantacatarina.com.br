<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Hits Santa Catarina';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $imovel = $this->input->post('imovel');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.hitssantacatarina.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@hitssantacatarina.com.br", "Hits Santa Catarina");
            $this->email->to('contato@hitssantacatarina.com.br');
            $this->email->cc('front.baronista@gmail.com, renata@spicycomm.com.br, alebertone@spicycomm.com.br');
            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Quando pretende comprar um imóvel:	{$imovel}<br/>
                            Mensagem:	{$mensagem}<br/>
                                </body></html>");

            $this->email->send();

            if ($this->email->send()) {

                $dadosLead = array(
                    // 'nome' => $nome,
                    // 'email' => $email,
                    // 'telefone' =>  $telefone,
                    // 'Quando pretende comprar um imóvel' =>  $imovel,
                    // 'Mensagem' =>  $mensagem,
                    $facilita_custom_page = 'HITS Santa Catarina | Formulário Geral',
                    $facilita_custom_url = 'https://hitssantacatarina.com.br/',
                    $facilita_custom_selector = '#hitssantacatarina'
                );

                $dadosLead = json_encode($dadosLead);

                $cabecalho = array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($dadosLead)
                );

                $url = 'https://tsengenharia.api.facilitavendas.com/public/trackerform';

                echo '<br><hr><h2>'.$this->post($url, $dadosLead, $cabecalho).'</h2><br><hr><br>';

                $curlHandler = curl_init();
                curl_setopt($curlHandler, CURLOPT_URL, $url);
                curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $dadosLead);
                curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($curlHandler, CURLOPT_HTTPHEADER, $cabecalho);
                $retorno = curl_exec($curlHandler);

                echo (is_callable('curl_init')) ? curl_exec($curlHandler)  : '<h1>Not enabled</h1>';
            } else {
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'Hits Santa Catarina';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'Hits Santa Catarina';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
