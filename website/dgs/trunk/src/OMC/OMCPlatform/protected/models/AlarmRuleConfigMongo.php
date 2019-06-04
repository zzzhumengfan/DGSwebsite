<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/3
 * Time: 14:38
 * Name: XXXXX
 */
class AlarmRuleConfigMongo extends CFormModel
{
    public $collection = "alarm_rule_config";

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    public  function count($where = []){
        $sum = $this->collection->find($where)->count();
        return $sum;
    }

    public function find($where , $limit = 10 , $skip = 0 )
    {
        $rel = $this->collection->find($where)->limit($limit)->skip($skip);
        $data = [];
        foreach($rel as $key => $value){
            $data[] = $value;
        }
        return $data;
    }

    public function save($data)
    {
        $rel = $this->collection->save($data);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }

    public function update($where,$data){
        $rel = $this->collection->update($where,$data);

        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }

    public function remove($where)
    {
        $rel = $this->collection->remove($where);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }

}