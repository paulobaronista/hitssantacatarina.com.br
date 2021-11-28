<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Hits Vila Santa Catarina';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function politicadeprivacidade()
    {
        $data['title'] = 'Hits Vila Santa Catarina';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function beachtennis()
    {
        $data['title'] = 'HITS BEACH TENNIS';
        $data['description'] = 'Sucesso é viver bem.';
        $data['keywords'] = 'sucesso, viver bem, hits, santa, catarina';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'beachtennis_view';

        if ($this->input->post('benviar_email') == "benviar") {
            $bnome = $this->input->post('bnome');
            $bemail = $this->input->post('bemail');
            $bphone = $this->input->post('bphone');
            $bmensagem = utf8_decode($this->input->post('bmss'));
            $bassunto = utf8_decode('[Novo Lead] LP - HITS BEACH TENNIS');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@hitssantacatarina.com.br", "HITS BEACH TENNIS");
            $this->email->to('contato@hitssantacatarina.com.br');
            $this->email->cc('renata@spicycomm.com.br, front.baronista@gmail.com');
            $this->email->subject($bassunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$bnome}<br/>
                E-mail:		{$bemail}<br/>
                    Telefone:	{$bphone}<br/>
                            Amigos:	{$bmensagem}<br/>
                                </body></html>");

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
}

/* Location: ./application/controllers/home.php */
