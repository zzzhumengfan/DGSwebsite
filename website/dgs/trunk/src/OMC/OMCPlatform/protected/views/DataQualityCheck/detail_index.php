<div class="title"><h3>OMC北向接口数据核查 > 数据质量核查 > 属性支持情况明细 > 分索引明细</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <div class="list-5">
            <span>重要度</span>
            <select name="">
                <option value="">全部</option>
                <option value="">A类属性</option>
                <option value="">B类属性</option>
                <option value="">C类属性</option>
                <option value="">CA类属性</option>
                <option value="">CB类属性</option>
                <option value="">CC类属性</option>
            </select>
        </div>
        <div class="list-5">
            <span>支持情况</span>
            <select name="" id="">
                <option value="">全部</option>
                <option value="">支持</option>
                <option value="">不支持</option>
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
    <table border="1" cellspacing="0" width="100%">
        <tr>
            <th style="min-width: 30px;"></th>
            <th>属性编码</th>
            <th>重要度</th>
            <th>英文名称</th>
            <th>中文名称</th>
            <th>定义</th>
            <th>数据类型</th>
            <th>单位</th>
            <th>备注</th>
            <th>属性值</th>
            <th>支持情况</th>
        </tr>
        <tr>
            <td>1</td>
            <td>CSCFAA00</td>
            <td>B</td>
            <td>VNFInstanceId</td>
            <td>实例ID</td>
            <td></td>
            <td>字符串</td>
            <td></td>
            <td>物理网元上报“0"</td>
            <td></td>
            <td>支持</td>
        </tr>
        <tr class="un-qualified">
            <td>2</td>
            <td>CSCFAA01</td>
            <td>B</td>
            <td>rmUID</td>
            <td>标识符</td>
            <td>命名属性</td>
            <td>字符串</td>
            <td></td>
            <td>物理网元上报“0"</td>
            <td></td>
            <td>不支持</td>
        </tr>
    </table>

</div>
<div class="page">
    <a href="javaScript:;" class="item" data-page="1">第一页</a>
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