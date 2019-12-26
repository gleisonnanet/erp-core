<?php

use gleisonnanet\Utils\Utils;
use erp-core\Contracts\Repositories\CidadeRepository;
use erp-core\Contracts\Repositories\ClienteRepository;
use erp-core\Contracts\Repositories\ContatoRepository;
use erp-core\Contracts\Repositories\EmpresaRepository;
use erp-core\Contracts\Repositories\EnderecoRepository;
use erp-core\Contracts\Repositories\FaturaRepository;
use erp-core\Contracts\Repositories\FornecedorRepository;
use erp-core\Contracts\Repositories\NotaFiscalItemRepository;
use erp-core\Contracts\Repositories\NotaFiscalRepository;
use erp-core\Contracts\Repositories\PessoaRepository;
use erp-core\Contracts\Repositories\ProdutoRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaRepository;
use erp-core\Ordination\Facade;
use erp-core\Providers\erp-coreServiceProvider;
use Orchestra\Testbench\TestCase;

class erp-coreServiceProviderTest extends TestCase
{

    /**
     * Registrando ServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [erp-coreServiceProvider::class];
    }

    /**
     * Verificando se construiu os repositórios
     */
    public function testConstrucaoRepositorios()
    {
        $this->assertInstanceOf(CidadeRepository::class, $this->app[config('erp-core.repositories.CidadeRepository')]);
        $this->assertInstanceOf(ClienteRepository::class, $this->app[config('erp-core.repositories.ClienteRepository')]);
        $this->assertInstanceOf(ContatoRepository::class, $this->app[config('erp-core.repositories.ContatoRepository')]);
        $this->assertInstanceOf(EmpresaRepository::class, $this->app[config('erp-core.repositories.EmpresaRepository')]);
        $this->assertInstanceOf(EnderecoRepository::class, $this->app[config('erp-core.repositories.EnderecoRepository')]);
        $this->assertInstanceOf(FornecedorRepository::class, $this->app[config('erp-core.repositories.FornecedorRepository')]);
        $this->assertInstanceOf(PessoaRepository::class, $this->app[config('erp-core.repositories.PessoaRepository')]);
        $this->assertInstanceOf(ProdutoRepository::class, $this->app[config('erp-core.repositories.ProdutoRepository')]);
        $this->assertInstanceOf(UnidadeMedidaRepository::class, $this->app[config('erp-core.repositories.UnidadeMedidaRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorRepository::class, $this->app[config('erp-core.repositories.UnidadeMedidaFatorRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorSinonimoRepository::class, $this->app[config('erp-core.repositories.UnidadeMedidaFatorSinonimoRepository')]);
        $this->assertInstanceOf(NotaFiscalRepository::class, $this->app[config('erp-core.repositories.NotaFiscalRepository')]);
        $this->assertInstanceOf(NotaFiscalItemRepository::class, $this->app[config('erp-core.repositories.NotaFiscalItemRepository')]);
        $this->assertInstanceOf(FaturaRepository::class, $this->app[config('erp-core.repositories.FaturaRepository')]);
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