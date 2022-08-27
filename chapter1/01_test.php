<?php
declare(strict_types=1);
// test
use Phinx\Migration\AbstractMigration;

final class CreateStoreSystemSettings extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('store_system_settings');
        $table->addColumn('store_id', 'integer', [
            'null' => false,
            'signed' => false,
            'comment' => '加盟店ID',
        ])->addColumn('use_price_change_by_age', 'smallinteger', [
            'null' => false,
            'default' => 0,
            'comment' => '年齢による金額変更機能(0: OFF, 1: ON)',
        ])->create();
    }
}
