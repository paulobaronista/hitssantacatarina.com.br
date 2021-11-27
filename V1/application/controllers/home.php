<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Hits Santa Catarina';
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
    public function politicadeprivacidade() {
        $data['title'] = 'Hits Santa Catarina';
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

}

/* Location: ./application/controllers/home.php */
