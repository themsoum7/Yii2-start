<?php

use yii\db\Migration;
use common\models\User;
/**
 * Class m190218_171446_AccountRoles
 */
class m190218_171446_AccountRoles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $merchandiser = $auth->createRole('merchandiser');
        $auth->add($merchandiser);

        $contentManager = $auth->createRole('contentManager');
        $auth->add($contentManager);

        $marketer = $auth->createRole('marketer');
        $auth->add($marketer);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190218_171446_AccountRoles cannot be reverted.\n";
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190218_171446_AccountRoles cannot be reverted.\n";

        return false;
    }
    */
}
