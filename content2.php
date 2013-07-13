<?php
	$con = mysql_connect('localhost','root','');
	if(!$con){
		die('could not connect:'.mysql_errno());
	}
	
	mysql_select_db('freshman',$con);
	mysql_query("SET NAMES 'utf8'");
	$name = "SELECT * FROM dc_newsinfo WHERE catid = 32";
	$result = mysql_query($name);
	while($row = mysql_fetch_object($result)){
			$sam = mysql_query("INSERT INTO fm_posts (title,content,source,author_id,created_date,status)
			VALUES('$row->title','$row->newscontent','$row->source','1','$row->addtime','1')");
		$name1 = "SELECT `id` FROM fm_posts where title= '$row->title'";
		$name2 = mysql_query($name1,$con);
		$name3 = mysql_fetch_array($name2);
		mysql_query("INSERT INTO fm_posts_categories(post_id,category_id) VALUES ($name3[0],'1')");
		 mysql_query("INSERT INTO fm_posts_tags(post_id,tag_id) VALUES ($name3[0],'1')");
		$naem = mysql_query("INSERT INTO `fm_post_metas`(`post_id`,`key`,`value`) VALUES ($name3[0],'campus','大学城')");
	}

	$name = "SELECT * FROM dc_newsinfo WHERE catid = 34";
	$result = mysql_query($name);
	while($row = mysql_fetch_object($result)){
			$sam = mysql_query("INSERT INTO fm_posts (title,content,source,author_id,created_date,status)
			VALUES('$row->title','$row->newscontent','$row->source','1','$row->addtime','1')");
		$name1 = "SELECT `id` FROM fm_posts where title= '$row->title'";
		$name2 = mysql_query($name1,$con);
		$name3 = mysql_fetch_array($name2);
		mysql_query("INSERT INTO fm_posts_categories(post_id,category_id) VALUES ($name3[0],'2')");
		 mysql_query("INSERT INTO fm_posts_tags(post_id,tag_id) VALUES ($name3[0],'1')");
		$naem = mysql_query("INSERT INTO `fm_post_metas`(`post_id`,`key`,`value`) VALUES ($name3[0],'campus','大学城')");
	}

	$name = "SELECT * FROM dc_newsinfo WHERE catid = 45";
	$result = mysql_query($name);
	while($row = mysql_fetch_object($result)){
			$sam = mysql_query("INSERT INTO fm_posts (title,content,source,author_id,created_date,status)
			VALUES('$row->title','$row->newscontent','$row->source','1','$row->addtime','1')");
		$name1 = "SELECT `id` FROM fm_posts where title= '$row->title'";
		$name2 = mysql_query($name1,$con);
		$name3 = mysql_fetch_array($name2);
		mysql_query("INSERT INTO fm_posts_categories(post_id,category_id) VALUES ($name3[0],'3')");
		 mysql_query("INSERT INTO fm_posts_tags(post_id,tag_id) VALUES ($name3[0],'1')");
		$naem = mysql_query("INSERT INTO `fm_post_metas`(`post_id`,`key`,`value`) VALUES ($name3[0],'campus','大学城')");
	}
	$name = "SELECT * FROM dc_newsinfo WHERE catid = 36";
	$result = mysql_query($name);
	while($row = mysql_fetch_object($result)){
			$sam = mysql_query("INSERT INTO fm_posts (title,content,source,author_id,created_date,status)
			VALUES('$row->title','$row->newscontent','$row->source','1','$row->addtime','1')");
		$name1 = "SELECT `id` FROM fm_posts where title= '$row->title'";
		$name2 = mysql_query($name1,$con);
		$name3 = mysql_fetch_array($name2);
		mysql_query("INSERT INTO fm_posts_categories(post_id,category_id) VALUES ($name3[0],'4')");
		 mysql_query("INSERT INTO fm_posts_tags(post_id,tag_id) VALUES ($name3[0],'1')");
		$naem = mysql_query("INSERT INTO `fm_post_metas`(`post_id`,`key`,`value`) VALUES ($name3[0],'campus','大学城')");
	}