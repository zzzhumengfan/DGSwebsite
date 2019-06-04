<?php

/**
 * 网元数据配置表
 * User: WangDaLin
 * Date: 2018/11/29
 * Time: 16:13
 * Name: XXXXX
 */
class NetworkConfigMongo extends CFormModel
{
    public $collection = "network_config";

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->collection);
    }

    //获取基本信息
    public function getFind($where = [])
    {
        if (empty($where)) {
            return [];
        }
        $rel = $this->collection->find($where)->sort(['_id' => -1, 'network' => 1, 'indexes' => 1]);
        $data = [];
        foreach ($rel as $key => $value) {
            $data[] = $value;
        }
        return $data;
    }

    //添加基本信息
    public function save($data)
    {
        $rel = $this->collection->insert($data);
        if ($rel['ok'] == 1) {
            return true;
        } else {
            return false;
        }

    }

    //删除基本信息
    public function move($data)
    {
        $rel = $this->collection->remove($data);
        if($rel['ok'] == 1){
            return true;
        }else{
            return false;
        }
    }


}