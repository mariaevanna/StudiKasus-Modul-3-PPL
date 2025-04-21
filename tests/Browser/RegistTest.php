<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegist(): void
    {
        $this->browse(callback: function (Browser $browser): void{
            $browser->visit('/')
                    ->assertSee('Register')
                    ->clicklink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'maria')
                    ->type('email', 'mariafirsta@gmail.com')
                    ->type('password', 'password12345')
                    ->type('password_confirmation', 'password12345')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
