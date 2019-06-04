<?php

/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/3
 * Time: 17:48
 * Name: 核查不适用项配置
 */
class CheckNotApplicableConfigMongo extends CFormModel
{
    public $collection = 'check_not_applicable_config';

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    public function count($where){
        return $this->collection->find($where)->count();
    }

    public function find($where,$limit,$skip)
    {
        $rel = $this->collection->find($where)->limit($limit)->skip($skip);
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

    public function remove($where){
        $rel = $this->collection->remove($where);

        var_dump($where);
        var_dump($rel);
        //die;
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }


}