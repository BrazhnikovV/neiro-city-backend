<?php

namespace backend\controllers;

use Yii;
use \yii\web\Controller;
use backend\models\Banners;
use backend\models\CsvForm;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     *  actions - 
     *  
     *  @access public
     *  @return array  
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * List of something 
     * @return undefined
     */
    public function actionIndex()
    {
        $banners = new Banners();
        $images  = $banners->getRandomImages();

        return $this->render( 'index', array(
            'image_id' => $images['id'],
            'image_path' => $images['img_url']
        ));
    }

    /**
     * List of something 
     * @return undefined
     */
    public function actionCsv()
    {
        $model = new CsvForm();
        $result = array();

        if ( $model->load( Yii::$app->request->post() ) ) {
            $csv_array = $this->readCsv();
            $result = $this->binary_search( $csv_array, (int)$model->id, 'id' );
        }        

        if ( file_exists( __DIR__ . '/../data/file.csv' ) ) {                        
            return $this->render( 'csv', array(
                'model'  => $model,
                'result' => $result
            ));            
        }
        else {
            if ( !$this->generateCsv() ) {
                throw new NotFoundHttpException( 'Error process file.' );
            }
        }        
    }

    /**
     * Слушает Ajax запросы
     * 
     * @return undefined
     */
    public function actionAjax()
    {
        if ( Yii::$app->request->isAjax ) {
            
            if( Yii::$app->request->post() ) {

                $post = Yii::$app->request->post();
                $id   = (int)$post['_id'];

                $banners = new Banners();
                $result  = $banners->countClickBanner( $id );

                echo json_encode( $result );
                exit();
            }
        }
    }

    /**
     * readCsv
     * 
     * @return 
     */
    private function readCsv()
    {
        $out_array = array();

        if ( ( $handle = fopen( __DIR__ . '/../data/file.csv', 'r' ) ) !== FALSE ) {

            while ( ( $data = fgetcsv( $handle, 1000, ',' ) ) !== FALSE ) {

                array_push($out_array, array(
                    'id' => (int)$data[0],
                    'data' => $data[1]
                ));                
            }
            fclose($handle);
        }

        return $out_array;        
    }

    /**
     * generateCsv
     * 
     * @return 
     */
    private function generateCsv()
    {
        $list = array ();

        for ( $i = 1; $i < 80001; $i++ ) {
            $list[$i]['id'] = $i;
            $list[$i]['data'] = rand( 1000000,9000000 );
        }

        $fp = fopen( __DIR__ . '/../data/file.csv', 'w' );

        foreach ( $list as $fields ) {
            fputcsv( $fp, $fields );
        }

        return fclose( $fp );
    }

    /**
     * Функция бинарного поиска по упорядоченному массиву
     * @param array $source_array Упорядоченный по возрастанию массив целых чисел
     * @param int $search_value Искомая величина
     * @return bool|int
     */
    public function binary_search( &$source_array, $search_value, $key ) {

        $count = count( $source_array );

        if( $count < pow( 2, 31 ) && is_int( $search_value )) {
            $start = 0;
            $end = $count - 1;

            while( true ) {
                $len = $end - $start ;
                if( $len > 2 ){
                    if( $len % 2 != 0 ) $len++;
                    $mid = (int) ( $len/2 + $start );
                }
                elseif( $len >= 0 ) {
                    $mid = $start;
                }
                else {
                    return false;
                }

                if( $source_array[$mid][$key] == $search_value ) {
                    while( ( $mid != 0 ) && ( $source_array[$mid - 1][$key] == $search_value ) )
                        $mid--;
                    return $source_array[$mid];
                }
                elseif( $source_array[$mid][$key] > $search_value ){
                    $end = $mid - 1;
                }
                else {
                    $start = $mid + 1;
                }
            }
        }
        else {
            return false;
        }
    }
}