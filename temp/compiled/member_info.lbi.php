<em class="tel" style="display:inline-block; height:28px; line-height: 28px;">全国统一服务热线：0539-8888888 </em>
<?php if ($this->_var['user_info']): ?>
<em style="padding-left:15px;"><?php echo $this->_var['user_info']['username']; ?> <?php echo $this->_var['lang']['welcome_return']; ?>！</em> 
<a class="sn-login" href="user.php" target="_top"><?php echo $this->_var['lang']['user_center']; ?></a>
<a class="sn-register" href="user.php?act=logout" target="_top"><?php echo $this->_var['lang']['user_logout']; ?></a> 
<?php else: ?> 
<em style="padding-left:15px;"><?php echo $this->_var['lang']['welcome']; ?>!</em>
<a class="sn-login" href="user.php" target="_top">请登录</a>
<a class="sn-register" href="register.php" target="_top">免费注册</a> 
<?php endif; ?>