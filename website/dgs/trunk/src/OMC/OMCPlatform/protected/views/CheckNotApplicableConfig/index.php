<div class="title">
    <h3>OMC北向接口数据核查> 数据核查配置 > 核查不适用项配置</h3>
</div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <input type="hidden" name="limit" value="10">

        <div class="list-4">
            <span>规范版本</span>
            <select name="edition">
                <option value="2.1.0">2.1.0</option>
                <option value="3.1.4">3.1.4</option>
            </select>
        </div>
        <div class="list-4">
            <span>专业</span>
            <select name="specialty">
                <option value="全部">全部</option>
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-4">
            <span>网元类型</span>
            <select name="network" id="">
                <option value="全部">全部</option>
                <option value="CSCF">CSCF</option>
                <option value="NME">NME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-4">
            <input type="submit" value="查询">
        </div>
        <div class="list-4">
            <span>属性资源</span>
            <select name="property">
                <option value="全部">全部</option>
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-4">
            <span>管理对象</span>
            <select name="management_object" id="">
                <option value="全部">全部</option>
            </select>
        </div>
        <div class="list-4"></div>
        <div class="list-4">
            <input type="submit" value="导出">
        </div>
    </form>
    <div class="list-3">
        <span>

        </span>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/checkNotApplicableConfig/add">添加</a>
        <a href="javaScript:;" onclick="$('#data_move').submit();">删除</a>
    </div>
    <div class="list-3">
        <span>文件导入</span>
        <input type="text" name="file">
        <button>浏览文件</button>
        <button>提交</button>
        <button>下载模板</button>
    </div>


</div>
<div id="main-table">
    <form action="/checkNotApplicableConfig/move" id="data_move" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td><input type="checkbox" id="checkBox" onclick="swapCheck()"/></td>
                <td>规范版本</td>
                <td>专业</td>
                <td>网元类型</td>
                <td>属性类型</td>
                <td>索引</td>
                <td>管理对象</td>
                <td>说明</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644a9483092ac6b000030"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644ae483092ac6b000031"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注1</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644b4483092ac6b000032"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注2</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644b9483092ac6b000033"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注4</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644bd483092ac6b000034"></td>
                <td>2.1.0</td>
                <td>传输网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongoId[]" value="5c0644c1483092ac6b000035"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>PGW</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td class="demo">备注</td>
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

