<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TemasTable Test Case
 */
class TemasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TemasTable
     */
    public $Temas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.temas',
        'app.users',
        'app.pontos',
        'app.quests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Temas') ? [] : ['className' => 'App\Model\Table\TemasTable'];
        $this->Temas = TableRegistry::get('Temas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Temas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
