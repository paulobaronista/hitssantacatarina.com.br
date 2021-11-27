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


            $page = $this->input->post('facilita_custom_page');
            $url = $this->input->post('facilita_custom_url');
            $selector = $this->input->post('facilita_custom_selector');

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

            if ($this->email->send()) {


                /* Endpoint */
                $url = 'https://tsengenharia.api.facilitavendas.com/public/trackerform';

                /* eCurl */
                $curl = curl_init($url);

                /* Data */
                $data = [
                    // 'name' => $nome,
                    // 'email' => $email,
                    // 'phone' => $telefone,
                    // 'imovel' => $imovel,
                    // 'mesage' => $mensagem,
                    // 'Página' => $page,
                    // 'Link' => $url




                    "acao" => 'salvar_editar',
					'nome' => json_encode($nome),
					'email' => $email,
					'telefone' =>  $telefone,
					'modulo' => 'gestor',
					'conversao' => 'site',
					'data_cad_conversao' => date('d/m/Y'),
					"idempreendimento" => 
					array( "0" => '9'),
					"historical" => array( "message" => 'Lead processado através da Ferramenta de Captura de formulários <br/> Formulário: HITS Santa Catarina | Formulário Geral <br/> Página: HITS Santa Catarina | Formulário Geral<br/> Link: https://hitssantacatarina.com.br/'),


					"interacoes"  => array( "0" => array(  "tipo" => "E",


					"descricao" => json_encode($mensagem ))),



					"origem" => "SI",
					"permitir_alteracao" => "true"

                ];


                /* Set JSON data to POST */
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

                /* Define content type */
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

                /* Return json */
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                /* make request */
                $result = curl_exec($curl);

                echo (is_callable('curl_init')) ? curl_exec($curl)  : '<h1>Not enabled</h1>';
                echo json_encode($data);





                /* close curl */
                curl_close($curl);
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
