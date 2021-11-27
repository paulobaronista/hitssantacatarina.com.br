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

            // $facilita_custom_page = utf8_decode('');
            // $facilita_custom_url = utf8_decode('https://hitssantacatarina.com.br/');
            // $facilita_custom_selector = utf8_decode('#hitssantacatarina');

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

            $user_UTM     = "";
            $user_Name    = filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
            $user_Email   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $user_Phone   = $_POST["phone"];
            $user_Message = filter_var($_POST["mss"], FILTER_SANITIZE_STRING);
            $facilita_custom_page = "HITS Santa Catarina | Formulário Geral";
            $facilita_custom_url = "https://hitssantacatarina.com.br/";
            $facilita_custom_selector = "#hitssantacatarina";


            #//Prepara os dados \\
            $aDados = array(
                "Nome" => "$user_Name",
                "Telefone" => "$user_Phone",
                "Email" => "$user_Email",
                "Mensagem" => "$user_Message",
                "Campanha" => "$user_UTM",
                "Custom Page" => "$facilita_custom_page",
                "Custom Url" => "$facilita_custom_url",
                "Custom Selector" => "$facilita_custom_selector",
            );

            $data_string = json_encode($aDados);
            $ch = curl_init("https://tsengenharia.api.facilitavendas.com/public/trackerform");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data_string)));

            $result = curl_exec($ch);
            curl_close($ch);
            #\\Dados enviados//
            if ((strpos($result, "false") === true) or (trim($result) == "")) {
                $output = json_encode(array('type' => 'error', 'text' => "Não foi possível enviar os dados. Por favor, tente novamente. ($result)"));
                redirect('contato/fail');
            }

            if ($this->email->send()) {
                redirect('contato/obrigado');
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
