<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestsTable Test Case
 */
class QuestsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestsTable
     */
    public $Quests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quests',
        'app.temas',
        'app.users',
        'app.pontos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Quests') ? [] : ['className' => 'App\Model\Table\QuestsTable'];
        $this->Quests = TableRegistry::get('Quests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quests);

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
