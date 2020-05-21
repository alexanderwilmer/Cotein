<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogrosTable Test Case
 */
class LogrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogrosTable
     */
    public $Logros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Logros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Logros') ? [] : ['className' => LogrosTable::class];
        $this->Logros = TableRegistry::getTableLocator()->get('Logros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logros);

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
