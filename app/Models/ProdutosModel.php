<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ProdutosModel extends Model{
        protected $table           = 'produtos';
        protected $primaryKey      = "ID";
        protected $allowedFields   = ["NOME", "VALOR"];
        protected $validationRules = [
            "NOME"  => "required|min_length[3]|is_unique[produtos.NOME]"
        ];
    }