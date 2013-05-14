<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>统计数据</title>
	<!--[if IE]>
		<script type="text/javascript" src="../common/html5.js"></script>
		<link type="text/css" rel="stylesheet" href="../common/ie.min.css" />
		<link type="text/css" rel="stylesheet" href="../common/ie6.min.css" />
	<![endif]-->

	<script type="text/javascript" src="../common/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="../common/jquery.form.js"></script>
	<link type="text/css" rel="stylesheet" href="../common/style.css" />
	<link type="text/css" rel="stylesheet" href="../css/header.css" />
	<style type="text/css">
		span.left{float:left;width:160px;height: 670px;background:url(../pics/home_side.jpg) no-repeat #093d86;}
		span.right{float:right;width:160px;height:670px;background:url(../pics/home_side.jpg) no-repeat #093d86;}
		footer{width:948px;margin:23px auto;text-align: center;}
		section.middle {background:#cfcfcf;padding:55px;}
		section.content{background:url(../pics/system.png) no-repeat;width:853px;height:494px;position:relative;margin:0 auto;padding:20px 20px 0 40px;}
		section.middle ul{width:115px;}
		section.middle ul li{float:left;background:#093d86;height:28px;width:115px;text-align: center;line-height: 28px;font-size:14px;font-weight:bold;margin-bottom:5px;}
		li.statistics{margin-top: 30px;}
		li.statistics_date{}
		li.statistics_auditexam{}
		li.statistics_origin{}
		li.statistics_type{}
		li.statistics_difficulty{}
		li.statistics_questiontype{}
		li.statistics_theme{}
		li.statistics_pics{}
		h3{position: absolute;top:-27px;left:352px;background:url(../pics/canvas.png) 0 -407px no-repeat;width:115px;height:28px;text-align: center;line-height: 28px;}
		section.middle ul li a{color:#fff;}
		section.middle ul li a:hover{text-decoration: underline;}
		table{width:630px;margin-left: 150px;text-align: center;}
		table th{background:#4f81bd;border-bottom:5px solid #fff;height:24px;line-height:24px;padding:0 8px;color:#fff;font-weight:bold;text-align: center;}
		table td{border-bottom: 2px solid #fff;height:20px;line-height: 20px;padding:0 8px;}
		table tr.odd{background:#d0d8e8;}
		table tr.even{background:#e9edf4;}
	</style>
</head>
<body id="container">
	<header>
		<div id="div_logout">
			<a href="login/logout" id="logout">注销</a>
		</div>
		<span class="current_user">您好!<?php echo $this->session->userdata('user')['user_realname']?></span>
		<nav>
			<a href="home" id="home">首页</a>
			<a href="question" id="question">添加题目</a>
			<a href="question_scan" id="question_scan">浏览题目</a>
			<a href="statistics" id="statistics" class="selected">统计数据</a>
			<a href="download" id="download" >资料下载</a>
			<a href="personal" id="personal">个人账号</a>
			<a href="system" id="system">系统</a>
		</nav>
	</header>
	<span class="left"></span>
	<span class="right"></span>

	<article id="body_container" >
		<section class="middle">
			<section class="content">
				<h3>图片题目统计信息</h3>
				<ul>
					<li class="statistics"><a href="statistics" >题库</a></li>
					<li class="statistics_date"><a href="statistics_date" >日期</a></li>
					<li class="statistics_auditexam"><a href="statistics_auditexam" >审核题库</a></li>
					<li class="statistics_origin"><a href="statistics_origin">出题人</a></li>
					<li class="statistics_type"><a href="statistics_type">题库类型</a></li>
					<li class="statistics_difficulty"><a href="statistics_difficulty">难度类型</a></li>
					<li class="statistics_questiontype"><a href="statistics_questiontype" >题目类型</a></li>
					<li class="statistics_theme"><a href="statistics_theme">题目题材</a></li>
					<li class="statistics_pics"><a href="statistics_pics">图片题目</a></li>
				</ul>				
				<label for="question_exam_image">选择题库</label>
				<select id="question_exam_image">
					<option value="0">审核题库</option>
					<option value="3">使用题库</option>
				</select>
				<table id="pic_audit">
					<tr>
						<th>题库</th>
						<th>题目编号</th>
						<th>题目难度</th>
						<th>题库用途</th>
						<th>题目</th>
						<th>图片编号</th>
						<th>图片大小</th>
						<th>出题人</th>
						<th>最后修改人</th>
						<th>最后修改时间</th>
					</tr>
					<?php 
						foreach ($pic['audit'] as $key => $value) {
							echo '<tr>';
							echo '<td>'.$value['type'].'</td>';
							echo '<td>'.$value['id'].'</td>';
							echo '<td>'.$value['difficulty'].'</td>';
							echo '<td>'.$value['purpose'].'</td>';
							echo '<td>'.$value['question'].'</td>';
							echo '<td>'.$value['icon'].'</td>';
							echo '<td>'.''.'</td>';
							echo '<td>'.$value['name_origin'].'</td>';
							echo '<td>'.$value['name_update'].'</td>';
							echo '<td>'.$value['time_update'].'</td>';
							echo '</tr>';
						}		
					?>
				</table>
				<table id="pic_use">
					<tr>
						<th>题库</th>
						<th>题目编号</th>
						<th>题目难度</th>
						<th>题库用途</th>
						<th>题目</th>
						<th>图片编号</th>
						<th>图片大小</th>
						<th>出题人</th>
						<th>最后修改人</th>
						<th>最后修改时间</th>
					</tr>
					<?php 
						foreach ($pic['use'] as $key => $value) {
							echo '<tr>';
							echo '<td>'.$value['type'].'</td>';
							echo '<td>'.$value['id'].'</td>';
							echo '<td>'.$value['difficulty'].'</td>';
							echo '<td>'.$value['purpose'].'</td>';
							echo '<td>'.$value['question'].'</td>';
							echo '<td>'.$value['icon'].'</td>';
							echo '<td>'.''.'</td>';
							echo '<td>'.$value['name_origin'].'</td>';
							echo '<td>'.$value['name_update'].'</td>';
							echo '<td>'.$value['time_update'].'</td>';
							echo '</tr>';
						}		
					?>
				</table>
			</section>
		</section>
		<footer>
			<p>沪ICP备08009851号</p>
			<p>Copyright 2007-2010上海佳游网络 Corporation All rights reserved.</p>
		</footer>
	</article>

<script type="text/javascript">

</script>

</body>
</html>