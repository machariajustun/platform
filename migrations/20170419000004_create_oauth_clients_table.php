<?php

use Phinx\Migration\AbstractMigration;

class CreateOauthClientsTable extends AbstractMigration
{
    /**
     * Create oauth_clients
     */
    public function change()
    {
        $this->table('oauth_clients')
            // Using phinx default ID, so its signed unlike in default passport migrations
            ->addColumn('user_id', 'integer', ['null' => true])
            ->addColumn('name', 'string')
            ->addColumn('secret', 'string', ['limit' => 100])
            ->addColumn('redirect', 'text')
            ->addColumn('personal_access_client', 'boolean')
            ->addColumn('password_client', 'boolean')
            ->addColumn('revoked', 'boolean')
            ->addColumn('created_at', 'timestamp', ['null' => true])
            ->addColumn('updated_at', 'timestamp', ['null' => true])
            ->addIndex(['user_id'])
            ->create();
    }
}
