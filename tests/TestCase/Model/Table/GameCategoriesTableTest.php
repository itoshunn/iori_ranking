<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GameCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GameCategoriesTable Test Case
 */
class GameCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GameCategoriesTable
     */
    public $GameCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.game_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GameCategories') ? [] : ['className' => 'App\Model\Table\GameCategoriesTable'];
        $this->GameCategories = TableRegistry::get('GameCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GameCategories);

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
