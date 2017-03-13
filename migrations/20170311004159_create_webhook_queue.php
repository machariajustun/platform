<?php

use Phinx\Migration\AbstractMigration;

class CreateWebhookQueue extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
      $this->table('webhook_queue')
        ->addColumn('user_id', 'integer', ['null' => false])
		    ->addColumn('post_id', 'integer', ['null' => false])
        ->addColumn('webhook_id', 'integer', ['null' => false])
  		  ->addColumn('created', 'integer', ['default' => 0])
  		  ->addForeignKey('post_id', 'posts', 'id', [
  				'delete' => 'CASCADE',
  				'update' => 'CASCADE',
  		  ])
  			->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
      $this->dropTable('webhook_queue');
    }
}