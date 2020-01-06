<?php

/**
 * erpCore - Configuração
 * Author: Jansen Felipe
 */

return [

    'repositories' => [

        'CidadeRepository' => \erpCore\Eloquent\Repositories\CidadeEloquentRepository::class,
        'ClienteRepository' => \erpCore\Eloquent\Repositories\ClienteEloquentRepository::class,
        'ContatoRepository' => \erpCore\Eloquent\Repositories\ContatoEloquentRepository::class,
        'EmpresaRepository' => \erpCore\Eloquent\Repositories\EmpresaEloquentRepository::class,
        'EnderecoRepository' => \erpCore\Eloquent\Repositories\EnderecoEloquentRepository::class,
        'FornecedorRepository' => \erpCore\Eloquent\Repositories\FornecedorEloquentRepository::class,
        'PessoaRepository' => \erpCore\Eloquent\Repositories\PessoaEloquentRepository::class,
        'ProdutoRepository' => \erpCore\Eloquent\Repositories\ProdutoEloquentRepository::class,
        'UnidadeMedidaRepository' => \erpCore\Eloquent\Repositories\UnidadeMedidaEloquentRepository::class,
        'UnidadeMedidaFatorRepository' => \erpCore\Eloquent\Repositories\UnidadeMedidaFatorEloquentRepository::class,
        'UnidadeMedidaFatorSinonimoRepository' => \erpCore\Eloquent\Repositories\UnidadeMedidaFatorSinonimoEloquentRepository::class,
        'NotaFiscalRepository' => \erpCore\Eloquent\Repositories\NotaFiscalEloquentRepository::class,
        'NotaFiscalItemRepository' => \erpCore\Eloquent\Repositories\NotaFiscalItemEloquentRepository::class,
        'FaturaRepository' => \erpCore\Eloquent\Repositories\FaturaEloquentRepository::class,
    ]
];