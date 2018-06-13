<?php
use app\models\user\UserRecord;
use yii\db\Migration;

/**
 * Class m180121_115743_create_rbac_options
 */
class m180121_115743_create_rbac_options extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $rbac  = \Yii::$app->authManager;
        $guest = $rbac->createRole('guest');
        $rbac->add($guest);

        $user = $rbac->createRole('user');
        $user->description = 'Can use the query UI and nothing else';
        $rbac->add($user);

        $manager = $rbac->createRole('manager');
        $manager->description = 'Can manage entities in database, but no users';
        $rbac->add($manager);

        $admin = $rbac->createRole('admin');
        $admin->description = 'Can do anything including managing users';
        $rbac->add($admin);

        $rbac->addChild($admin,   $manager);
        $rbac->addChild($manager, $user);
        $rbac->addChild($user,    $guest);

        $rbac->assign($user,    3/*UserRecord::findOne(['username' => 'JoeUser'])->id*/);
        $rbac->assign($manager, 2/*UserRecord::findOne(['username' => 'AnnieManager'])->id*/);
        $rbac->assign($admin,   1/*UserRecord::findOne(['username' => 'RobAdmin'])->id*/);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {        
        $manager = \Yii::$app->authManager;
        $manager->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180121_115743_create_rbac_options cannot be reverted.\n";

        return false;
    }
    */
}
