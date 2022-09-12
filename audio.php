<?php

    if(isset($_GET['text']) && $_GET['tkn']=="0x39075829057823769567243697826971657864378")
    {
        $text = $_GET['text'];
        // Yes French is a beautiful language.
        $lang = "en";
    
        // MP3 filename generated using MD5 hash
        // Added things to prevent bug if you want same sentence in two different languages
        $file = md5($lang."?".urlencode($text));
    
        // Save MP3 file in folder with .mp3 extension 
        $file = "audio/" . $file . ".mp3";
    
    
        // Check folder exists, if not create it, else verify CHMOD
        if (!is_dir("audio/"))
            mkdir("audio/");
        else
            if (substr(sprintf('%o', fileperms('audio/')), -4) != "0777")
                chmod("audio/", 0777);
    
    
        // If MP3 file exists do not create new request
        if (!file_exists($file))
        {
            // Download content
            $mp3 = file_get_contents(
            'https://translate.google.com/translate_tts?ie=UTF-8&q='. urlencode($text) .'&tl='. $lang .'&total=1&idx=0&textlen=5&prev=input&client=tw-ob');
            file_put_contents($file, $mp3);
        }
    
        file_put_contents('combined.mp3',
        file_get_contents('https://translate.google.com.vn/translate_tts?ie=UTF-8&client=tw-ob&q='.urlencode($text).'&tl=en&ie=UTF-8&tl=en-US&total=1&idx=0&textlen=5&prev=input'));
    
        echo "https://nano-softs.com/iParhai/audioCheck/combined.mp3";
    }
?>
