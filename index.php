<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<title>Luca Romano / Bootstrap wysihtml5 with image upload</title>
<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css" />
<script src="lib/js/wysihtml5-0.3.0.js"></script>
<script src="lib/js/jquery-1.7.2.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="src/bootstrap3-wysihtml5.js"></script>
</head>
<body>
<div class="container">
	<div class="hero-unit" style="margin-top:40px">
		<h1 style="font-size:58px">Bootstrap3 Wysihtml5 <small>Finally, with image upload!</small></h1>
		<hr/>
		<textarea class="textarea form-control" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
	</div>
	<div class="row">
		<div class="span6">
			<h2>About</h2>
			<p> bootstrap3-wysihtml5 is a javascript plugin that makes it easy to create simple, beautiful wysiwyg editors with the help of <a href="https://github.com/xing/wysihtml5">wysihtml5</a> and <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> </p>
			<p> It based on the Project <a href="https://github.com/schnawel007/bootstrap3-wysihtml5">https://github.com/schnawel007/bootstrap3-wysihtml5</a> </p>
			<p style="text-align:center; margin-top:20px"> <a class="btn btn-large btn-primary" target="_blank" href="https://github.com/lucaromano18/bootstrap3-wysiwyg-image">View project on Github</a> </p><p style="text-align:center; margin-top:20px"> <a class="btn btn-large btn-primary" target="_blank" href="http://www.lucaromano.net/workin/bootstrap3-wysihtml5/">Online demo</a> </p>
		</div>
		<div class="span6" >
			<h2>Usage</h2>
			<p>
			<pre class="prettyprint linenums">$('.textarea').wysihtml5();</pre>
			</p>
		</div>
	</div>
</div>
<script>
    $('.textarea').wysihtml5();
</script> 
</body>
</html>
