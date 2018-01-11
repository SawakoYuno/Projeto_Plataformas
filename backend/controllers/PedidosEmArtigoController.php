<?php

namespace backend\controllers;

use common\models\Pedidos;
use Yii;
use common\models\PedidosEmArtigo;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * PedidosEmArtigoController implements the CRUD actions for PedidosEmArtigo model.
 */
class PedidosEmArtigoController extends Controller
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
                        'actions' => ['create', 'index', 'mudarafazer', 'mudaracabado'],
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
     * Lists all PedidosEmArtigo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $pedidosemartigo = PedidosEmArtigo::find()
            ->join('JOIN', 'pedidos', 'pedidos.id = pedidos_em_artigo.id_pedidos')
            ->where('pedidos.id_estado > 1 ')
            ->all();
        return $this->render('index', [
            'pedidosemartigo' => $pedidosemartigo,
        ]);
    }

    /**
     * Displays a single PedidosEmArtigo model.
     * @param integer $id_artigo
     * @param integer $id_pedidos
     * @return mixed
     */
    public function actionView($id_artigo, $id_pedidos)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_artigo, $id_pedidos),
        ]);
    }

    /**
     * Creates a new PedidosEmArtigo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PedidosEmArtigo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_artigo' => $model->id_artigo, 'id_pedidos' => $model->id_pedidos]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PedidosEmArtigo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_artigo
     * @param integer $id_pedidos
     * @return mixed
     */
    public function actionUpdate($id_artigo, $id_pedidos)
    {
        $model = $this->findModel($id_artigo, $id_pedidos);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_artigo' => $model->id_artigo, 'id_pedidos' => $model->id_pedidos]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PedidosEmArtigo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_artigo
     * @param integer $id_pedidos
     * @return mixed
     */
    public function actionDelete($id_artigo, $id_pedidos)
    {
        $this->findModel($id_artigo, $id_pedidos)->delete();

        return $this->redirect(['index']);
    }

    public function actionMudarafazer($id)
    {
        $pedidos = Pedidos::findOne(['id'=>$id]);
        $estado = "";
        if ($pedidos)
        {
                $pedidos->id_estado = 3;
                $estado = "A Fazer";

            $pedidos->save(false);
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $estado;
    }

    public function actionMudaracabado($id)
    {
        $pedidos = Pedidos::findOne(['id'=>$id]);
        $estado = "";
        if ($pedidos)
        {
                $pedidos->id_estado = 1;
                $estado = "Acabado";

            $pedidos->save(false);
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $estado;
    }

    /**
     * Finds the PedidosEmArtigo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_artigo
     * @param integer $id_pedidos
     * @return PedidosEmArtigo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_artigo, $id_pedidos)
    {
        if (($model = PedidosEmArtigo::findOne(['id_artigo' => $id_artigo, 'id_pedidos' => $id_pedidos])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
