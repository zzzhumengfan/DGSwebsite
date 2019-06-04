<div class="title"><h3>OMC北向接口数据核查> 数据核查配置 > 告警规则配置> 配置添加</h3></div>
<div class="form-action">
    <form action="/alarmRuleConfig/add" method="post" id="form_add">
        <table>
            <tr>
                <td>
                    专业
                </td>
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
                <td><select name="network">
                        <option value="CSCF">CSCF</option>
                        <option value="NMF">NMF</option>
                        <option value="PGW">PGW</option>
                    </select></td>
            </tr>
            <tr>
                <td>告警规则</td>
                <td> <select name="abnormal_cause" id="">
                        <option value="">全部</option>
                        <option value="文件未及时上传">文件未及时上传</option>
                        <option value="A类属性支持率<100%">A类属性支持率<100%</option>
                        <option value="B类属性支持率<90%">B类属性支持率<90%</option>
                    </select></td>
            </tr>
            <tr>
                <td>接收人</td>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>手机号码</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>接受方式</td>
                <td><input type="checkbox" name="range[]" value="PNF"> <label for="">短信</label>
                    <input type="checkbox" name="range[]" value="VNF"> <label for="">邮件</label></td>
            </tr>
            <tr>
                <td>是否启用</td>
                <td><input type="radio" name="status" value="1"> <label for="">是</label>
                    <input type="radio" name="status" value="0"> <label for="">否</label></td>
            </tr>
            <tr>
                <td><input type="submit" value="确定"></td>
                <td><input type="submit" value="返回" class="previous-page"></td>


            </tr>
        </table>

    </form>
</div>
<script>
    $('.previous-page').click(function () {
        history.back(-1);
        return false;
    });
</script>