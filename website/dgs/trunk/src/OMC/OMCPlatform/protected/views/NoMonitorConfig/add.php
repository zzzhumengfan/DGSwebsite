<div class="title"><h3>OMC北向接口数据稽核 >数据稽核配置 > 免监控配置 > 配置添加</h3></div>
<div class="form-action">
    <form action="/noMonitorConfig/add" method="post" id="form_add">
        <table>
            <tr>
                <td>开始时间</td>
                <td>
                    <input type="text" name="begin_time" id="begin_time" value="<?= date('Y-m-d', time()) ?>">
                </td>

            </tr>
            <tr>
                <td>结束时间</td>
                <td>
                    <input type="text" name="end_time" id="end_time" value="<?= date('Y-m-d', strtotime('+1 month', time())) ?>">
                </td>
             </tr>
            <tr>
                <td>专业</td>
                <td>
                    <select name="specialty">
                        <option value="无线网">无线网</option>
                        <option value="核心网">核心网</option>
                        <option value="传输网">传输网</option>
                        <option value="IP网">IP网</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>网元类型</td>
                <td>
                    <select name="network">
                        <option value="CSCF">CSCF</option>
                        <option value="NMF">NMF</option>
                        <option value="PGW">PGW</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>厂商</td>
                <td>
                    <select name="firm">
                        <option value="华为">华为</option>
                        <option value="中兴">中兴</option>
                        <option value="烽火">烽火</option>
                        <option value="爱立信">爱立信</option>
                        <option value="诺西">诺西</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>免监控原因</td>
                <td>
                    <input type="text" name="reason" value="随意">
                </td>

            </tr>
            <tr>
                <td>启用状态</td>
                <td>
                    <input type="radio" name="state" value="1" checked>启用
                    <input type="radio" name="state" value="0">停用
                </td>

            </tr>
            <tr>
                <td>
                    <input type="submit" value="确定">
                </td>
                <td>
                    <input type="submit" value="取消" class="previous-page">
                </td>
            </tr>
        </table>
    </form>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/laydate/laydate.js"></script>
<script>
    $(document).ready(function () {
        var options = {elem: '', event: 'focus', festival: true, elem: '#begin_time'};
        laydate(options);
        var options2 = {elem: '', event: 'focus', festival: true, elem: '#end_time'};
        laydate(options2);
    });

    $('.previous-page').click(function(){
        history.back(-1);
        return false;
    });
</script>

