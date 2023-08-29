<?php


if (!function_exists('typeFileMime')) {
    function typeFileMime()
    {
        $typeFile = [
            'image/jpeg',
            'image/pjpeg',
            'image/png',
            'image/gif',
            'application/pdf',
            'text/plain',
            'application/msword',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'video/mp4',
            'video/x-msvideo',
            'audio/mpeg',
        ];
        return $typeFile;
    }
}
$mimeTypes = typeFileMime();