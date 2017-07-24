<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TarifsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TarifsTable Test Case
 */
class TarifsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TarifsTable
     */
    public $Tarifs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tarifs',
        'app.files',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tarifs') ? [] : ['className' => TarifsTable::class];
        $this->Tarifs = TableRegistry::get('Tarifs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tarifs);

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
}
