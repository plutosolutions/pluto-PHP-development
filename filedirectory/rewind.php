<?
	$handle = fopen("info.txt", "r");
	$content = fgets($handle,10);
	echo "��ҹ�����Ũҡ�����駷�� 1 $content <br>";
	rewind($handle);
	$content = fgets($handle,10);
	echo "��ҹ�����Ũҡ�����駷�� 2 $content <br>";	
	rewind($handle);
	$content = fgets($handle,10);
	echo "��ҹ�����Ũҡ�����駷�� 3 $content <br>";
	fclose($handle);
?>