<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /**
     * @test
     */
    public function verifica_site_raiz_correto()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /**
     * @test
     */
    public function verifica_função_login_funcionando(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'test@test.com')
                    ->type('password', '@&jk~}tEJ2>d_t&')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }

    /**
     * @test
     */
    public function verifica_função_registrar_funcionando(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'User Test')
                    ->type('email', 'userTest@test.com')
                    ->type('password', '@&jk~}tEJ2>d_t&')
                    ->type('password_confirmation', '@&jk~}tEJ2>d_t&')
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->assertsee('Dashboard');
        });
    }
}
