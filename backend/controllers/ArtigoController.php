<?php

namespace backend\controllers;

use Yii;
use common\models\Artigo;
use common\models\TipoArtigo;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * ArtigoController implements the CRUD actions for Artigo model.
 */
class ArtigoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['update', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['view', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['delete', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['create', 'index'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Artigo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $artigos = Artigo::find()->all();

            return $this->render('index', [
                'artigos' => $artigos,
            ]);

    }

    /**
     * Displays a single Artigo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $artigos = Artigo::find()->all();

        return $this->render('index', [
            'artigos' => $artigos,

        ]);
    }

    /**
     * Creates a new Artigo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Artigo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $artigoId = $model->nome;
            $image = UploadedFile::getInstance($model, 'imagem_artigo');
            $imgName = 'artigo_' . $artigoId . '.' . $image->getExtension();
            $image->saveAs(Yii::getAlias('@artigoImgPath') . '/' . $imgName);
            $model->imagem_artigo = $imgName;
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Artigo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) &&  $model->save()) {

            $artigoId = $model->nome;
            $image = UploadedFile::getInstance($model, 'imagem_artigo');
            $imgName = 'artigo_' .$artigoId . '.' . $image->getExtension();
            $image->saveAs(Yii::getAlias('@artigoImgPath') . '/' . $imgName);
            $model->imagem_artigo = $imgName;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Artigo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Artigo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Artigo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Artigo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
