<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo lang('welcome_to_lmtools'); ?></title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
	label
	{
		display: block;	
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	
	.error
	{
		color: #F00;	
	}
	.ok
	{
		color: #238E23;	
	}
	
	</style>
</head>
<body>

<div id="container">
	<h1><?php echo lang('welcome_to_lmtools'); ?></h1>

	<div id="body">
		
		
		<p><?php echo lang('need_admin_user'); ?></p>
		
		<?php echo validation_errors(); ?>

		<form method="post" action="">
			<p>
				<label for="email"><?php echo lang('email_address'); ?></label>	
				<input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>">
			</p>
			
			<p>
				<label for="password"><?php echo lang('password'); ?></label>	
				<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
			</p>		
			
			<p>
				<label for="password_confirm"><?php echo lang('password_confirm'); ?></label>	
				<input type="password" name="password_confirm" id="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
			</p>		
				
			<p>
				
				<input type="submit" name="create" value="<?php echo lang('create'); ?>">
			</p>			
						
		</form>
		
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>