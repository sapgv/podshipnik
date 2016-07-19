<?php
/**
 * Created by PhpStorm.
 * User: grisha.sapgv
 * Date: 19.07.16
 * Time: 0:23
 */

namespace frontend\controllers;


use common\models\Posts;
use common\models\User;
use yii\web\Controller;
use Yii;
use zxbodya\yii2\imageAttachment\ImageAttachmentAction;

class UserController extends Controller
{

    public $layout = "column2";

    public function actions()
    {
        return [
            'imgAttachApi' => [
                'class' => ImageAttachmentAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'user' => User::className()
                ]
            ],
        ];
    }
    public function actionIndex($id)
    {
        $model = User::findOne(['id'=>$id]);

            return $this->render(
                'index', ['model' => $model]
            );


    }
    public function actionUpdate($id)
    {
        $model = User::findOne(['id'=>$id]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }
        else {
            return $this->render(
                'update', ['model' => $model]
            );
        }

    }

    public function actionPosts()
    {
        $posts = Posts::find()->all();
        return $this->render(
            'posts', ['models' => $posts]
        );
    }

    public function actionCreatePost()
    {

        $model = new Posts();
        $model->user_id = Yii::$app->user->id;
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect(['viewPost', 'id' => $model->id]);
            }
        }

        return $this->render('createPost', [
            'model' => $model,
        ]);
    }
}