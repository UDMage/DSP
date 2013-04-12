<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	<title>Ключ Авто</title>
</head>

<body>
<select>
    <?php
        $REL_PRO_array = array();
        
        $a = 5; $d = "Пять";
        $b = 7; $e = "Семь";
        $c = 9; $f = "Девять";
        
        $REL_PRO_array[$a] = $d;
        $REL_PRO_array[$b] = $e;
        $REL_PRO_array[$c] = $f;
        
        asort($REL_PRO_array);
        
        foreach ($REL_PRO_array as $key => $value)
        {
            $REL_PRO .=  "<option value='" . $key . "'>" . $value . "</option>";
        }
        echo $REL_PRO;
    ?>
</select>
</body>
</html>
