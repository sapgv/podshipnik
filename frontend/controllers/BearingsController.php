<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 17.07.16
 * Time: 16:33
 */

namespace frontend\controllers;


use common\models\Bearings;
use yii\web\Controller;

class BearingsController extends Controller
{

    public function actionView($id)
    {

        $model = Bearings::findOne(['id'=>$id]);

        return $this->render('view',
            ['model'=>$model]
        );

    }

    public function actionCreate()
    {

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

}