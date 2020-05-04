<?php
include $_SERVER['DOCUMENT_ROOT'].'/db-connection.php';
if ($db == NULL){}
else{
    $statement = $db->prepare("SELECT * FROM  posts ORDER BY `date` DESC LIMIT 3");


    for( $i=0; $i<=2; $i++ ){
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo '
        <!-- Article ------------------- -->
        <div class="article">
            <div class="img">
                <img src="img/'.$results[$i]["Image"].'" alt="Article Image">
                <div onclick="location.href=\'https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business\'"></div>
                <a href="https://www.netmatters.co.uk/insights/bespoke-software">'.$results[$i]["Category"].'</a>
            </div>
            <div class="content">
                <h4><a href="https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business" class="title">'.$results[$i]["Title"].'</a></h4>
                <p>'.$results[$i]["Description"].'</p>
                <a class="btn" href="https://www.netmatters.co.uk/automation-10-things-it-can-do-for-your-business">Read More</a>
            </div>
            <div class="author">
                <img src="img/'.$results[$i]["Author Image"].'" alt="'.$results[$i]["Author"].'">
                <div>
                    <h4>Posted by '.$results[$i]["Author"].'</h4>
                    <p>'.$results[$i]["Date"].'</p>
                </div>
            </div>
        </div>
        ';
    }
}

?>