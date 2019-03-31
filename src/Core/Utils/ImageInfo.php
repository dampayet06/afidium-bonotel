<?php

namespace Core\Utils;

/**
 * Class ImageInfo
 * @package Core\Utils
 */
class ImageInfo
{

    /**
     * @param $imageUrl
     * @return array
     */
    public static function getImageInfoFromUrl($imageUrl) {

        $imageContent = file_get_contents($imageUrl);

        $uniq = uniqid('tmp_image');
        $img  = fopen(APP_PATH.'/tmp/'.$uniq, 'w+');

        fwrite($img, $imageContent);
        fclose($img);

        $byte  = filesize(APP_PATH.'/tmp/'.$uniq);
        $sizes = getimagesize(APP_PATH.'/tmp/'.$uniq);

        unlink(APP_PATH.'/tmp/'.$uniq);

        return [
            'byte'   => (int) $byte,
            'width'  => $sizes[0] ?? 0,
            'height' => $sizes[1] ?? 0
        ];
    }

}