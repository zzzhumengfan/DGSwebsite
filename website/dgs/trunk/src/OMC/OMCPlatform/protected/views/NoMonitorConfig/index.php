<div class="title"><h3>OMC北向接口数据核查 > 数据核查配置 > 免监控配置</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">

        <div class="list-4">
            <span>开始时间</span>
            <input type="text" name="begin_time" id="begin_time" value="<?= date('Y-m-d', time()) ?>">
        </div>
        <div class="list-4">
            <span>结束时间</span>
            <input type="text" name="end_time" id="end_time"
                   value="<?= date('Y-m-d', strtotime('+2 month', time())); ?>">
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
            <input type="submit" value="查询">
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
            <span>厂商</span>
            <select name="firm">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="中兴">中兴</option>
                <option value="烽火">烽火</option>
                <option value="爱立信">爱立信</option>
                <option value="诺西">诺西</option>
            </select>
        </div>
        <div class="list-4">
            <span>启用状态</span>
            <select name="state" id="">
                <option value="全部">全部</option>
                <option value="1">启用</option>
                <option value="0">停用</option>
            </select>
        </div>
        <div class="list-4">
            <input type="submit" value="导出">
        </div>
    </form>
    <div class="list-3">
        <span></span>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/noMonitorConfig/add">添加</a>
        <a href="javaScript:;"><label for="state-2">删除</label></a>
        <a href="jacaScript:;"><label for="state-1">启用</label></a>
        <a href="jacaScript:;"><label for="state-0">停用</label></a>
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
    <form action="/noMonitorConfig/state" id="form_search2" method="post">

        <!--  <input type="radio" name="state" value="0" id="state-0">
          <input type="radio" name="state" value="1" id="state-1">
          <input type="radio" name="state" value="2" id="state-2">-->

        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td><input type="checkbox" onclick="checkboxAll();"></td>
                <td>开始时间</td>
                <td>结束时间</td>
                <td>专业</td>
                <td>网元类型</td>
                <td>厂商</td>
                <td>免监控原因</td>
                <td>启用状态</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5c088b5d483092bc2600002b"></td>
                <td>2018-12-06</td>
                <td>2019-01-06</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
                <td>随意</td>
                <td style="background:red;">停用</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5c088b5b483092bc2600002a"></td>
                <td>2018-12-06</td>
                <td>2019-01-06</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
                <td>随意</td>
                <td style="background:red;">停用</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5c088b58483092bc26000029"></td>
                <td>2018-12-06</td>
                <td>2019-01-06</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
                <td>随意</td>
                <td style="background:red;">停用</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5c0789d0483092284a000030"></td>
                <td>2018-12-05</td>
                <td>2019-01-05</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
                <td>随意</td>
                <td>启用</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5c0789cd483092284a00002f"></td>
                <td>2018-12-05</td>
                <td>2019-01-05</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
                <td>随意</td>
                <td>启用</td>
            </tr>
        </table>
    </form>

</div>

<!-- 时间插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/laydate/laydate.js"></script>
<script>

    $(document).ready(function () {

        //日期插件
        var options = {elem: '', event: 'focus', festival: true, elem: '#begin_time'};
        laydate(options);
        var options2 = {elem: '', event: 'focus', festival: true, elem: '#end_time'};
        laydate(options2);

        fun();

    });


</script>
