<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccesslevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccesslevelsTable Test Case
 */
class AccesslevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccesslevelsTable
     */
    public $Accesslevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accesslevels',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Accesslevels') ? [] : ['className' => AccesslevelsTable::class];
        $this->Accesslevels = TableRegistry::get('Accesslevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accesslevels);

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
