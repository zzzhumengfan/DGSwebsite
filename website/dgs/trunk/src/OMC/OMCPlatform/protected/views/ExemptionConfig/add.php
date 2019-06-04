<div class="title"><h3>OMC北向接口数据稽核 >数据稽核配置 > 豁免项配置 > 配置添加</h3></div>
<div class="form-action">
    <form action="/exemptionConfig/add" method="post">
        <table>
            <tr>
                <td>规范版本</td>
                <td><select name="edition">
                        <option value="2.1.0">2.1.0</option>
                        <option value="3.1.4">3.1.4</option>
                    </select></td>
            </tr>
            <tr>
                <td>专业</td>
                <td><select name="specialty">
                        <option value="无线网">无线网</option>
                        <option value="核心网">核心网</option>
                        <option value="传输网">传输网</option>
                        <option value="IP网">IP网</option>
                    </select></td>
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
                <td>属性类型</td>
                <td><select name="property">
                        <option value="资源属性">资源属性</option>
                        <option value="性能属性">性能属性</option>
                    </select></td>
            </tr>
            <tr>
                <td>管理对象</td>
                <td><input type="text" name="object" value="object" required="required"></td>
            </tr>
            <tr>
                <td>属性英文名称</td>
                <td><input type="text" name="englist_name" value="englist"></td>
            </tr>
            <tr>
                <td>属性中文名称</td>
                <td><input type="text" name="chinese_name" value="中文名称"></td>
            </tr>
            <tr>
                <td><input type="submit" value="确定"></td>
                <td><input type="submit" value="取消" class="previous-page"></td>
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