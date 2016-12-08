<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('pontos', ['id' => false, 'primary_key' => ['']])
            ->addColumn('pontuacao', 'integer', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('quest_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('tema_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'quest_id',
                ]
            )
            ->addIndex(
                [
                    'tema_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('quests')
            ->addColumn('tema_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('pont', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('enunci', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => true,
            ])
            ->addColumn('resposta1', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('resposta2', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('respostaCorreta', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('resposta4', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('resposta5', 'string', [
                'default' => null,
                'limit' => 1000,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'tema_id',
                ]
            )
            ->create();

        $this->table('temas')
            ->addColumn('tema', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('fatormult', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('users')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('password', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('pontos')
            ->addForeignKey(
                'quest_id',
                'quests',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'tema_id',
                'temas',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('quests')
            ->addForeignKey(
                'tema_id',
                'temas',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('temas')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('pontos')
            ->dropForeignKey(
                'quest_id'
            )
            ->dropForeignKey(
                'tema_id'
            )
            ->dropForeignKey(
                'user_id'
            );

        $this->table('quests')
            ->dropForeignKey(
                'tema_id'
            );

        $this->table('temas')
            ->dropForeignKey(
                'user_id'
            );

        $this->dropTable('pontos');
        $this->dropTable('quests');
        $this->dropTable('temas');
        $this->dropTable('users');
    }
}
