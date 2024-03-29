<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RecentComments
 *
 * @author stefano
 */
Yii::import('zii.widgets.CPortlet');
    
class RecentComments extends CPortlet
{
    public $title='Recent Comments';
    public $maxComments=10;
    
    public function getRecentComments()
    {
        return Comment::model()->findRecentComments($this->maxComments);
    }
    
    protected function renderContent()
    {
        $this->render('recentComments');
    }
    
}

?>
