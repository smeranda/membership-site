<?php /* Smarty version 2.6.27, created on 2013-11-01 21:00:00
         compiled from CRM/Member/Page/MembershipType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Member/Page/MembershipType.tpl', 27, false),array('function', 'docURL', 'CRM/Member/Page/MembershipType.tpl', 29, false),array('function', 'cycle', 'CRM/Member/Page/MembershipType.tpl', 58, false),array('block', 'ts', 'CRM/Member/Page/MembershipType.tpl', 29, false),array('modifier', 'crmMoney', 'CRM/Member/Page/MembershipType.tpl', 62, false),array('modifier', 'replace', 'CRM/Member/Page/MembershipType.tpl', 70, false),)), $this); ?>

<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/scheduleReminders','q' => 'reset=1'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('reminderLink', ob_get_contents());ob_end_clean(); ?>
<div id="help">
  <p><div class="icon inform-icon"></div>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership types are used to categorize memberships. You can define an unlimited number of types. Each type incorporates a 'name' (Gold Member, Honor Society Member...), a description, a minimum fee (can be $0), and a duration (can be 'lifetime'). Each member type is specifically linked to the membership entity (organization) - e.g. Bay Area Chapter.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/membership/setup"), $this);?>
</p>
  <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['reminderLink'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure membership renewal reminders using <a href="%1">Schedule Reminders</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/email/scheduled-reminders"), $this);?>
</p>
</div>

<?php if ($this->_tpl_vars['rows']): ?>
<div id="membership_type">
  <?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/enableDisable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '<table id="options" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Membership'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Period'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Fixed Start'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Minimum Fee'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Duration'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew Option'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Related'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Max'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Visibility'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th id="order" class="sortable">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Order'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Enabled?'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th><th class="hiddenElement"></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id="row_'; ?><?php echo $this->_tpl_vars['row']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => 'odd-row,even-row'), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['row']['class']; ?><?php echo ' crm-membership-type '; ?><?php if (! $this->_tpl_vars['row']['is_active']): ?><?php echo ' disabled'; ?><?php endif; ?><?php echo '"><td class="crm-membership-type-type_name">'; ?><?php echo $this->_tpl_vars['row']['name']; ?><?php echo '</td><td class="crm-memberhip-type-period_type">'; ?><?php echo $this->_tpl_vars['row']['period_type']; ?><?php echo '</td><td class="crm-membership-type-fixed_period_start_day">'; ?><?php echo $this->_tpl_vars['row']['fixed_period_start_day']; ?><?php echo '</td><td class="crm-membership-type-minimum_fee" align="right">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?><?php echo '</td><td class="crm-membership-type-duration_interval_unit">'; ?><?php echo $this->_tpl_vars['row']['duration_interval']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['row']['duration_unit']; ?><?php echo '</td><td class="crm-membership-type-auto-renew">'; ?><?php if ($this->_tpl_vars['row']['auto_renew'] == 2): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Required'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['row']['auto_renew'] == 1): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Optional'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</td><td class="crm-membership-type-relationship_type_name">'; ?><?php echo $this->_tpl_vars['row']['relationshipTypeName']; ?><?php echo '</td><td class="crm-membership-type-max_related" align="right">'; ?><?php echo $this->_tpl_vars['row']['maxRelated']; ?><?php echo '</td><td class="crm-membership-type-visibility">'; ?><?php echo $this->_tpl_vars['row']['visibility']; ?><?php echo '</td><td class="nowrap crm-membership_type-order">'; ?><?php echo $this->_tpl_vars['row']['order']; ?><?php echo '</td><td class="crm-membership-type-status_'; ?><?php echo $this->_tpl_vars['row']['id']; ?><?php echo '" id="row_'; ?><?php echo $this->_tpl_vars['row']['id']; ?><?php echo '_status">'; ?><?php if ($this->_tpl_vars['row']['is_active'] == 1): ?><?php echo ' '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Yes'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' '; ?><?php else: ?><?php echo ' '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' '; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['row']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['row']['id'])); ?><?php echo '</td><td class="order hiddenElement">'; ?><?php echo $this->_tpl_vars['row']['weight']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>


  <?php if ($this->_tpl_vars['action'] != 1 && $this->_tpl_vars['action'] != 2): ?>
    <div class="action-link">
      <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/member/membershipType/add','q' => "action=add&reset=1"), $this);?>
" id="newMembershipType" class="button"><span><div class="icon add-icon"></div><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Membership Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    </div>
  <?php endif; ?>
</div>
<?php else: ?>
  <?php if ($this->_tpl_vars['action'] != 1): ?>
  <div class="messages status no-popup">
    <img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/Inform.gif" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/>
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/member/membershipType/add','q' => "action=add&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('crmURL', ob_get_contents());ob_end_clean(); ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['crmURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no membership types entered. You can <a href='%1'>add one</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <?php endif; ?>
<?php endif; ?>