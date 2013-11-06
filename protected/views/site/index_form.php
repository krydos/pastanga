<?php
/**
 * User: KryDos <furyinbox@gmail.com>
 * Date: 04.11.13
 */
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.validate.min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/validate_form.js'); ?>
<div class="pastangaForm">
    <form id="pasteForm">
        <div class="formWrapper">
            <textarea name="pasteText" class="mainTextArea" rows="20"></textarea>
        </div>
        <button class="btn btn-success">Send</button>
        <label for="syntax">Syntax:
            <select name="syntax" id="syntax">
                <option selected default value="plain">Plain Text</option>
                <option value="C">C</option>
                <option value="CPP">C++</option>
                <option value="erlang">Erlang</option>
                <option value="lisp">Lisp</option>
                <option value="pascal">Pascal</option>
                <option value="PERL">Perl</option>
                <option value="PHP">PHP</option>
                <option value="scala">Scala</option>
                <option value="SH">SHELL</option>
                <option value="sql">SQL</option>
                <option value="yaml">yaml</option>
            </select>
        </label>
    </form>
</div>

