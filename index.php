<?php header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type'); ?>
<?php
	$t = "Super Blue Robocop";//isset($_GET["t"]) ? $_GET["t"] : ""
	$d = "Super NES";
	$img = "https://upload.wikimedia.org/wikipedia/en/f/f1/Mega_Man_X_Coverart.png";
?>
<html prefix="og: http://ogp.me/ns#">
	<head>
		<title><?php echo $t; ?></title>
		<meta property="og:title" content="<?php echo $t; ?>" />
		<meta property="og:description" content="<?php echo $d; ?>" />
		<meta property="og:image" itemprop="image" content="<?php echo $img; ?>" />
		<meta property="og:type" content="website" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Roboto', sans-serif;
                font-size: 18px;
                line-height: 1.6;
                background-image: linear-gradient(136deg, #f5f7fa 0%, #c3cfe2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                min-height: 100vh;
                background-color:#6f0000;
            }
        </style>
	</head>
	<body>
		<div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:#fafafa;">
			<div style="padding: 10px;">
			<img style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);display:block;margin-top:25px;" src=<?php echo $img; ?> />
			<h2 style="text-align: center"><?php echo $t;?></h2>
			<p style="text-align: center"><?php echo $d;?></p>
		    </div>
		</div>
	</body>
</html>