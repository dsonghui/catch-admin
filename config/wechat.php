<?php

return [
        /**
         * 公众号配置
         *
         */
        'official_account' => [
            /**
             * 账号基本信息，请从微信公众平台/开放平台获取
             */
            'app_id'        => env('wechat.official_app_id'),         // AppID
            'secret'        => env('wechat.official_secret'),     // AppSecret
            'token'         => env('wechat.official_token'),          // Token
            'aes_key'       => env('wechat.official_aes_key'),                    // EncodingAESKey，兼容与安全模式下请一定要填写！！！

            'response_type' => 'array',

            /**
             * OAuth 配置
             *
             * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
             * callback：OAuth授权完成后的回调页地址
             */
            'oauth'         => [
                'scopes'   => ['snsapi_userinfo'],
                'callback' => '/examples/oauth_callback.php',
            ],
        ],

        /**
         * 小程序
         */
         'mini_program' => [
           // 更多配置查看 https://www.easywechat.com/docs/master/mini-program/index
         ],
         
        /**
         * 开放平台
         */
         'open_platform' => [
           // 更多配置查看 https://www.easywechat.com/docs/master/open-platform/index
         ],
         
        /**
         * 企业微信
         */
         'work' => [
           // 更多配置查看 https://www.easywechat.com/docs/master/wework/index
         ],
         
        /**
         * 企业微信开放平台
         */
         'open_work' => [
           // 配置 https://www.easywechat.com/docs/master/open-work/index
         ],
         
         /**
         * 小微商户
         */
         'micro_merchant' => [
           // 配置 https://www.easywechat.com/docs/master/micro-merchant/index
         ],
         
        /**
         * wechat pay
         */
        'payment' => [
            'app_id'    => 'xxxx',
            'mch_id'    => 'your-mch-id',
            'key'       => 'key-for-signature',   // API 密钥

            // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径(登录商户平台下载 API 证书)
            'cert_path' => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
            'key_path'  => 'path/to/your/key',      // XXX: 绝对路径！！！！

            'notify_url' => '默认的订单回调地址',     // 你也可以在下单时单独设置来想覆盖它
        ],

        // 更多配置请查看 https://www.easywechat.com/docs
];