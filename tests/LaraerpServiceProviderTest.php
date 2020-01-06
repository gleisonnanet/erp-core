<?php

use gleisonnanet\Utils\Utils;
use erpcore\Contracts\Repositories\CidadeRepository;
use erpcore\Contracts\Repositories\ClienteRepository;
use erpcore\Contracts\Repositories\ContatoRepository;
use erpcore\Contracts\Repositories\EmpresaRepository;
use erpcore\Contracts\Repositories\EnderecoRepository;
use erpcore\Contracts\Repositories\FaturaRepository;
use erpcore\Contracts\Repositories\FornecedorRepository;
use erpcore\Contracts\Repositories\NotaFiscalItemRepository;
use erpcore\Contracts\Repositories\NotaFiscalRepository;
use erpcore\Contracts\Repositories\PessoaRepository;
use erpcore\Contracts\Repositories\ProdutoRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaRepository;
use erpcore\Ordination\Facade;
use erpcore\Providers\erpcoreServiceProvider;
use Orchestra\Testbench\TestCase;

class erpcoreServiceProviderTest extends TestCase
{

    /**
     * Registrando ServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [erpcoreServiceProvider::class];
    }

    /**
     * Verificando se construiu os repositórios
     */
    public function testConstrucaoRepositorios()
    {
        $this->assertInstanceOf(CidadeRepository::class, $this->app[config('erpcore.repositories.CidadeRepository')]);
        $this->assertInstanceOf(ClienteRepository::class, $this->app[config('erpcore.repositories.ClienteRepository')]);
        $this->assertInstanceOf(ContatoRepository::class, $this->app[config('erpcore.repositories.ContatoRepository')]);
        $this->assertInstanceOf(EmpresaRepository::class, $this->app[config('erpcore.repositories.EmpresaRepository')]);
        $this->assertInstanceOf(EnderecoRepository::class, $this->app[config('erpcore.repositories.EnderecoRepository')]);
        $this->assertInstanceOf(FornecedorRepository::class, $this->app[config('erpcore.repositories.FornecedorRepository')]);
        $this->assertInstanceOf(PessoaRepository::class, $this->app[config('erpcore.repositories.PessoaRepository')]);
        $this->assertInstanceOf(ProdutoRepository::class, $this->app[config('erpcore.repositories.ProdutoRepository')]);
        $this->assertInstanceOf(UnidadeMedidaRepository::class, $this->app[config('erpcore.repositories.UnidadeMedidaRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorRepository::class, $this->app[config('erpcore.repositories.UnidadeMedidaFatorRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorSinonimoRepository::class, $this->app[config('erpcore.repositories.UnidadeMedidaFatorSinonimoRepository')]);
        $this->assertInstanceOf(NotaFiscalRepository::class, $this->app[config('erpcore.repositories.NotaFiscalRepository')]);
        $this->assertInstanceOf(NotaFiscalItemRepository::class, $this->app[config('erpcore.repositories.NotaFiscalItemRepository')]);
        $this->assertInstanceOf(FaturaRepository::class, $this->app[config('erpcore.repositories.FaturaRepository')]);
    }

    /**
     * Verificando contrução dos alias
     */
    public function testConstrucaoAlias()
    {
        $this->assertInstanceOf(Utils::class, $this->app['Utils']);
        $this->assertInstanceOf(Facade::class, $this->app['Order']);
    }

}