<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 03:15:09
         compiled from "findInclude:modules/map/templates/fullscreenfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:850767980524681fd2fbf28-57572741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293524bce7d51d84995597515a617c3babbc9cb1' => 
    array (
      0 => 'findInclude:modules/map/templates/fullscreenfooter.tpl',
      1 => 1364681344,
      2 => 'findInclude',
    ),
    'c3066e1ae50feeef46133b3b076dedfb92a2d7c5' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/footer-tablet.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
    '2f5ebeb9bb2f25ee1eafd5d7712509610c879207' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/footer.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/page/moduleDebug.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
    'f8b94cdfb5c1d6337cfb7f69abcdec9c791e0632' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/page/login.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850767980524681fd2fbf28-57572741',
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
