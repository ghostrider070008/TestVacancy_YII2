<?php

use yii\db\Migration;

/**
 * Class m200129_135521_CreateTableBook
 */
class m200129_135521_CreateTableBook extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200129_135521_CreateTableBook cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200129_135521_CreateTableBook cannot be reverted.\n";

        return false;
    }
    */
}
