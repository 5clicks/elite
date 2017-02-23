<?php

//Database Connection
//Database Connection Settings
define ('hostnameorservername','localhost'); // Your server name or host name goes in here
define ('serverusername','root'); // Your database Username goes in here
define ('serverpassword',''); // Your database Password goes in here
//define ('databasenamed','elitedb'); // Your database Name goes in here
define ('databasenamed','elite'); // Your database Name goes in here

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server.');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database.');


if(isset($_POST['vpv_search_box']) && !empty($_POST['vpv_search_box']))
{
	$search_term = strip_tags($_POST['vpv_search_box']);
	
	//$search_for_people = mysql_query("select * from `auto_search_people` where `username` like '%".mysql_real_escape_string($search_term)."%' and `identification` = '".mysql_real_escape_string("normal")."' order by `id` desc limit 4");
	$search_for_people = mysql_query("select * from `schools` where `name` like '%".mysql_real_escape_string($search_term)."%' and `status` = '".mysql_real_escape_string("1")."' order by `id` desc limit 4");
	
	if(mysql_num_rows($search_for_people) > 0)
	{
		?>
        <li class="vpb_titles"><span class="text">Students</span></li>
        <?php
		while($get_people_found = mysql_fetch_array($search_for_people))
		{
			if(empty($get_people_found['created_at']))
			{
				$avatar = 'http://localhost/elite/assets/search/photos/avatar.gif';
			}
			else
			{
				$avatar = 'http://localhost/elite/assets/search/photos/'.strip_tags($get_people_found['created_at']);
			}
			?>
            
            <li>
                <a href="#" onclick="clickable('<?php echo strip_tags($get_people_found['id']); ?>','<?php echo strip_tags($get_people_found['name']); ?>','<?php echo strip_tags($get_people_found['address']); ?>');">
                
                    <img src="<?php echo $avatar; ?>" width="50" height="50" border="0" />
                    <div style="float:right;">
                    	<span class="text"><?php echo strip_tags($get_people_found['name']); ?></span><br>
                    	<span class="category"><?php echo strip_tags($get_people_found['address']); ?></span>
                	</div>
                    
                </a>
            </li>
            <?php
		}
		$search_for_pages = mysql_query("select * from `schools` where `name` like '%".mysql_real_escape_string($search_term)."%' and `status` = '".mysql_real_escape_string("1")."' order by `id` desc limit 4");
		
		
		if(mysql_num_rows($search_for_pages) > 0)
		{
			?>
            <li class="vpb_titles"><span class="text">Schools</span></li>
            <?php
			while($get_pages_found = mysql_fetch_array($search_for_pages))
			{
				if(empty($get_pages_found['created_at']))
				{
					$avatar = 'http://localhost/elite/assets/search/photos/avatar.gif';
				}
				else
				{
					$avatar = 'http://localhost/elite/assets/search/photos/'.strip_tags($get_pages_found['created_at']);
				}
				?>
				
				<li>
					<a href="#" onclick="clickable('<?php echo strip_tags($get_pages_found['id']); ?>','<?php echo strip_tags($get_pages_found['name']); ?>','<?php echo strip_tags($get_pages_found['name']); ?>');">
                    
						<img src="<?php echo $avatar; ?>" width="50" height="50" border="0" />
						<span class="text"><?php echo strip_tags($get_pages_found['name']); ?></span>
						<span class="category"><?php echo strip_tags($get_pages_found['address']); ?></span>
                        
					</a>
				</li>
				<?php
			}
		}
		else
		{
			//Do nothing as our major reason for seaching are people and not pages
		}
		?>
        <li class="more">
                <span class="text">See more result for <?php echo $search_term; ?> </span>
                <span class="category">Displaying top <?php echo mysql_num_rows($search_for_people)+mysql_num_rows($search_for_pages); ?> results</span>
        </li>
        <?php
	}
	else
	{
		$search_for_pages = mysql_query("select * from `schools` where `name` like '%".mysql_real_escape_string($search_term)."%' and `status` = '".mysql_real_escape_string("1")."' limit 6");
		
		
		if(mysql_num_rows($search_for_pages) > 0)
		{
			?>
            <li class="vpb_titles"><span class="text">Schools</span></li>
            <?php
			while($get_pages_found = mysql_fetch_array($search_for_pages))
			{
				if(empty($get_pages_found['created_at']))
				{
					$avatar = 'http://localhost/elite/assets/search/photos/avatar.gif';
				}
				else
				{
					$avatar = 'http://localhost/elite/assets/search/photos/'.strip_tags($get_pages_found['created_at']);
				}
				?>
				
				<li>
					<a href="#" onclick="clickable('<?php echo strip_tags($get_pages_found['id']); ?>','<?php echo strip_tags($get_pages_found['name']); ?>','<?php echo strip_tags($get_pages_found['name']); ?>');">
                    
						<img src="<?php echo $avatar; ?>" width="50" height="50" border="0" />
						<span class="text"><?php echo strip_tags($get_pages_found['name']); ?></span>
						<span class="category"><?php echo strip_tags($get_pages_found['address']); ?></span>
                        
					</a>
				</li>
				<?php
			}
			?>
            <li class="more">             
                <span class="text">See more result for <?php echo $search_term; ?> </span>
                <span class="category">Displaying top <?php echo mysql_num_rows($search_for_pages); ?> results</span>
            </li>
            <?php
		}
		else
		{
			?>
         	<li class="more">
                <a href="javascript:void(0);">
                    <span class="text">No result found for <?php echo $search_term; ?></span>
                    <span class="category">Please search for others words instead...</span>
                </a>
            </li>
            <?php
		}
	}
}
?>