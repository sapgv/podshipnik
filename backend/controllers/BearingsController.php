<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 18.07.16
 * Time: 0:00
 */

namespace backend\controllers;


use common\models\Bearings;
use common\models\BearingsSearch;
use yii\web\Controller;
use Yii;

class BearingsController extends Controller
{

    public function actionIndex()
    {

        $searchModel = new BearingsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render(
            'index', [
                'searchModel'  => $searchModel,
                'dataProvider' => $dataProvider,
            ]
        );

    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {

        $model = new Bearings();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect([ 'view', 'id' => $model->id ]);
        }
        else {
            return $this->render(
                'create', [
                    'model' => $model,
                ]
            );
        }
    }

    public function actionView($id)
    {

        $model = Bearings::findOne(['id'=>$id]);

        return $this->render('view', ['model'=>$model]);

    }
}