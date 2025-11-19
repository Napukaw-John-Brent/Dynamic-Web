<?php
    //Atleast 3 String Variable
    $title = "Just the Two of Us";
    $artist = "Grover Washington Jr.";
    $mood = "Romantic";
    $name = "John Brent Napukaw";
    $block = "WD 203";
    $date = "November 19, 2025";

    //Nouns, Verbs, Adjectives Arrays
    $nouns = ["raindrops", "beauty", "sun", "rainbows", "mind", "time", "you", "us", 
             "castles", "sky", "love", "tears", "water", "flowers", "things", "wait", 
             "go", "window", "hall", "dew", "morning", "one"];
    
    $verbs = ["see", "fall", "is", "comes", "shining", "make", "think", "want", "spend", 
            "look", "grow", "wait", "go", "hear", "be", "wanna"];
    
    $adjective = ["crystal", "beautiful", "shining", "those", "my", "some", "two", "big", 
             "no", "wasted", "good", "too", "just", "morning"];

    //Verses, Chorus, Bridge, Outro Arrays
    
    $verse1 = ["<p>I $verbs[0] the $adjective[0] $nouns[0] $verbs[1]</p>",
                "<p>And the $nouns[1] of it all</p>",
                "<p>$verbs[2] when the $nouns[2] $verbs[3] $adjective[2] through</p>",
                "<p>To $verbs[5] $adjective[3] $nouns[3] in $nouns[4]</p>",
                "<p>When I $verbs[6] of $nouns[6] sometime</p>",
                "<p>And I $verbs[15] $verbs[8] $adjective[5] $nouns[5] with $nouns[6]</p>"
                ];
                    
    $chorus = ["<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it if we try</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>Building $nouns[8] in the $nouns[9]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$nouns[6] and $nouns[21]</p>"
                ];
    
    $verse2 = ["<p>We $verbs[9] for $nouns[10], $adjective[8] $nouns[5] for $nouns[11]</p>",
                "<p>$adjective[9] $nouns[12]'s all that $verbs[2]</p>",
                "<p>And it don't $verbs[5] $adjective[8] $nouns[13] $verbs[10]</p>",
                "<p>$adjective[10] $nouns[14] might come to $adjective[3] who $verbs[11]</p>",
                "<p>Not for $adjective[3] who $verbs[11] $adjective[11] late</p>",
                "<p>We gotta $verbs[12] for all we know</p>"];
    
    $bridge = ["<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>"
            ];

    $verse3 = ["<p>I $verbs[13] the $adjective[0] $nouns[0] $verbs[1]</p>",
                "<p>On the $nouns[17] down the $nouns[18]</p>",
                "<p>And it becomes the $nouns[20] $nouns[19]</p>",
                "<p>And, darling, when the $nouns[20] $verbs[3]</p>",
                "<p>And I $verbs[0] the $nouns[20] $nouns[2]</p>",
                "<p>I $verbs[15] $verbs[14] the $nouns[21] with $nouns[6]</p>"];
    
    $outro = ["<p>($adjective[12] the $nouns[6] of $nouns[7])</p>",
                "<p>Yes! The $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>Let's get it together, baby!</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>Yes! The $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>We can $verbs[5] it $adjective[12] the $nouns[6] of $nouns[7]</p>",
                "<p>$adjective[12] the $nouns[6] of $nouns[7]</p>"];
    
    $repeatChorus = 3;
    
    // Chorus Count Variable
    $chorusCount = "\nThe chorus repeats " . $repeatChorus . " times.";

    $bonus = "2"; 
    
    //Type Juggling 
    $totalChorus = $repeatChorus + $bonus; 

    $songInfo = [
    "title" => $title,
    "artist" => $artist,
    "mood" => $mood
    ];

    //Total sections
    $sections = $repeatChorus + 1 + 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Lyric Remix</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align:center;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1><?php echo $title; ?></h1>
<h2><?php echo $artist; ?></h2>
<p>Mood: <?php echo $mood; ?></p>


