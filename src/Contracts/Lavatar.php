<?php
namespace Lshorz\Lavatar\Contracts;

interface Lavatar
{
    /**
     * 输入头像图片(包含http头)
     */
    public function displayAvatar(...$param);

    /**
     * 获取头像图二进制代码
     */
    public function getAvatarData(...$param);

    /**
     * 获取头像图片的Base64编码
     */
    public function getAvatarBase64(...$param);

    /**
     * 获取头像图像源
     */
    public function getAvatarResource(...$param);
}