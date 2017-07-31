<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">

<title>PROLOG</title>
<?php
date_default_timezone_set("Asia/Taipei");
$this->load->helper('url');
$this->load->model('user_model', 'user');
$this->load->view('empty.php');

$this->user->check_login();
if($level > 0)
{
	if($this->session->userdata('user_id'))
	{
		if($this->session->userdata('user_level') < $level)
		{
			
			$this->session->set_flashdata('msg','Permission denied. (no authentication)');
			redirect($this->session->flashdata('redirect_from'));
			exit('');
		}
	}
	
}
?>
<link type="text/css" rel="stylesheet" href="/judge/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/judge/css/style.css" />
<link type="text/css" rel="stylesheet" href="/judge/css/syntaxhilighter.css" />

<script type="text/javascript" src="/judge/js/jquery.js"></script>
<script type="text/javascript" src="/judge/js/function.js"></script>
<script type="text/javascript" src="/judge/js/syntaxhilighter.js"></script>
<script type="text/javascript" src="/judge/js/bootstrap.min.js"></script>
</head>

<body>
<!-- HEAD -->

<div id="bodydiv">
	<?php
		$this->load->view($main.'.php');
	?>
</div>

</body>
</html>

<?php
$this->session->set_flashdata('redirect_from', current_url());
?>
