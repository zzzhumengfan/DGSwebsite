<div class="title"><h3>OMC北向接口数据核查 > 数据核查配置 > 告警规则配置</h3></div>
<div class="search">
    <form id="form_search" method="post" action="">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <input type="hidden" name="limit" value="10">

        <div class="list-3">
            <span>专业</span>
            <select name="specialty">
                <option value="全部">全部</option>
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-3">
            <span>网元类型</span>
            <select name="network">
                <option value="全部">全部</option>
                <option value="MME">MME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-3">
            <input type="submit" value="查询">
        </div>
        <div class="list-3">
            <span>告警规则</span>
            <select name="abnormal_cause">
                <option value="全部">全部</option>
                <option value="文件未及时上传">文件未及时上传</option>
                <option value="A类属性支持率<100%">A类属性支持率<100%</option>
            </select>
        </div>
        <div class="list-3">
            <span>启用状态</span>
            <select name="status">
                <option value="全部">全部</option>
                <option value="1">已启用</option>
                <option value="0">已停用</option>
            </select>
        </div>
        <div class="list-3">
            <input type="submit" value="导出">
        </div>
    </form>
    <div class="list-3">
        <a href="<?= $this->createUrl('add'); ?>">添加</a>&nbsp;&nbsp;&nbsp;
        <button>删除</button>
        <button>启用</button>
        <button>停用</button>
    </div>
    <div class="list-3">
        文件导入 <input type="text" name="file">
        <button>浏览文件</button>
        <button>提交</button>
        <button>下载模板</button>
    </div>
</div>
<div id="main-table">
    <form action="/alarmRuleConfig/status" method="post" id="data_status">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>" name="YII_CSRF_TOKEN"/>
        <!--<input type="radio" name="action_str" id="action2" value="2">
        <input type="radio" name="action_str" id="action1" value="1">
        <input type="radio" name="action_str" id="action0" value="0">-->
        <table width="100%" border="1" cellspacing="0">
            <tr>
                <td><input type="checkbox" onclick="checkboxAll()"></td>
                <td>专业</td>
                <td>网元类型</td>
                <td>告警规则</td>
                <td>接收人</td>
                <td>手机号码</td>
                <td>邮箱</td>
                <td>接收方式</td>
                <td>状态</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="id[]" value="5c04f8e1483092fc04000029"></td>
                <td>无线网</td>
                <td>CSCF</td>
                <td></td>
                <td>王大林</td>
                <td>15237273097</td>
                <td>w1738416562@126.com</td>
                <td>PNF/VNF</td>
                <td>启用</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="id[]" value="5c04fa91483092a45a000029"></td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>文件未及时上传</td>
                <td>121</td>
                <td>15237273097</td>
                <td>w1738416562@126.com</td>
                <td>PNF</td>
                <td>启用</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="id[]" value="5c0645324830924c5e000029"></td>
                <td>无线网</td>
                <td>CSCF</td>
                <td></td>
                <td>王大林</td>
                <td>15237273097</td>
                <td>w1738416562@126.com</td>
                <td>VNF</td>
                <td>启用</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="id[]" value="5c0f1e85483092c052000029"></td>
                <td>无线网</td>
                <td>CSCF</td>
                <td></td>
                <td>12</td>
                <td>1212</td>
                <td>12</td>
                <td>VNF</td>
                <td>启用</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="id[]" value="5c0f1e9b4830927434000029"></td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>A类属性支持率&lt;100%</td>
                <td>1111111111</td>
                <td>11111111111</td>
                <td>111111111111</td>
                <td>VNF</td>
                <td>启用</td>
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
