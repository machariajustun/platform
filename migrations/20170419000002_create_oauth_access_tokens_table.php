<?php

use Phinx\Migration\AbstractMigration;

class CreateOauthAccessTokensTable extends AbstractMigration
{
    /**
     * Create oauth_access_tokens
     */
    public function change()
    {
        $this->table('oauth_access_tokens', [
                'id' => false,
                'primary_key' => 'id',
            ])
            ->addColumn('id', 'string', ['limit' => 100])
            ->addColumn('user_id', 'integer')
            ->addColumn('client_id', 'integer')
            ->addColumn('name', 'string', ['null' => true])
            ->addColumn('scopes', 'text', ['null' => true])
            ->addColumn('revoked', 'boolean')
            ->addColumn('expires_at', 'datetime', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['null' => true])
            ->addColumn('updated_at', 'timestamp', ['null' => true])
            ->create();
    }
}
