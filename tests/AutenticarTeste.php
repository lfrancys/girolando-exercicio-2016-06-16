<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AutenticarTeste extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
/*
A home exibe um formulário de login?
- Se eu preencher um telefone em branco no login vou ser devolvido pra home?
- Se eu preencher uma senha em branco no login vou ser devolvido para home?
- Se eu preencher um telefone e senha inválidos vou ser devolvido para a home com erro na session?
- Se eu preencher um telefone e senha válidos vou ser redirecionado para /dashboard e ver o "Bem vindo FULANO DE TAL" nessa tela?
*/

    public function testLoginSemTelefone()
    {
        \Session::flush();
        $this->visit('/')
            ->type('', 'telefone')
            ->type('12345', 'senha')
            ->press('Entrar')
            ->see('/');
    }

    public function testLoginSemSenha()
    {
        \Session::flush();
        $this->visit('/')
            ->type('999999999', 'telefone')
            ->type('', 'senha')
            ->press('Entrar')
            ->see('/');
    }

    public function testLoginSenhaInvalidos()
    {
        \Session::flush();
        $this->visit('/')
            ->type('999999999', 'telefone')
            ->type('ssssss', 'senha')
            ->press('Entrar')
            ->see('/');
    }

    public function testLoginSenhaValidos()
    {
        \Session::flush();

        $usuario = \Segundo\Models\Pessoa::create([
            'nomeUsuario' => str_random('10'),
            'emailUsuario' => str_random(5).'@gmail.com',
            'telefoneUsuario' => random_int(100000000, 999999999),
            'password' => bcrypt('girolando')
        ]);

        $this->visit('/')
            ->type($usuario->telefoneUsuario, 'telefone')
            ->type($usuario->password, 'senha')
            ->press('Entrar')
            //->be('auth')
            ->seePageIs('dashboard')
            ->see('Bem vindo '.$usuario->nomeUsuario.' !');
    }
}
