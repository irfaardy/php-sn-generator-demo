<!DOCTYPE html>
<html>
<head>
	<title>PHP Serial Number Generator</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css" integrity="sha512-SgMx4umLagm9ctwfuw66X5M/nLu7gTZrh8gYKfzxgHQBxQeIelAG2hyfnjveLfkuRProaaw55KKPCFlIulOzjQ==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/js/bootstrap.min.js" integrity="sha512-nBe/MAVnca0bCImmi2/WzJoGCgaUOMVDtTXFXUcxuLuFLUc3FGdOx8LR28WxgocUumd4Db5k5Ppjqz1M1Ijy1A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
body{
	background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #1D4350 , #A43931); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #1D4350 , #A43931); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  min-height: 500px;
  
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}
</style>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>#forkongithub a{background:#000;color:#fff;text-decoration:none;font-family:arial,sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:1rem;line-height:2rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#c11;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;top:0;right:0;width:200px;overflow:hidden;height:200px;z-index:9999;}#forkongithub a{width:200px;position:absolute;top:35px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}</style>
</head>
<body>
	<span id="forkongithub"><a href="https://github.com/irfaardy/php-sn-generator/fork"><i class="fa fa-github" aria-hidden="true"></i> Fork me on GitHub</a></span>
<section id="contact">
			<div class="section-content">
				<h1 class="section-header">PHP Serial Number Generator</h1>
				<h3><a style="color: #FFF" href="https://github.com/irfaardy/php-sn-generator">PHP-SN-GENERATOR DEMO</a></h3>

			</div>
			<div class="contact-section">
			<div class="container">
				<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Lenght</label>
					    	<input type="number" name="length" min="1" value="<?= isset($_POST['length']) ? $_POST['length']:'4' ?>"  class="form-control" id="" placeholder=" Number of length">
				  		</div>
					  	<div class="form-group">
					    	<label for="telephone">Segment</label>
					    	<input type="number" name="segment" min="1" value="<?= isset($_POST['length']) ? $_POST['segment']:'4' ?>"  class="form-control" id="telephone" placeholder=" Number of Segment">
			  			</div>	
			  			<div class="form-group">
					    	<label for="spr">Seperator</label>
					    	<input name="seperator" type="text" value="<?= isset($_POST['seperator']) ? $_POST['seperator']:'-' ?>" class="form-control" id="spr" placeholder=" Seperator">
			  			</div>	
			  			<div class="form-group">
					    	<label for="telephone">Charset</label>
					    	<input type="text" name="charset" required="" value="<?= isset($_POST['charset']) ? $_POST['charset']:'0123456789ABCDEFGHIJKLMNPQRSTUWXYZ' ?>" class="form-control" id="spr" placeholder=" Seperator">
					    	<hr>
					    	<div>

			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-play" aria-hidden="true"></i>  Execute</button>
			  			</div>
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Result</label>
			  			 	<textarea  class="form-control" readonly="" id="description" placeholder="Results"><?php 
									require "vendor/autoload.php";
									use Irfa\SerialNumber\Func\SerialNumber;
								if ($_SERVER['REQUEST_METHOD'] === 'POST') {
									$sn = new SerialNumber();
									$sn->setConfig([	
				                        'length' => isset($_POST['length']) ? $_POST['length']:"",
				                        'segment' => isset($_POST['segment']) ? $_POST['segment']:"",
				                        'seperator' => isset($_POST['seperator']) ? $_POST['seperator']:"",
				                        'charset' =>  isset($_POST['charset']) ? $_POST['charset']:""
				                    ]);
									echo $sn->generate();
								}
								?></textarea>
			  			</div>
			  		
			  			
					</div>
				</form>
			</div>
		</section>
		<div class="container">
			<span style="color: #FFF">Developed by <a style="color: #FFF; font-weight: bold;" href="https://github.com/irfaardy/">Irfa Ardiansyah</a></span>
		</div>
</body>
</html>
