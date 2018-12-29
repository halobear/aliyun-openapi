<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2017/12/21
 * Time: 21:04
 */

namespace AliyunOpenApi;

use AliyunOpenApi\Core\Config as AliyunConfig;
use AliyunOpenApi\Core\DefaultAcsClient;
use AliyunOpenApi\Core\Profile\DefaultProfile;


class Application
{
    static $acsClient = null;

    /**
     * 取得AcsClient
     *
     * @param        $accessKeyId
     * @param        $accessKeySecret
     * @param string $product 产品名称
     * @param string $domain  产品域名
     * @param string $region
     * @param string $endPointName
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClient($accessKeyId, $accessKeySecret, $product = '', $domain = '', $region = 'cn-hangzhou', $endPointName = "cn-hangzhou")
    {
        // 初始化阿里云config
        AliyunConfig::load();

        if (static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            // 增加服务结点
            if ($product && $domain) {
                DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);
            }

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }

        return static::$acsClient;
    }

    /**
     * 取得AcsClient
     *
     * @param        $token
     * @param string $product 产品名称
     * @param string $domain  产品域名
     * @param string $region
     * @param string $endPointName
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClientByOAuth($token, $product = '', $domain = '', $region = 'cn-hangzhou', $endPointName = "cn-hangzhou")
    {
        // 初始化阿里云config
        AliyunConfig::load();

        if (static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getBearerTokenProfile($region, $token);

            // 增加服务结点
            if ($product && $domain) {
                DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);
            }

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }

        return static::$acsClient;
    }
}