<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 00:25:04
         compiled from "findInclude:common/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52956664052465a20b8c972-55075295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa1ce90517828d1f7dd1b47ebe9bab07ede9bcf' => 
    array (
      0 => 'findInclude:common/templates/footer.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
    'f6733dc93bad1f2e9c98ac15cbf70042868b9f25' => 
    array (
      0 => '/Users/Rory1/Downloads/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/footer.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/page/moduleDebug.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
    '3d3bb0ebf825e4db3a102d066298af51a0e9f0d4' => 
    array (
      0 => '/Users/Rory1/Downloads/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/page/login.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52956664052465a20b8c972-55075295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$_smarty_tpl->getVariable('webBridgeAjaxContentLoad')->value&&!$_smarty_tpl->getVariable('ajaxContentLoad')->value){?>
  
  
  

  <?php ob_start(); ?>
    
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptFooterBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <script type="text/javascript">
          <?php echo $_smarty_tpl->tpl_vars['script']->value;?>
 
        </script>
      <?php }} ?>
    
    
    
      <?php if (strlen($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value)){?>
        <script type="text/javascript">
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
      <?php }?>
    
  <?php  $_smarty_tpl->assign("kgoFooterJavascript", ob_get_contents()); Smarty::$_smarty_vars['capture']["kgoFooterJavascript"]=ob_get_clean();?>
  
  
    <?php echo $_smarty_tpl->getVariable('kgoFooterJavascript')->value;?>

  
  
  
      </div> <!-- container -->
    </div> <!-- container-wrapper -->
  </div> <!-- wrapper -->

  
  
  
  </body>
  </html>
<?php }else{ ?>
  
    <script type="text/javascript">
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inlineJavascriptFooterBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

      <?php }} ?>
      
      <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('onLoadBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
        <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

      <?php }} ?>
    
      <?php if (count($_smarty_tpl->getVariable('onOrientationChangeBlocks')->value)){?>
        addOnOrientationChangeCallback(function () {
          <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('onOrientationChangeBlocks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
            <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

          <?php }} ?>
        });
      <?php }?>
      
      onOrientationChange();
    </script>
  
<?php }?>
