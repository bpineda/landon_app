<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /*public function testTitlesModelCount()
    {
        $titles = new Title;
        //$value = 1;
        //$this->assertTrue( 1 === $value, 'Value should be 1' );
        $this->assertTrue( count( $titles->all() ) === 6, 'It should have 6 titles');
    }

    public function testLastTitlesShouldBeProfessor()
    {
        $titles = new Title;
        $titles_array = $titles->all();
        $this->assertEquals('Professor', array_pop( $titles_array ), 'Titles last element should be Professor' );
    }*/

}
