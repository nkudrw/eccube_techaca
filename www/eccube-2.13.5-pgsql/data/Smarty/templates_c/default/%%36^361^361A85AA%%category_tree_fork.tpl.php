<?php /* Smarty version 2.6.27, created on 2016-06-08 23:10:45
         compiled from /vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl', 24, false),array('modifier', 'h', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl', 27, false),array('modifier', 'default', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/category_tree_fork.tpl', 27, false),)), $this); ?>

<?php echo '<ul '; ?><?php if (((is_array($_tmp=$this->_tpl_vars['treeID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?><?php echo 'id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['treeID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"'; ?><?php endif; ?><?php echo ' style="'; ?><?php if (! ((is_array($_tmp=$this->_tpl_vars['display'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo 'display: none;'; ?><?php endif; ?><?php echo '">'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['children'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?><?php echo '<li class="level'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['child']['level'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['child']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['tpl_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><?php echo ' onmark'; ?><?php endif; ?><?php echo '"><p><a href="'; ?><?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'products/list.php?category_id='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['child']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"'; ?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['child']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['tpl_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><?php echo ' class="onlink"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']['category_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '('; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']['product_count'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?><?php echo ')</a></p>'; ?><?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['child']['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['arrParentID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?><?php echo ''; ?><?php $this->assign('disp_child', 1); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('disp_child', 0); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['child']['children'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/bloc/category_tree_fork.tpl", 'smarty_include_vars' => array('children' => ((is_array($_tmp=$this->_tpl_vars['child']['children'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'display' => ((is_array($_tmp=$this->_tpl_vars['disp_child'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?>