<p><?php echo $verse1[0]; ?></p>
<p><?php echo $verse1[1]; ?></p>
<p><?php echo $verse1[2]; ?></p>
<p><?php echo $verse1[3]; ?></p>
<p><?php echo $verse1[4]; ?></p>
<p><?php echo $verse1[5]; ?></p>


<p><?php echo $chorus[0]; ?></p>
<p><?php echo $chorus[1]; ?></p>
<p><?php echo $chorus[2]; ?></p>
<p><?php echo $chorus[3]; ?></p>
<p><?php echo $chorus[4]; ?></p>
<p><?php echo $chorus[5]; ?></p>
<p><?php echo $chorus[6]; ?></p>
<p><?php echo $chorus[7]; ?></p>

<p><?php echo $verse2[0]; ?></p>
<p><?php echo $verse2[1]; ?></p>
<p><?php echo $verse2[2]; ?></p>
<p><?php echo $verse2[3]; ?></p>
<p><?php echo $verse2[4]; ?></p>
<p><?php echo $verse2[5]; ?></p>

<p><?php echo $chorus[0]; ?></p>
<p><?php echo $chorus[1]; ?></p>
<p><?php echo $chorus[2]; ?></p>
<p><?php echo $chorus[3]; ?></p>
<p><?php echo $chorus[4]; ?></p>
<p><?php echo $chorus[5]; ?></p>
<p><?php echo $chorus[6]; ?></p>
<p><?php echo $chorus[7]; ?></p>

<p><?php echo $bridge[0]; ?></p>
<p><?php echo $bridge[1]; ?></p>
<p><?php echo $bridge[2]; ?></p>
<p><?php echo $bridge[3]; ?></p>
<p><?php echo $bridge[4]; ?></p>
<p><?php echo $bridge[5]; ?></p>
<p><?php echo $bridge[6]; ?></p>
<p><?php echo $bridge[7]; ?></p>
<p><?php echo $bridge[8]; ?></p>
<p><?php echo $bridge[9]; ?></p>
<p><?php echo $bridge[10]; ?></p>
<p><?php echo $bridge[11]; ?></p>
<p><?php echo $bridge[12]; ?></p>
<p><?php echo $bridge[13]; ?></p>
<p><?php echo $bridge[14]; ?></p>
<p><?php echo $bridge[15]; ?></p>

<p><?php echo $verse3[0]; ?></p>
<p><?php echo $verse3[1]; ?></p>
<p><?php echo $verse3[2]; ?></p>
<p><?php echo $verse3[3]; ?></p>
<p><?php echo $verse3[4]; ?></p>
<p><?php echo $verse3[5]; ?></p>

<p><?php echo $chorus[0]; ?></p>
<p><?php echo $chorus[1]; ?></p>
<p><?php echo $chorus[2]; ?></p>
<p><?php echo $chorus[3]; ?></p>
<p><?php echo $chorus[4]; ?></p>
<p><?php echo $chorus[5]; ?></p>
<p><?php echo $chorus[6]; ?></p>
<p><?php echo $chorus[7]; ?></p>

<p><?php echo $outro[0]; ?></p>
<p><?php echo $outro[1]; ?></p>
<p><?php echo $outro[2]; ?></p>
<p><?php echo $outro[3]; ?></p>
<p><?php echo $outro[4]; ?></p>
<p><?php echo $outro[5]; ?></p>
<p><?php echo $outro[6]; ?></p>
<p><?php echo $outro[7]; ?></p>
<p><?php echo $outro[8]; ?></p>
<p><?php echo $outro[9]; ?></p>
<p><?php echo $outro[10]; ?></p>
<p><?php echo $outro[11]; ?></p>
<p><?php echo $outro[12]; ?></p>
<p><?php echo $outro[13]; ?></p>
<p><?php echo $outro[14]; ?></p>
<p><?php echo $outro[15]; ?></p>


<p><?php echo $chorusCount; ?></p>
<p>Total chorus repeats including bonus: <?php echo $totalChorus ?></p>
<p><?php echo $name ?></p>
<p><?php echo $block ?></p>
<p><?php echo $date ?></p>
 
<p>Total sections in song: <?php echo $sections ?></p>

</body>
</html>


