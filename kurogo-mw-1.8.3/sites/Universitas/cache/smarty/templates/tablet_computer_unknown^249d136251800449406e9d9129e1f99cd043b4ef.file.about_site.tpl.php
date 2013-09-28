<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 09:20:45
         compiled from "/Users/mac/Desktop/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/about/templates/about_site.tpl" */ ?>
<?php /*%%SmartyHeaderCode:991195985246d7ad7cc8a5-38678722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249d136251800449406e9d9129e1f99cd043b4ef' => 
    array (
      0 => '/Users/mac/Desktop/projectx/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/about/templates/about_site.tpl',
      1 => 1364681343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991195985246d7ad7cc8a5-38678722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="focal"> 
  <?php  $_smarty_tpl->tpl_vars['paragraph'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('moduleStrings')->value['SITE_ABOUT_HTML']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['paragraph']->key => $_smarty_tpl->tpl_vars['paragraph']->value){
?>
    <p><?php echo $_smarty_tpl->tpl_vars['paragraph']->value;?>
</p>
  <?php }} ?>
  <p>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ABOUT_SITE_VERSION",$_smarty_tpl->getVariable('devicePhrase')->value);?>

  </p>
  <p>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ABOUT_SITE_FEEDBACK_MESSAGE",$_smarty_tpl->getVariable('strings')->value['FEEDBACK_EMAIL']);?>

  </p> 
</div> 

<div class="nonfocal legend"> 
  <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ABOUT_SITE_NOTE",$_smarty_tpl->getVariable('strings')->value['SITE_NAME']);?>
</p>
</div> 
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
