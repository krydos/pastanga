<?php

class SiteController extends Controller
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

    /**
     * action for saving pasted text
     *
     * @return string $link or false
     */
    public function actionSave()
    {
        $text = new Text;

        /* generate unique link */
        $link = Text::generateLink();
        $text->attributes = array(
            'text'   => Yii::app()->request->getParam('text', ''),
            'type' => Yii::app()->request->getParam('syntax', ''),
            'link'   => $link,
        );

        if($text->save())
            echo Yii::app()->getBaseUrl(true) . '/' . $link;
        else
            return false;
    }

    /**
     * show page for pasted text
     *
     * @param string $link_text
     *
     * @throws CHttpException 404 if link does not exist
     *
     * @return void
     */
    public function actionShow($link_text)
    {
        $text_model = Text::model()->find(array(
            'condition' => 'link = :link_text',
            'params' => array(
                ':link_text' => $link_text,
            ),
        ));

        if($text_model == null)
            throw new CHttpException(404);
        else
            $this->render('view_text', array(
                'model' => $text_model
            ));
    }

    /**
     * action for backward compatibility with old version of pastanga
     *
     * @param string $slug
     *
     * @throws CHttpException 404 if slug does not exist
     *
     * @return void
     */
    public function actionBc($slug)
    {
        /* create criteria */
        $criteria = new CDbCriteria;
        $criteria->compare('link', $slug, true);

        $text_model = Text::model()->find($criteria);

        if($text_model == null)
            throw new CHttpException(404);
        else
            $this->render('view_text', array(
                'model' => $text_model
            ));
    }
}