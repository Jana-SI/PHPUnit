<?php

use PHPUnit\Framework\TestCase;

class ExportadorDePessoaEmXMLTest extends TestCase
{
    public function testExportarPessoaEmXmlDeveFuncionar()
    {
        // dubles de testes
        $pessoa = $this->createStub(Pessoa::class);

        $pessoa->method('idade')->willReturn(30);
        $pessoa->method('nome')->willReturn('Jana');

        $exportador = new ExportadorDePessoaEmXml($pessoa);

        $xml = $exportador->exportaEmXml();

        $conteudoEsperado = '<pessoa>
            <nome>Jana</nome>
            <idade>30</idade>
        </pessoa>';

        /* $this->assertTrue(condition: $conteudoEsperado === $xml); */
        $this->assertXmlStringEqualsXmlString($conteudoEsperado, $xml);
    }
}
?>