<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/4
 * Time: 17:36
 * Name: XXXXX
 */
class ExemptionConfigMongo extends CFormModel
{
    public $collection = 'exemption_allocation_config';

    public function __construct(){
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    public function count($where){
        return $this->collection->find($where)->count();
    }

    public function find($where,$limit,$skip){
        $rel = $this->collection->find($where)->limit($limit)->skip($skip);
        $data = [];
        foreach($rel as $key => $value){
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

    public function remove($data){
        $rel = $this->collection->remove($data);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }


}