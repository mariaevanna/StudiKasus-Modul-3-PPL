<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MenghapusNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testMenghapusNotes(): void
    {
        $this->browse(callback: function (Browser $browser): void{
            $browser->visit('/')
                    ->assertSee('Log in')
                    ->clicklink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'mariafirsta@gmail.com')
                    ->type('password','password12345')
                    ->check('remember')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Notes')
                    ->clicklink('Notes')
                    ->assertPathIs('/notes')
                    ->press('Delete');
        });
    }
}
