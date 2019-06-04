<div class="title"><h3>OMC北向接口数据核查 > 数据核查配置 > 完整性核查配置</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <div class="list-5">
            <span>业务类型</span>
            <select name="business">
                <option value="全部">全部</option>
                <option value="Volte">Volte</option>
            </select>
        </div>
        <div class="list-5">
            <span>网元类型</span>
            <select name="network">
                <option value="全部">全部</option>
                <option value="MME">MME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-5">
            <span>厂商</span>
            <select name="firm" id="">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="中兴">中兴</option>
                <option value="烽火">烽火</option>
                <option value="爱立信">爱立信</option>
                <option value="诺基亚">诺基亚</option>
            </select>
        </div>
        <div class="list-5">
            <span><input type="submit" onclick="form_button();" value="查询"></span>
        </div>
        <div class="list-4">
            <span></span>
            <a href="<?= $this->createUrl('add'); ?>">添加</a>&nbsp;&nbsp;&nbsp;
            <a href="javaScript:;" onclick="move();">删除</a>
        </div>
    </form>

</div>
<div id="main-table">
    <form action="" id="form_search2">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td style="width: 20px;"><input type="checkbox" id="checkBox" onclick="swapCheck()"/></td>
                <td>业务类型</td>
                <td>网元类型</th>
                <td>厂商</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d425000034" onclick="swapCheck2();">
                </td>
                <td>Volte2</td>
                <td>PGW</td>
                <td>爱立信</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d425000033" onclick="swapCheck2();">
                </td>
                <td>Volte</td>
                <td>PGW</td>
                <td>华为</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d425000032" onclick="swapCheck2();">
                </td>
                <td>Volte2</td>
                <td>NME</td>
                <td>烽火</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d425000031" onclick="swapCheck2();">
                </td>
                <td>Volte2</td>
                <td>NME</td>
                <td>中兴</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d42500002f" onclick="swapCheck2();">
                </td>
                <td>Volte</td>
                <td>NME</td>
                <td>爱立信</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d42500002e" onclick="swapCheck2();">
                </td>
                <td>Volte2</td>
                <td>NME</td>
                <td>华为</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d42500002d" onclick="swapCheck2();">
                </td>
                <td>Volte2</td>
                <td>CSCF</td>
                <td>烽火</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d42500002c" onclick="swapCheck2();">
                </td>
                <td>Volte</td>
                <td>CSCF</td>
                <td>中兴</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf64ca3483092d42500002b" onclick="swapCheck2();">
                </td>
                <td>Volte</td>
                <td>CSCF</td>
                <td>诺基亚</td>
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

