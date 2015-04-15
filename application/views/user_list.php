<html> 
    <head> 
    <title><?=$page_title?></title> 
    </head> 
    <body> 
        <? foreach($result as $row) { ?> 
			<?=$row->ID;?> - <?=$row->USER_NAME;?> - <?=$row->USER_PASSWORD;?>
        <? } ?> 
    </body> 
</html>