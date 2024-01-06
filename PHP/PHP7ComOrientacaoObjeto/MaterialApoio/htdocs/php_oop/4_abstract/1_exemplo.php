<?php
class Pessoa
{
	public $nome;
	protected $sexo;
	private $idade;
	private $cpf;
}
$pessoa1 = new Pessoa;
echo "<pre>";
var_dump($pessoa1);
echo "<pre>";
###########################################
echo "<hr>";
class Aluno extends Pessoa
{
	public $curso = ['Programação Web'];

}
$aluno1 = new Aluno;
echo "<pre>";
var_dump($aluno1);
echo "<pre>";
###########################################
echo "<hr>";
class Professor extends Pessoa
{
	public $materias = ['PHP','Mysql','JS'];

}
$prof1 = new Professor;
echo "<pre>";
var_dump($prof1);
echo "<pre>";
