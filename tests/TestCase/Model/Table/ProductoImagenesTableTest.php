<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoImagenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoImagenesTable Test Case
 */
class ProductoImagenesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoImagenesTable
     */
    public $ProductoImagenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProductoImagenes',
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
        $config = TableRegistry::getTableLocator()->exists('ProductoImagenes') ? [] : ['className' => ProductoImagenesTable::class];
        $this->ProductoImagenes = TableRegistry::getTableLocator()->get('ProductoImagenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductoImagenes);

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
