<?php

    namespace App\Controllers;

    use CodeIgniter\RESTful\ResourceController;
use Exception;

    class Produtos extends ResourceController{
        private $produtoModel;
        private $token = "1010";

        public function __construct()
        {
            $this->produtoModel = new \App\Models\ProdutosModel();            
        }

        //VALIDACAO TOKEN
        private function validarToken(){
            return $this->request->getHeaderLine('token') == $this->token;
        }

        //SERVICO RETORNA TODOS OS PRODUTOS
        public function listarProdutos(){
            $data = $this->produtoModel->findAll();

            return $this->response->setJSON($data);
        }

        //SERVICO INSERIR NOVO PRODUTO
        public function inserirProduto(){
            $response = $novoProduto = [];

            //VALIDACAO TOKEN
            if($this->validarToken() == true){
                $novoProduto["NOME"]  = $this->request->getPost('nome');
                $novoProduto["VALOR"] = $this->request->getPost('valor');

                try{
                    if($this->produtoModel->insert($novoProduto)){
                        $response = [
                            "response" => "success",
                            "msg"      => "Produto inserido!"
                        ];
                    }
                    else{
                        $response = [
                            "response" => "error",
                            "msg"      => "Erro ao inserir produto!",
                            "errors"   => $this->produtoModel->errors()  
                        ];
                    }
                }
                catch(Exception $e){
                    $response = [
                        "response" => "error",
                        "msg"      => "Erro ao inserir produto!",
                        "errors"   => [
                            "exception" => $e->getMessage()    
                        ]
                    ];
                }
            }
            else{
                $response = [
                    "response" => "error",
                    "msg"      => "Token inválido!"
                ];
            }

            return $this->response->setJSON($response);
        }
    }