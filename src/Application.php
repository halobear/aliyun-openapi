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
     * @param        $product
     * @param        $domain
     * @param string $region
     * @param string $endPointName
     *
     * @return DefaultAcsClient
     */
    public static function getAcsClient($accessKeyId, $accessKeySecret, $product, $domain, $region = 'cn-hangzhou', $endPointName = "cn-hangzhou")
    {
        // 初始化阿里云config
        AliyunConfig::load();

        //产品名称:云通信短信服务API产品,开发者无需替换
        // $product = "Dysmsapi";

        //产品域名,开发者无需替换
        // $domain = "dysmsapi.aliyuncs.com";

        if (static::$acsClient == null) {

            //初始化acsClient,暂不支持region化
            $profile = DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);

            // 增加服务结点
            DefaultProfile::addEndpoint($endPointName, $region, $product, $domain);

            // 初始化AcsClient用于发起请求
            static::$acsClient = new DefaultAcsClient($profile);
        }

        return static::$acsClient;
    }
}