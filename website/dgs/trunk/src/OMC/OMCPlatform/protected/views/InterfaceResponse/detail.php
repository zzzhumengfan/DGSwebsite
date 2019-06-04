<?php
/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/12/10
 * Time: 11:05
 * Name: XXXXX
 */
?>
<style>
    #main-table td:nth-of-type(10){
      background: #fdc930;
    }
</style>
<div class="title"><h3>OMC北向接口数据核查> 接口核查应答 > 应答情况统计 >支持明细</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php /*echo Yii::app()->getRequest()->getCsrfToken(); */?>"
               name="YII_CSRF_TOKEN"/>
        <div class="list-5">
            <span>支持时间</span>
            <select name="">
                <option value="">T</option>
                <option value="">T+1Q</option>
                <option value="">T+2Q</option>
                <option value="">T+3Q</option>
                <option value="">T+4Q</option>
                <option value="">NS</option>
            </select>
        </div>
        <div class="list-5">
            <span>
                <input type="submit" value="查询">
            </span>
            <input type="submit" value="返回" class="previous-page">
        </div>
        <script>
            $('.previous-page').click(function(){
                history.back(-1);
                return false;
            });
        </script>
    </form>
</div>
<div id="main-table">
    <table cellspacing="0" border="1">
        <tr>
            <td></td>
            <td>属性编码</td>
            <td>重要度</td>
            <td>英文名称</td>
            <td>中文名称</td>
            <td>定义</td>
            <td>数据类型</td>
            <td>单位</td>
            <td>备注</td>
            <td>支持时间</td>
        </tr>
        <tr>
            <td>1</td>
            <td>CSCFAH01</td>
            <td>CB</td>
            <td>rmUID</td>
            <td>资产单元表述</td>
            <td>该对象在ManagedElement(网元)内的唯一标识</td>
            <td>字符串</td>
            <td>-</td>
            <td></td>
            <td>T</td>
        </tr>
        <tr>
            <td>2</td>
            <td>CSCFAH02</td>
            <td>CB</td>
            <td>rmUID</td>
            <td>资产单元表述</td>
            <td>单板包含的所有端口、描述及状态；结构序列{端口号（字符串），描述(字符串)，占用状态（占用used、未占用unused）枚举}--描述信息由厂家自行决定</td>
            <td>字符串</td>
            <td>-</td>
            <td></td>
            <td>T</td>
        </tr>
    </table>
</div>
<div class="page">
    <a href="javaScript:;" class="item" data-page="1">上一页</a>
    <a href="javaScript:;" class="item active" data-page="1">1</a>
    <a href="javaScript:;" class="item" data-page="1">1</a>
    <a href="javaScript:;" class="item" data-page="2">2</a>
    <a href="javaScript:;" class="item" data-page="3">3</a>
    <a href="javaScript:;" class="item" data-page="4">4</a>
    <a href="javaScript:;" class="item" data-page="5">5</a>
    <a href="javaScript:;" class="item" data-page="6">6</a>
    <a href="javaScript:;" class="item" data-page="7">7</a>
    <a href="javaScript:;" class="item" data-page="8">8</a>
    <a href="javaScript:;" class="item" data-page="9">9</a>
    <a href="javaScript:;" class="item" data-page="9">9</a>
    <a href="javaScript:;" class="item" data-page="10">10</a>
    <a href="javaScript:;" class="item" data-page="11">12</a>
    <a href="javaScript:;" class="item" data-page="12">12</a>
    <a href="javaScript:;" class="item" data-page="1">下一页</a>
    <a href="javaScript:;" class="item" data-page="1">最后一页</a>
    <span>
        每页显示
        <select name="limmit">
            <option value="5">5</option>
            <option value="10" selected="selected">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        条记录
    </span>
</div>
