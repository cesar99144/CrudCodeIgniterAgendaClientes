<?php

namespace App\Controllers;

class Agenda extends BaseController{

    public function listar(){

        $clientesModel = new \App\Models\ClientesModel;
        $data['clientes'] = $clientesModel->find();

        return view('painelAgenda', $data);

    }

    public function adicionar(){

        $data['mensagemRetorno'] = '';

        if($this->request->getMethod() === 'post'){

            $clientesModel = new \App\Models\ClientesModel;
            $clientesModel->set('cnpj', $this->request->getPost('cnpj'));
            $clientesModel->set('razao', $this->request->getPost('razao'));
            $clientesModel->set('fantasia', $this->request->getPost('fantasia'));
            $clientesModel->set('cidade', $this->request->getPost('cidade'));
            $clientesModel->set('estado', $this->request->getPost('estado'));
            $clientesModel->set('celular', $this->request->getPost('celular'));

            if($clientesModel->insert()){

                //Grava retorno
                $data['mensagemRetorno'] = 'Cliente cadastrado com sucesso';

                //Lista dados atualizados
                $data['clientes'] = $clientesModel->find();

                return '<script>window.location.href = "'.base_url("/agenda/listar").'";</script>';

            }else{

                $data['mensagemRetorno'] = 'Erro ao tentar adicionar. Verifique os dados e tente novamente';
            }
        }

        return view('adicionarCliente');

    }

    public function editar($id){

        $clientesModel = new \App\Models\ClientesModel;
        //Pesquisando os dados
        $cliente = $clientesModel->find($id);

        if($this->request->getMethod() === 'post'){

            $cliente->cnpj = $this->request->getPost('Editcnpj');
            $cliente->razao = $this->request->getPost('Editrazao');
            $cliente->fantasia = $this->request->getPost('Editfantasia');
            $cliente->cidade = $this->request->getPost('Editcidade');
            $cliente->estado = $this->request->getPost('Editestado');
            $cliente->celular = $this->request->getPost('Editcelular');

            if($clientesModel->update($id, $cliente)){

                return '<script>window.location.href = "'.base_url("/agenda/listar").'";</script>';
 
            }else{

                //return '<script>window.location.href = "'.base_url("/agenda/listar").'";</script>';
 
            }
        }

        $data['cliente'] = $cliente;

        return view('editarCliente', $data);

        
    }

    public function excluir($id){

        $clientesModel = new \App\Models\ClientesModel;


        if($clientesModel->delete($id)):

            return '<script>window.location.href = "'.base_url("/agenda/listar").'";</script>';

        else:

            return '<script>alet("Erro ao tentar exlcuir!");window.location.href = "'.base_url("/agenda/listar").'";</script>';

        endif;

        return '<script>window.location.href = "'.base_url("/agenda/listar").'";</script>';

    }
}