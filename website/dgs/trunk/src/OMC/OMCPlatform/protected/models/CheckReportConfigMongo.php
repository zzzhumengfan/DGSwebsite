<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/6
 * Time: 10:39
 * Name: XXXXX
 */
class CheckReportConfigMongo extends CFormModel
{
    public $collection = 'check_report_config';

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstace();
        $this->collection = $db->getCollection($this->collection);
    }

    public function count($where){
        return $this->collection->find($where)->count();
    }

    public function find($where){
        $rel = $this->collection->find($where);
        $data = [];
        foreach($rel as $key => $value){
            $data[] = $value;
        }
        return $data;
    }


}