<?php

namespace Alura\Solid\Model;
use Alura\Solid\Model\Slug;

class Video 
{
    /** @var bool */
    protected $assistido = false;
    /** @var string */
    protected $nome;
    /** @var \DateInterval */
    protected $duracao;

    protected $slug;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = \DateInterval::createFromDateString('5 minutes');
        $this->slug = new Slug($this->nome);
        //  die(var_dump($this->duracao));
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
        //  return 10;
    }

    public function recuperarUrl(): string
    {        
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->slug]);
    }
}
