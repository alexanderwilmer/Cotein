<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoAreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoAreasTable Test Case
 */
class ProductoAreasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoAreasTable
     */
    public $ProductoAreas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductoAreas',
        'app.Areas',
        'app.Productos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductoAreas') ? [] : ['className' => ProductoAreasTable::class];
        $this->ProductoAreas = TableRegistry::getTableLocator()->get('ProductoAreas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductoAreas);

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
