<div class="title">
    <h3>OMC北向接口数据核查>数据核查配置 > 网元数据配置 >明细配置</h3>
</div>
<div class="search">
    <form action="details.php" method="post" id="form_search">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <input type="hidden" name="limit" value="10">

        <div class="list-4">
            <span>重要度</span>
            <select name="importance_degree" id="">
                <option value="全部">全部</option>
                <option value="A">A类属性</option>
                <option value="B">B类属性</option>
                <option value="C">C类属性</option>
                <option value="CA">CA类属性</option>
                <option value="CB">CB类属性</option>
                <option value="CC">CC类属性</option>
            </select>
        </div>
        <div class="list-3">
            <input type="submit" value="查询">
            <input type="submit" value="返回" class="previous-page">
        </div>
        <div class="list-3"></div>
        <script>
            $('.previous-page').click(function () {
                history.back(-1);
                return false;
            });
        </script>
    </form>
    <div class="list-4">
        <span><a href="<?php echo Yii::app()->request->baseUrl; ?>/NetworkConfig/DetailsAdd">添加</a></span>

        <a href="javaScript:;" onclick="$('#data_move').submit();">删除</a>
    </div>
</div>
<div id="main-table">
    <form action="/networkConfig/DeleteDetails" method="post" id="data_move">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0">
            <tr>
                <td>
                    <input type="checkbox" onclick="checkboxAll();">
                </td>
                <td>属性编码</td>
                <td>重要度</td>
                <td>英文名称</td>
                <td>中文名称</td>
                <td>定义</td>
                <td>数据类型</td>
                <td>单位</td>
                <td>备注</td>
                <td>适用范围</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>MMEAA00</td>
                <td>B</td>
                <td>VNFInstanceld</td>
                <td>实例id</td>
                <td>虚拟网元的InstanceId</td>
                <td>字符串</td>
                <td></td>
                <td></td>
                <td>VNF</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>MMEAA01</td>
                <td>B</td>
                <td>VNFInstanceld</td>
                <td>实例id</td>
                <td>虚拟网元的InstanceId</td>
                <td>字符串</td>
                <td></td>
                <td></td>
                <td>VNF</td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>MMEAA02</td>
                <td>B</td>
                <td>VNFInstanceld</td>
                <td>实例id</td>
                <td>虚拟网元的InstanceId</td>
                <td>字符串</td>
                <td></td>
                <td></td>
                <td>VNF</td>
            </tr>
        </table>
    </form>
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
