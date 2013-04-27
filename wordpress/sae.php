<?php
/**********************************************************
**   由TAHO 创建，访问http://www.tahoroom.com
**   created by TAHO.  Visit  http://www.tahoroom.com
**   Version 1.2
**   tahoroom@163.com                           2013.03.18
***********************************************************/

 
/**Set the domain name of storage belongs to your app.  **/
define('SAE_STORAGE', 'wpcontent');
 
/**Here are the dir path & url path of the uploaded files,leave this, DO NOT Change.**/
define('SAE_DIR','saestor://'.SAE_STORAGE.'/uploads');
define('SAE_URL', 'http://' . $_SERVER['HTTP_APPNAME'] . '-'.SAE_STORAGE.'.stor.sinaapp.com/uploads');