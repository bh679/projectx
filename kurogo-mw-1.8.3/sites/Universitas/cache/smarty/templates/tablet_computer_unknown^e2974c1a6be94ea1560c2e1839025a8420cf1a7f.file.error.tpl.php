<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 03:05:58
         compiled from "/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/kurogo/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63686403252467fd6583770-51676879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2974c1a6be94ea1560c2e1839025a8420cf1a7f' => 
    array (
      0 => '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/kurogo/templates/error.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63686403252467fd6583770-51676879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/Users/Rory1/Documents/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="focal">
  <p><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p>

  <?php if (isset($_smarty_tpl->getVariable('url',null,true,false)->value)&&!$_smarty_tpl->getVariable('ajaxContentLoad')->value){?>
    <p>
      <a href="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['sanitize_url'][0][0]->smartyModifierSanitizeURL($_smarty_tpl->getVariable('url')->value));?>
"><?php echo $_smarty_tpl->getVariable('linkText')->value;?>
</a>
    </p>
  <?php }?>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
