<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'tipo',
        'razaoSocial',
        'nomeFantasia',
        'cnpjCpf',
        'ieRg',
        'cep',
        'endereco',
        'enderecoNumero',
        'enderecoComplemento',
        'enderecoBairro',
        'enderecoCidade',
        'enderecoCodCidade',
        'enderecoEstado',
        'enderecoCodEstado',
        'enderecoPais',
        'enderecoCodPais',
        'emailPrincipal'
    ];

    protected $table = 'pessoas';
}
