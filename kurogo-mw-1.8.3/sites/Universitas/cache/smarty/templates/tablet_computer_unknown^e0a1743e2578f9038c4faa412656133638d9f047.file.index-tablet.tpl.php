<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 03:22:48
         compiled from "/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/photos/templates/index-tablet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247060835524683c826f459-81096924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a1743e2578f9038c4faa412656133638d9f047' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/photos/templates/index-tablet.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
    '4792ff06a555e5676eefc449c20b3e322db0475d' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/photos/templates/index.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/navlist.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '247060835524683c826f459-81096924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('description',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description')->value)){?>
  <p class="nonfocal">
    <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>

  </p>
<?php }?>


  
  <div class="photo-albums">
  <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('albums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
?>
    <div class="album">
        <a href="<?php echo $_smarty_tpl->tpl_vars['album']->value['url'];?>
">
        <span class="album-cover"><img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img'];?>
" width="150" height="150" alt="" /></span>
        <span class="album-title"><?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
</span>
        <span class="smallprint serviceicon <?php echo $_smarty_tpl->tpl_vars['album']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['type'];?>
 | <?php echo $_smarty_tpl->tpl_vars['album']->value['albumcount'];?>
</span>
        </a>
    </div>
  <?php }} ?>
  </div> <!-- class="photo-albums" -->
  


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
