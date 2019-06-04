<!DOCTYPE html>
<html>
<head>
    <title>OMC北向接口数据稽核</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="<?= Yii::app()->request->baseUrl; ?>/css/styles.css?time=<?= time() ?>" type="text/css"
          rel="stylesheet"/>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/scripts/jquery-1.7.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/scripts/jquery-ui-1.8.10.custom.min.js"></script>
</head>
<body>

<div id="header">
    <!-- Logo -->
    <div class="header_logo">
        <img class="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/login.png" height="50"/>

        <h1>中国移动数据质量核查平台</h1>
    </div>
    <!-- 导航栏 -->
    <div class="navigation">
        <div class="admin" id="admin">
            <a href="">登录</a>
            <span>|</span>
            <a href="javaScript:;">联系我们</a>
        </div>
    </div>
</div>
<style>

</style>
<div id="main">
    <div class="nav">
        <div>OMC北向接口数据核查</div>
        <ul class="mainnav">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/interfaceOverview/index" class="sech">接口数据核查</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/fileQualityCheck" class="sech">文件质量核查</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/dataQualityCheck" class="sech">数据质量核查</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/interfaceReport" class="sech">接口核查概况</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/interfaceAlarmMonitor" class="sech">接口告警监控</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/networkConfig" class="sech">数据核查配置</a>
                <ul>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/networkConfig" class="thirdh">网元数据配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/alarmRuleConfig">告警规则配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/checkNotApplicableConfig">检查不适用项配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/exemptionConfig">豁免项配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/noMonitorConfig">免监控配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/CheckReportConfig">核查报告配置</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/IntegrityCheckConfig">完整性核查配置(H)</a></li>
                </ul>
            </li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/InterfaceResponse">接口核查应答(H)</a>
                <ul>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/InterfaceResponse" class="thirdh">应答情况统计</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/AnswerSituationStatistics">上传应答结果</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/DataIntegrityStatistics">数据完整性统计(H)</a>
            </li>
            <!--<li>
                <a href="">用户管理</a>
            </li>-->

        </ul>
    </div>
    <?= $content ?>
</div>
<div id="footer">
    <p>中国移动通信有限公司研究院©2014</p>
</div>
</body>
</html>
