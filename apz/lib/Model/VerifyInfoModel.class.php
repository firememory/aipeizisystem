<?php
// +----------------------------------------------------------------------
// | ThinkPHP
// +----------------------------------------------------------------------
// | Copyright (c) 2008 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

// 管理用户模型
class VerifyInfoModel extends BaseModel {
	protected $tableName = 'member_datum'; 
	protected $_validate	=	array(
			array('status','require',"请选择审核结果"),
		);
}
?>