<?php

use RedBeanPHP\R;
use App\AcessoRestrito\Domain\Entity\Voluntaria;
use App\AcessoRestrito\Infrastructure\Repository\VoluntariaRepository;
use App\Services\ObjectMapperService;

class SalvarTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
      R::addDatabase('SalvarTest0','mysql:host=127.0.0.1;dbname=test', 'root', '');
      R::selectDatabase( 'SalvarTest0' );
    }

    protected function _after()
    {
      R::exec( 'DELETE FROM voluntaria WHERE nome_voluntaria = "MockName"' );
    }

    // tests
    public function testSomeFeature()
    {
      $v= R::dispense('voluntaria');
      $voluntaria= new Voluntaria();
      $voluntaria->id= $v->id;
      $voluntaria->telefone= "2132";
      $voluntaria->nome_voluntaria= "MockName";
      $voluntaria->data_nascimento= "05/06/1999";
      $voluntaria->sexo= "f";
      $voluntaria->celular= " ";
      $voluntaria->rua= " ";
      $voluntaria->numero= "4";
      $voluntaria->rg= "43534";
      $voluntaria->cpf= "45454354";
      $voluntaria->profissao= " ";
      $voluntaria->dia_semana_disponivel= " ";
      $voluntaria->horario_disponivel= " ";
      $voluntaria->habilidades= " ";
      $voluntaria->usuario= " ";
      $voluntaria->senha= " ";
      $voluntaria->nivelAcesso= " ";
      $voluntaria->status= " ";

      $v= ObjectMapperService::map($v, $voluntaria);

      $id = R::store($v);
    }
}
