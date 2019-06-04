<?php
/**
 * Created by PhpStorm.
 * User: WangDaLin
 * Date: 2018/11/30
 * Time: 10:35
 * Name: 网元配置添加
 */
?>
<div class="title">
    <h3>OMC北向接口数据核查 > 数据核查配置 > 网元数据配置 > 配置添加</h3>
</div>
<div class="form-action">
    <form action="" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table>
        <tr>
            <td>规范版本</td>
            <td>
                <select name="edition">
                    <option value="2.1.0">V2.1.0</option>
                    <option value="3.1.4">V3.1.4</option>
                </select>
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
            <td>属性类型</td>
            <td>
                <select name="property">
                    <option value="资源属性">资源属性</option>
                    <option value="性能属性">性能属性</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>索引</td>
            <td>
                <input type="text" name="indexes" value="Ab" required="required">
            </td>
        </tr>
        <tr>
            <td>管理对象</td>
            <td>
                <input type="text" name="object" value="object" required="required">
            </td>
        </tr>
        <tr>
            <td>备注</td>
            <td>
                <input type="text" name="remarks" value="添加备注" required="required">
            </td>
        </tr>
        <tr>
            <td>使用范围</td>
            <td>
                <input type="checkbox" name="range[]" id="range1" value="PNF"><label for="range1">PNF</label>&nbsp;&nbsp;
                <input type="checkbox" name="range[]" id="range2" value="VNF"><label for="range2">VNF</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="配置添加">
            </td>
            <td>
                <input type="submit" value="返回" class="previous-page">
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
