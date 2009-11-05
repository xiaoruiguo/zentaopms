<?php
/**
 * The project module zh-cn file of ZenTaoMS.
 *
 * ZenTaoMS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * ZenTaoMS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with ZenTaoMS.  If not, see <http://www.gnu.org/licenses/>.  
 *
 * @copyright   Copyright: 2009 Chunsheng Wang
 * @author      Chunsheng Wang <wwccss@263.net>
 * @package     project
 * @version     $Id$
 * @link        http://www.zentao.cn
 */
$lang->project->common       = '项目';
$lang->project->index        = "项目首页";
$lang->project->create       = "添加项目";
$lang->project->delete       = "删除项目";
$lang->project->browse       = "浏览项目";
$lang->project->edit         = "编辑项目";
$lang->project->manage       = "维护模块";

$lang->project->selectProject  = "请选择项目";
$lang->project->manageMembers  = '团队管理';
$lang->project->unlinkMember   = '移除';
$lang->project->manageProducts = '关联产品';
$lang->project->linkStory      = '关联需求';
$lang->project->unlinkStory    = '移除需求';
$lang->project->manageTasks    = '任务管理';
$lang->project->linkTask       = '关联任务';
$lang->project->manageChilds   = '关联子项目';
$lang->project->confirmDelete  = '您确定删除项目[%s]吗？';
$lang->project->confirmUnlinkMember = '您确定从该项目中移除该用户吗？';
$lang->project->confirmUnlinkStory  = '您确定从该项目中移除该需求吗？';

$lang->project->errorNoLinkedProducts = '该项目没有关联的产品，系统将转到产品关联页面';

$lang->project->id           = '项目编号';
$lang->project->company      = '所属公司';
$lang->project->iscat        = '作为目录';
$lang->project->type         = '项目类型';
$lang->project->parent       = '上级项目';
$lang->project->name         = '项目名称';
$lang->project->code         = '项目代号';
$lang->project->begin        = '开始日期';
$lang->project->end          = '结束日期';
$lang->project->status       = '项目状态';
$lang->project->statge       = '所处阶段';
$lang->project->pri          = '优先级';
$lang->project->desc         = '项目描述';
$lang->project->goal         = '项目目标';
$lang->project->openedBy     = '由谁创建';
$lang->project->openedDate   = '创建日期';
$lang->project->closedBy     = '由谁关闭';
$lang->project->closedDate   = '关闭日期';
$lang->project->canceledBy   = '由谁取消';
$lang->project->canceledDate = '取消日期';
$lang->project->PO           = '产品负责人';
$lang->project->PM           = '项目负责人';
$lang->project->QM           = '测试负责人';
$lang->project->team         = '团队名称';
$lang->project->products     = '相关产品';
$lang->project->childProjects= '子项目';
$lang->project->task         = '任务列表';
$lang->project->story        = '需求列表';
$lang->project->bug          = 'Bug列表';
$lang->project->burn         = '燃烧图';
$lang->project->burnData     = '燃烧图数据';

$lang->project->beginAndEnd = '起止时间';
$lang->project->lblStats    = '工时统计';
$lang->project->stats       = '总共预计『%s』工时<br />已经消耗『%s』工时<br />预计剩余『%s』工时';

$lang->team->account     = '用户';
$lang->team->role        = '角色';
$lang->team->joinDate    = '加盟日';
$lang->team->workingHour = '工时/天';

$lang->project->charts->burn->graph->caption      = "燃烧图";
$lang->project->charts->burn->graph->xAxisName    = "日期";
$lang->project->charts->burn->graph->yAxisName    = "HOUR";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
