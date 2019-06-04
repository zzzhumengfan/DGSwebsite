<div class="title"><h3>OMC北向接口数据核查> 接口核查应答 > 上传应答结果 >应答上传</h3></div>
<div class="form-action">
    <form action="" method="post" id="form_add">
        <table>
            <tr>
                <td>省公司</td>
                <td>
                    <select name="specialty">
                    </select>
                </td>
            </tr>
            <tr>
                <td>设备厂家名称</td>
                <td>
                    <select name="">
                        <option value="">全部</option>
                        <option value="">华为</option>
                        <option value="">中兴</option>
                        <option value="">爱立信</option>
                        <option value="">烽火</option>
                        <option value="">诺西</option>
                        <option value="">其他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>应答日期</td>
                <td>
                    <select name="" id=""></select>
                </td>
            </tr>
            <tr>
                <td>本应答文档适用的设备版本(及补丁)</td>
                <td>
                    <textarea rows="2"></textarea>
                </td>
            </tr>
            <tr>
                <td>对OMC的版本（及补丁）要求</td>
                <td>
                    <textarea rows="2"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="" value="">&nbsp;&nbsp;
                    <button>浏览文件</button>&nbsp;&nbsp;
                    <button>上传</button>
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

