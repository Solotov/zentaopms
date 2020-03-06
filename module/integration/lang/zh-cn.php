<?php
$lang->integration->common        = '构建计划';
$lang->integration->browse        = '浏览构建计划';
$lang->integration->create        = '创建构建计划';
$lang->integration->edit          = '编辑构建计划';
$lang->integration->exec          = '执行构建';
$lang->integration->delete        = '删除构建计划';
$lang->integration->confirmDelete = '确认删除该构建计划吗？';
$lang->integration->dirChange     = '目录改动';
$lang->integration->buildTag      = '打标签';

$lang->integration->id          = 'ID';
$lang->integration->name        = '名称';
$lang->integration->repo        = '代码库';
$lang->integration->svnDir      = 'SVN监控路径';
$lang->integration->jenkins     = 'Jenkins';
$lang->integration->jkHost      = 'Jenkins服务器';
$lang->integration->buildType   = '构建类型';
$lang->integration->jkJob       = 'Jenkins任务';
$lang->integration->triggerType = '触发方式';
$lang->integration->atDay       = '自定义日期';
$lang->integration->atTime      = '执行时间';
$lang->integration->lastStatus  = '最后执行状态';
$lang->integration->lastExec    = '最后执行时间';
$lang->integration->comment     = '匹配关键字';

$lang->integration->example    = '举例';
$lang->integration->commitEx   = "用于匹配创建构建任务的关键字，多个关键字用','分割";
$lang->integration->cronSample = '如 0 0 2 * * 2-6/1 表示每个工作日凌晨2点';
$lang->integration->sendExec   = '发送执行请求成功！';

$lang->integration->buildTypeList['build']          = '仅构建';
$lang->integration->buildTypeList['buildAndDeploy'] = '构建部署';
$lang->integration->buildTypeList['buildAndTest']   = '构建测试';

$lang->integration->triggerTypeList['tag']      = '打标签';
$lang->integration->triggerTypeList['commit']   = '提交注释包含关键字';
$lang->integration->triggerTypeList['schedule'] = '定时计划';
