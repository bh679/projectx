<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 07:43:42
         compiled from "/Users/mac/Desktop/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3412370685246c0ee793847-66027117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42abd6a4d672fd8570ea68927d8cbfc6421297fb' => 
    array (
      0 => '/Users/mac/Desktop/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl',
      1 => 1380352542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3412370685246c0ee793847-66027117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scalable',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/searchbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="spacer"></div>
<div id="<?php echo $_smarty_tpl->getVariable('mapImageElementId')->value;?>
" class="mapimage"></div>


<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/fullscreenfooter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('hideFooterLinks',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
