<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {


	public function __construct() {
		parent::__construct();

        $this->load->model(['patients_model']);
		$this->alert = new Alert();
		$this->template = new Template('templates/', 'patient/');
	}
	
	public function index()
	{
        $this->home();
	}
	
	public function home()
    {
		$data['patient']   = $this->patients_model->buscar();
        $this->template->load( $data, ['home']);
	}
	
	public function adicionar()
    {

        if($this->input->post()):
            $data['photograph']   = $_FILES['photograph']['name'];
            $data['name']      = $this->input->post('name');
            $data['mother_name']   = $this->input->post('nameMother');
			$data['birthday']   = $this->input->post('birthday');
			$data['cpf']       = $this->input->post('cpf');
            $data['cns']       = $this->input->post('cns');
            $data['address'] = $this->input->post('address');
            $data['number']      = $this->input->post('number');
            $data['neighborhood']      = $this->input->post('neighborhood');
            $data['complement']   = $this->input->post('complement');
			$data['city']   = $this->input->post('city');
			$data['uf']       = $this->input->post('uf');
            $data['cep']       = $this->input->post('cep');

            $path = "./uploads/";

            // verificamos se o diretório existe
            // se não existe criamos com permissão de leitura e escrita
            if ( ! is_dir($path)) {
            mkdir($path, 0777, $recursive = true);
            }
    
            // definimos as configurações para o upload
            // determinamos o path para gravar o arquivo
            $configUpload['upload_path']   = $path;
            // definimos – através da extensão –
            // os tipos de arquivos suportados
            $configUpload['allowed_types'] = 'jpg|png|pdf|zip|rar|doc|xls|docx';
    
            // passamos as configurações para a library upload
            $this->load->library('upload');
            $this->upload->initialize($configUpload);
    
            // verificamos se o upload foi processado com sucesso
            if ( ! $this->upload->do_upload('photograph'))
            {
                // em caso de erro retornamos os mesmos para uma variável
                // e enviamos para a home
                $data= array('error' => $this->upload->display_errors());
                $this->alert->set(
                    'erro',
                    'Erro ao adicionar Chamado'.$data,
                    'patient'
                );
            } 
           

            if($this->patients_model->adicionar($data)):
                $this->alert->set(
                    'sucesso',
                    'Paciente adicionar com sucesso!',
                    'patient'
                );
            else:
                $this->alert->set('erro', 'Erro ao incluir Paciente!', 'patient');
            endif;
        endif;
    }

    public function visualizar($id)
    {
        
        $data['patient']    = $this->patients_model->buscar($id);
       $this->template->load($data, 'visualizar');
       
    }


    public function editar($id)
    {
        if($this->input->post()):
            $data['photograph']      = $this->input->post('photograph');
            $data['name']      = $this->input->post('name');
            $data['mother_name']   = $this->input->post('nameMother');
			$data['birthday']   = $this->input->post('birthday');
			$data['cpf']       = $this->input->post('cpf');
            $data['cns']       = $this->input->post('cns');
            $data['address'] = $this->input->post('address');
            $data['number']      = $this->input->post('number');
            $data['neighborhood']      = $this->input->post('neighborhood');
            $data['complement']   = $this->input->post('complement');
			$data['city']   = $this->input->post('city');
			$data['uf']       = $this->input->post('uf');
            $data['cep']       = $this->input->post('cep');
            
                
            if($this->patients_model->editar($data, $id)):

                $this->alert->set(
                    'sucesso',
                    'Paciente editado com sucesso!',
                    'patient/visualizar/'.$id
                );
       
            else:
                $this->alert->set(
                    'erro',
                    'Erro ao edita Paciente',
                    'patient/visualizar/'.$id
                );
            endif;
        endif;
       
    }

    public function excluir($id)
    {
            if($this->patients_model->excluir($id)):
                $this->alert->set(
                    'sucesso', 'Paciente excluído com sucesso!',
                    'patient'
                );
            else:
                $this->alert->set('erro', 'Erro ao excluir Paciente!', 'patient');
            endif;
    }

}
