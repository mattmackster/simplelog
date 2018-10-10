<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExerciselogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExerciselogsTable Test Case
 */
class ExerciselogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExerciselogsTable
     */
    public $Exerciselogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.exerciselogs',
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
        $config = TableRegistry::getTableLocator()->exists('Exerciselogs') ? [] : ['className' => ExerciselogsTable::class];
        $this->Exerciselogs = TableRegistry::getTableLocator()->get('Exerciselogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Exerciselogs);

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
