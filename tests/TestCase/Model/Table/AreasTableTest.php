<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasTable Test Case
 */
class AreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasTable
     */
    public $Areas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Areas',
        'app.ProductoAreas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Areas') ? [] : ['className' => AreasTable::class];
        $this->Areas = TableRegistry::getTableLocator()->get('Areas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Areas);

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
