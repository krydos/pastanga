<?php
/**
 * This file contain only one class. SiteController.
 *
 * @author Ruslan (KryDos) Bekenev <furyinbox@gmail.com>
 */

/**
 * site controller. default controller for this site
 *
 * @author Ruslan (KryDos) Bekenev <furyinbox@gmail.com>
 */
class SiteController extends Controller
{

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     *
     * @return void
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     *
     * @return void
     */
    public function actionError()
    {
        if ($error=Yii::app()->errorHandler->error) {
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
        /**
         * craete instance of the Text class
         */
        $text = new Text;

        /**
         * generate unique link
         */
        $link = Text::generateLink();

        /**
         * fill all required attributes
         */
        $text->attributes = array(
            'text'   => Yii::app()->request->getParam('text', ''),
            'type' => Yii::app()->request->getParam('syntax', ''),
            'link'   => $link,
        );

        /**
         * trying to save the model to DB
         * if can't then return false (for ajax)
         */
        if ($text->save())
            echo Yii::app()->getBaseUrl(true) . '/' . $link;
        else
            return false;
    }

    /**
     * show page for pasted text
     *
     * @param string $link_text link to the pasted object
     *
     * @throws CHttpException 404 if link does not exist
     *
     * @return void
     */
    public function actionShow($link_text)
    {
        /**
         * trying to find the text by link
         */
        $text_model = Text::model()->find(array(
            'condition' => 'link = :link_text',
            'params' => array(
                ':link_text' => $link_text,
            ),
        ));

        /**
         * if that link is not in DB then show 404 page
         */
        if($text_model == null)
            throw new CHttpException(404);

        /**
         * if object is found then show it
         */
        else
            $this->render('view_text', array(
                'model' => $text_model
            ));
    }

    /**
     * action for backward compatibility with old version of pastanga
     *
     * @param string $slug slug is like link
     *
     * @throws CHttpException 404 if slug does not exist
     *
     * @return void
     */
    public function actionBc($slug)
    {
        /**
         * create and fill the CDbCriteria object
         */
        $criteria = new CDbCriteria;
        $criteria->compare('link', $slug, true);

        /**
         * trying to find the model by criteria
         */
        $text_model = Text::model()->find($criteria);

        /**
         * if model is not found then show 404 to user
         */
        if($text_model == null)
            throw new CHttpException(404);

        /**
         * if all ok then show the page with model
         */
        else
            $this->render('view_text', array(
                'model' => $text_model
            ));
    }
}
