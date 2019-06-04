<?php

class InterfaceMongo extends CFormModel
{
    public $tableName = 'check_i';
    public $collection;

    public function __construct()
    {
        $db = Yii::app()->mongodb4->getDbInstance();
        $this->collection = $db->selectCollection($this->tableName);
    }

    /* 根据where条件获取Interface数据
     *
     * */
    public function find($where = [])
    {
        if(empty($where)){
            $rel = $this->collection->find();
        }else{
            $rel = $this->collection->find($where);
        }

        $data = [];
        foreach($rel as $key => $value){
            $data[] = $value;
        }
        return $data;
    }

    /* 管道符统计数据
     *
     * */
    public function aggregate($where)
    {
        if(empty($where)){
            return [];
        }

        $rul = $this->collection->aggregate($where);

        $result =  isset($rul['result']) ? $rul['result'] : array();

        $data = [];
        foreach($result as $key => $value){
            $arr = [];
            foreach($value as $k => $v){
                if(is_array($v)){
                    foreach($v as $j => $i){
                        $arr[$j] = $i;
                    }
                }else{
                    $arr[$k] = $v;
                }
            }
            $data[] = $arr;
        }
        return $data;
    }

    public function actionPageHtml($data,$limit,$pageno)
    {
        if(count($data)){
            $count = ceil(count($data) / $limit);    //总页数

            if($pageno < 1){
                $pageno = 1;
            }else if($pageno > $count){
                $pageno = $count;
            }

            $pageHtml = '<a href="javascript:;" data-page="1">第一页</a>';

            if($pageno > 1){
                $pageHtml .= '<a href="javaScript:;" data-page="'.($pageno - 1) .'">上一页</a>';
            }else{
                $pageHtml .= '<a href="javaScript:;" data-page="1" class="on">上一页</a>';
            }

            if($count < 10){
                for($i = 1;$i <= $count; $i++){
                    $class = $pageno == $i ? 'class="on"' : '';
                    $pageHtml .= '<a href="javaScript:;" data-page="'.$i.'" '.$class.'>'.$i.'</a>';
                }
            }else{
                $a = $count - $pageno;
                if($a >= 10){
                    for($i = $pageno; $i <= ($pageno + 9); $i++){
                        $class = $pageno == $i ? 'class="on"' : '';
                        $pageHtml .= '<a href="javaScript:;" data-page="'.$i.'" '.$class.'>'.$i.'</a>';
                    }
                    $pageHtml .= '&nbsp;&nbsp;...&nbsp;&nbsp;';
                }else{
                    $pageHtml .= '&nbsp;&nbsp;...&nbsp;&nbsp;';
                    for($i = ($count - 9);$i <= $count;$i++){
                        $class = $pageno == $i ? 'class="on"' : '';
                        $pageHtml .= '<a href="javaScript:;" data-page="'.$i.'" '.$class.'>'.$i.'</a>';
                    }
                }
            }

            if($pageno >= $count){
                $pageHtml .= '<a href="javaScript:;" data-page="'.$count.'" class="on">下一页</a>';
            }else{
                $pageHtml .= '<a href="javaScript:;" data-page="'.($pageno + 1).'">下一页</a>';
            }
            $pageHtml .= '<a href="javaScript:;" data-page="'.$count.'">最后一页</a> 共'.ceil(count($data) / $limit).'页';

            return $pageHtml;
        }else{
            return '';
        }
    }

}

?>