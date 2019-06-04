<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/11/30
 * Time: 15:59
 * Name: 网元配置明细
 */
class NetworkDetailsConfigMongo extends CFormModel
{
    public $collection = "network_details_config";

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    //获取明细
    public function getFind($where)
    {
        $rel = $this->collection->find($where);
        $data = [];
        foreach ($rel as $key => $value) {
            $data[] = $value;
        }
        return $data;
    }

    public function save($data)
    {
        $rel = $this->collection->insert($data);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }


    public function move($data)
    {
        $rel = $this->collection->remove($data);
        if ($rel['ok'] == 1) {
            return true;
        } else {
            return false;
        }
    }

}