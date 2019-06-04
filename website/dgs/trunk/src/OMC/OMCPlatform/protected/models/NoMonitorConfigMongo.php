<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/5
 * Time: 15:16
 * Name: XXXXX
 */
class NoMonitorConfigMongo extends CFormModel
{
    public $collection = 'no_monitor_config';

    public function __construct(){
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    public function find($where){
        $rel = $this->collection->find($where)->sort(['_id' => -1,'start_time' => -1]);
        $data = [];
        foreach($rel as $key => $value){
            $data[] = $value;
        }
        return $data;
    }

    public function save($data){
        $rel = $this->collection->save($data);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }

    public function setState($where,$data){
        $rel = $this->collection->update($where,$data);
        if($rel['ok'] ==  1){
            return true;
        }else{
            return false;
        }
    }

    public function remove($where){
        $rel = $this->collection->remove($where);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }

}