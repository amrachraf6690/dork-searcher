<head>
    <title>Search Me</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">

<!---- ASK Search Start --->
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Ask.com_Logo.svg" alt="" height="50">
    <form action="" method="post">
    <input type="text" name="kw" id="">
    <button name="ask" class="btn btn-primary" type="submit">Search</button>
    </form>
    </center>
    
<?php
require 'simple_html_dom.php';
if(isset($_POST['ask'])){
$kw= $_POST['kw'];
$html = file_get_html('https://www.ask.com/web?q='.$kw);
$titles = array();
foreach($html->find('.PartialSearchResults-item-url') as $t){
 $titles[] = $t->innerText();
}

echo "<pre>";
print_r($titles);
echo '</pre><div class="alert alert-success" role="alert">
<h4 class="alert-heading">Good Job!</h4>
<p>You used the ASK Searcher.</p>
<hr>
<p class="mb-0">also you can try <a href="bing.php">Bing Searcher</a><br><br><footer class="blockquote-footer">Made with ❤ by <cite title="Source Title">amrachraf6690</cite></footer> </p>
</div>
';
}

?>
</body>