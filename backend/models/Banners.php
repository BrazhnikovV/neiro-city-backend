<?php

namespace backend\models;

use Yii;
use yii\db\Query;

/**
 *
 */
class Banners 
{
    /**
     * getRandomImages -
     * 
     * @return array
     */
    public static function getRandomImages()
    {
        $query = new Query;

        $id = rand( 1, 3 );

        $query->select( '*' )
              ->from('tbl_banners')
              ->where(
                  'id=:id',
                   [':id' => $id]
                );

        $row = $query->one();

        return $row;
    }

    /**
     * countClickBanner - 
     * 
     * @param integer $id
     * @return mixed
     */
    public function getCountBannerById( $id )
    {
        $query = new Query;

        $query->select( 'Impressions' )
              ->from('tbl_banners')
              ->where(
                  'id=:id',
                   [':id' => $id]
                );

        $row = $query->one();

        return $row;
    }

    /**
     * countClickBanner - 
     * 
     * @param integer $id
     * @return mixed
     */
    public function countClickBanner( $id )
    {
        $old_impressions = $this->getCountBannerById( $id );
        $new_impressions = $old_impressions['Impressions'] + 1;

        $command = Yii::$app->db->createCommand();
        $result = $command->update( 'tbl_banners',
            ['Impressions' => $new_impressions],
            'id = ' . $id )->execute();

        return $result;
    }
}
