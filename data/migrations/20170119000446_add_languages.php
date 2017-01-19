<?php

use Phinx\Migration\AbstractMigration;

class AddLanguages extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');

        $users->addColumn('languages', 'text', ['null' => true])->update();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $users = $this->table('users');

        $users->removeColumn('languages')->update();
    }
}
