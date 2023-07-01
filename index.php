
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>    
            <h1 id="hLabel" >All University API</h1>
    </header>
    <table>
        <th id="thc">#</th>
        <th id="thc1">University Name</th>
        <th id="thc2">Country</th>
        <th id="thc3">Domain</th>
        <th id="thc4">web page</th>
        
    <?php
        $file="http://universities.hipolabs.com/search?country=United+Kingdom";
        $content= file_get_contents($file);
        $json=json_decode($content);
    // var_dump($json);
        $i=1;
        foreach($json as $key=>$value) {
                $name = $json[$key]->name;
                $country=$json[$key]->country;
                $domain=$json[$key]->domains[0];
                $webPage=$json[$key]->web_pages[0];
                //$age = $decoded_json[$key]["age"];  
                echo '<tr class="tr1">'   ;
                echo '<td class="nme">'.$i++.'</td>';
                echo '<td class="nme">'.$name.'</td>';
                echo '<td class="cnt">'.$country.'</td>';
                echo '<td class="dmn">'.$domain.'</td>';
                echo '<td class="web"><a class="web" href="'.$webPage.'">'.$webPage.'</a></td>';
                echo '</tr>';
                } 

    ?>    
        
    </table>
    <footer>
            <p>© 2023 My Webpage. All rights reserved for cacah2014.</p>
            <p>contact us for any request <a href="mailto:" class="links">/a> </p>
            <p>whats app : <a href="" class="links"></a></p>
    </footer>
</body>
</html>