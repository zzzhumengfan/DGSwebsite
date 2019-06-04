<div class="title"><h3>OMC北向接口数据核查 > 数据核查配置 > 完整性核查配置 > 配置添加</h3></div>
<div class="form-action">
    <form action="add" method="post">
        <table>
            <tr>
                <th>业务类型</th>
                <td>
                    <input type="text" name="business" value="Volte">
                </td>
            </tr>
            <tr>
                <th>专业</th>
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
                <th>网元类型</th>
                <td>
                    <select name="network">
                        <option value="全部">全部</option>
                        <option value="CSCF">CSCF</option>
                        <option value="NMF">NMF</option>
                        <option value="PGW">PGW</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>厂商</th>
                <td>
                    <div style="width:175px;height:60px;border:1px solid;background-color:#fdfdfe;" >
                        <input type="checkbox" name="firm[]" value="华为">华为
                        <input type="checkbox" name="firm[]" value="烽火">烽火<br>
                        <input type="checkbox" name="firm[]" value="中兴">中兴
                        <input type="checkbox" name="firm[]" value="大唐">大唐<br>
                        <input type="checkbox" name="firm[]" value="爱立信">爱立信
                        <input type="checkbox" name="firm[]" value="诺西">诺西
                    </div>
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
<script>
    $('.previous-page').click(function(){
        history.back(-1);
        return false;
    });
</script>