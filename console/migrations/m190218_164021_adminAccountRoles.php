<?php

use yii\db\Migration;
use common\models\User;
/**
 * Class m190218_164021_adminAccountRoles
 */
class m190218_164021_adminAccountRoles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $user = new User();
        $user->username = "admin";
        $user->email = "admin@gmail.com";
        $user->setPassword("admin");
        $user->generateAuthKey();
        $user->save(false);

        $adminRole = $auth->getRole('admin');
        $auth->assign($adminRole, $user->getId());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190218_164021_adminAccountRoles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190218_164021_adminAccountRoles cannot be reverted.\n";

        return false;
    }
    */
}
