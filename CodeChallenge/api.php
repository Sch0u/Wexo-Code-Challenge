<?php

// Define stuff
$url = "https://feed.entertainment.tv.theplatform.eu/f/jGxigC/bb-all-pas?form=json&range=1-20";
$ch = curl_init();

// Setopt
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($ch);

curl_close($ch); 

//Decode
$response = json_decode($response, true);

$entries = $response["entries"];

// Get the contents of the JSON file 
$strJsonFileContents = file_get_contents("cache/genres.txt");
// Convert to array 
$genres = json_decode($strJsonFileContents, true);

// Movie count (Numbers of movies in the list)
$movieCount = count($entries);

// Creating Rows of cards
$tp = "";
foreach($genres as $genre){
    $tp .= "<div class='container-fluid'>
          <h1 class='mt-5' style='color: white;'>$genre ($movieCount)</h1>
            <div class='scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2'>";
// Creating collumns of cards
    foreach($entries as $entry){
        $my_title = $entry['title'];
        $my_description = $entry['description'];
        $thumb = ($entry['plprogram$thumbnails']);
        $bigThumb = array_search(max($thumb), $thumb);
        $my_img = $entry['plprogram$thumbnails'][$bigThumb]['plprogram$url'];
        $program_id = $entry['guid'];
        $my_id = preg_replace('/[^0-9.]+/', '', $program_id);

        // Shortens the description of the movies
        if (strlen($my_description) > 100) {
            $stringCut = substr($my_description, 0, 100);
            $endPoint = strrpos($stringCut, ' ');
            $my_description = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $my_description .= '...';
        }
        // Shortens the title of the movies
        if (strlen($my_title) > 30) {
            $stringCut = substr($my_title, 0, 30);
            $endPoint = strrpos($stringCut, ' ');
            $my_title = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $my_title .= '...';
        }

        // Adds text if there is no description for the movie.
        if (strlen($my_description) <= 0) {
            $my_description = 'Der er desværre ingen beskrivelse til denne film..<br><br>';
        }

        // Creation of the individual card.
        $tp .= "<form action='wishlist.php' method='post'>
        <div class='col-2'>
        <div class='card'>
        <img class='card-img-top' src='$my_img' alt='Billedet kunne ikke læses'>
        <div class='card-body'>
        <h5 class='card-title' name='mtitlte'>$my_title</h5>
        <p class='card-text' name='mdescription'>$my_description</p>
        <a class='btn btn-primary' href='movie.php/$my_id'>Læs Mere</a>
        <button class='btn btn-secondary' name='wishlist' type='submit'>Add to wishlist</button>
        </form>
        </div>   
        </div>  
        </div>";
    }
    $tp .= "</div></div>";
}

echo $tp
?>