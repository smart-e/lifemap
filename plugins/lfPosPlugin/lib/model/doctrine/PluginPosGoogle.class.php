<?php

/**
 * PluginPosGoogle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginPosGoogle extends BasePosGoogle
{
    public function checkCID(){
        $posgoogle = Doctrine::getTable('PosGoogle')->findBy('cid', $this->cid);
        if($posgoogle){
            return true;
        }else{
            return false;
        }
    }
}