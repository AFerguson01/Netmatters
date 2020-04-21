<?php
include $_SERVER['DOCUMENT_ROOT'].'/connection-newsfeed.php';
if ($db == NULL){}
else{
    $statement = $db->prepare("SELECT * FROM posts WHERE ID=?");


    for( $i=1; $i<=3; $i++ ){
        $statement->bindValue(1, $i);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo '
        <!-- Article #1 ------------------- -->
        <div class="article">
            <div class="img">
                <img src="img/'.$results[0]["Image"].'" alt="Article Image">
                <div onclick="location.href=\'https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business\'"></div>
                <a href="https://www.netmatters.co.uk/insights/bespoke-software">'.$results[0]["Category"].'</a>
            </div>
            <div class="content">
                <h4><a href="https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business" class="title">'.$results[0]["Title"].'</a></h4>
                <p>'.$results[0]["Description"].'</p>
                <a class="btn" href="https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business">Read More</a>
            </div>
            <div class="author">
                <img src="img/'.$results[0]["Author Image"].'" alt="'.$results[0]["Author"].'">
                <div>
                    <h4>Posted by '.$results[0]["Author"].'</h4>
                    <p>'.$results[0]["Date"].'</p>
                </div>
            </div>
        </div>
        ';
    }
}

?>