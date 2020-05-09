<?php

return [
    'alipay' => [
        'app_id'         => '2016102300744570',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm10am5U1GjaTau01nJRNG7J9Nh9JRU2k22iNMLwhJ8CclOm4RapS2Fz+XFcvefMA+foTVtm48mVZAcp8JKUJNZxs0N4rsnYuahGk2rRoEtlHmIP7pBi4GQvSMAWLfofwsxoU53Xv6S45enGdw+Mib5o3Z7A07JR8aWc+T9gdAyOV9ASPrdHtNufaNbY+shmofJr2wIW40yQlQ4ZqgBA3UAq4oCx5BvofZWdgzYHik+rOeKnYV2EU9jZ9VYiLNXE267uB3nwEg0kX6zXoT9FYcA32d2/KNsTY6gZAJ9NLqi5BshHdLteq/nBO/uqez8nm5E0BEwLqqn3ahFSKnrCNJQIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEAqZB+q01V9cgOxyJ+Iote8kg+lMxNz6qGJz2rBYYxV5prMqnSL0d22BQlStNam47VUEelmLlcbtlM4sMEiNiUqShrA37QmSAS8VYYkG5Dcl39iIljiR+Q3vH58lakAyrG4SC5ZzXU52DvUT7+Gs3qR9jyrfe5aTE6voS5lmDXZpZfKbJeX91NY958mAa/jId/lP76o9MV0mYclOjfpdVGeOl5EkP3h/eXuuYl+D1Zs6559vGw1zEYfzrcB4QQjFo9tFc1Ae5sSJZGjwiAlhND606AiDFnN1LjvcnCEPW8XHv5w9GMQVxPnrq2+s5TzcTstC8Q8YwoTkY+LdLLl5ihfwIDAQABAoIBAQCbkynFPiWaZj2405rrUviAT2yr1W+nE4wWwOwDG4Z2HAYy68EfA/C0fHdi2dyOUVTCXZpAMAHw6osymz+z1xM+yQi2okn91IHMz/OlwKU9b6NI/NVIYJ/pDhcIFBpTlZH3yLCTU77NtBCfeK5oJXnJBfJTT7DcJQEDAH/Oy3eWdOfIJ5L2TYzjo15fKDPZrzi0TTxvvCB8bmb5cX65g+Lnw6uSbNsOjuqffvfHayS//kwIKAzDWxTgRjBDwRgB0Y2MBXlFMaVyxoq7GjCo+kInYB3CgAZBh78176oYJu0mg3NJWho/JyeNkLqfufdp3FxnkisiP3RAhwBkLuC5lx1hAoGBAPzPaiLkhhNM8rN0boCeEi6j/FGLAHF96zCEBcXie2EwYj+VKImjqafwOxrl4plsVW10v2Xk8lSZKhleLx7ez11oJcZMpXK74UwzD7doCMIgTg3fUM2/ua/HLoyf82DaLMKKa7M3fHpCpzW72vpvV2ZU5EiF8CfybG7YLNiAb75JAoGBAKu0MY1t+F2zxcrQccVzOe6FGfz5E7HXOx9k89tyZcWpF9PAoNwV3qRh0U3AB1asGZq2t0Y5GSMQVC3QINwJpl1qyo8CwhIdAA5JHa6Orlqmz/WU+HAcvp9sKLetaNHtixfediN0DIrGVQ04W4hJXxl782ZwE8LY663BXVkJhQGHAoGBAM1kwmlY2ulBYgmUdda/FiyYhH3HffO3BuaizIHqMK1Ufu4DhCzXMBZGIe8HiGN31awY5wukx5Ed40s67vOYuEa+P7ptORoPNMsQzRsIRd1aG7A/l8mhk/4QyGvt4/DzMNxZU4kGcnZuQqVwW0eOQCben52gW+5Ikfo4Xa8EIkUpAoGBAIvXCtBzsualpj5Cu5Yi/RiMYJkORoL9ltI/xvd/2PE9gQFdjeURDq30WKGo9pEZQxUlIGjZ0eYjw1s4ebqbRVopwmTsyyAzbDs2Qy1KWSfNWetZ82hjkMCINzU4zvjCLRk4fiDrv9c6JkTJFIsPrpszvw071GxJfNCbfioovaF7AoGBALlXgBGcShv5F/qOA+WM+xhLWhVAU2mIHrYyEeZnIpjG8cnOE+eb0UJUM1dIe9BoSvDPrDmAiB3nN/EFwYPWzEKnNJgv/Tm9iCajAGQiZ38GRX6GbvSjBv0N2SlY48s09If7gfNqFV2yDXhlGtWkPs8rioqMCbpAd/3RsLp9/dbd',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '', // 公众号 app id
        'mch_id'      => '', // 商户号
        'key'         => '', // 设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'), // 证书
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'), // 证书
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];