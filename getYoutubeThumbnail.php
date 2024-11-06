<?php
function getYouTubeThumbnail($url) {
    // Regular expression to match YouTube video ID
    preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $url, $matches);
    
    // Check if a video ID was found
    if (!empty($matches[1])) {
        $videoId = $matches[1];
        return "https://img.youtube.com/vi/{$videoId}/0.jpg";
    } else {
        return "Invalid YouTube URL";
    }
}

// Testing the function
$youtubeUrl = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"; // Replace with any YouTube URL
echo getYouTubeThumbnail($youtubeUrl);
?>
