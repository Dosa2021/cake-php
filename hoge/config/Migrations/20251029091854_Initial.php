<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('posts')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('body', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->table('posts')->drop()->save();
    }
}
