<?php
/**
 * Created by PhpStorm.
 * User: LSH
 * Date: 2017-4-12
 * Time: 15:36
 */

namespace Lshorz\Lavatar;
use Identicon\Identicon;
use Lshorz\Lavatar\Contracts\Lavatar;

class AvatarIdenticon extends Identicon implements Lavatar
{
    /**
     * Display an Identicon image
     *
     * @param string  $string
     * @param integer $size
     * @param string  $color
     * @param string  $backgroundColor
     */
    public function displayAvatar(...$param)
    {
        // TODO: Implement displayAvatar() method.
        return $this->displayImage(...$param);
    }


    public function getAvatarBase64(...$param)
    {
        // TODO: Implement getAvatarBase64() method.
        return $this->getImageDataUri(...$param);
    }

    public function getAvatarData(...$param)
    {
        return $this->getImageData(...$param);
    }

    public function getAvatarResource(...$param)
    {
        // TODO: Implement getAvatarResource() method.
        return $this->getImageResource(...$param);
    }

    /**
     * Display an Identicon image
     *
     * @param string  $string
     * @param integer $size
     * @param string  $color
     * @param string  $backgroundColor
     */
    public function displayImage($string, $size = 120, $color = null, $backgroundColor = 'FFFFFF')
    {
        $imageData = $this->getImageData($string, $size, $color, $backgroundColor);
        return \Response::make($imageData, 200, ['Content-Type' => 'image/png']);
    }
}