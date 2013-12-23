<?php

class m131223_094923_add_pastetext_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('pastetext', array(
            'id'=>'pk',
            'text'=>'text NOT NULL',
            'link'=>'text NOT NULL',
            'type'=>'string NOT NULL',
        ));
	}

	public function down()
	{
        $this->dropTable('pastetext');
	}
}
