<?php

return [
    'alipay' => [
        'app_id'         => '2016103000778800',  // 支付宝没箱看到的 appid
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzFySN1aaEob5HPRvqPA5hqMoAqI/s0pW++5IJOxz+7DBosjI5qzSJisAj4PBmvST7GY6jnIUYx6ifEYTqTGipiXU0WW3LHkzjgFWYoxo2dlUlfWK+YU1+SKAwftmHaP6fxj4ddf2nGwIs7fpQffKe2XdTjfYoNZ3dfukP6bGEZZtwz96pY9AAA6AY51vpuINL0RgbZJMHjTcZkBBdnQEOW8Q+3v3Bxx7HAMcPXTJN/R0eyepZNkgg69nLXc+TY7N3fD/YQC8SkpPNgaeaa3bucS1Lh+NvTLEmvI6iMv+DJ7mBjE3ABYu0awvbDc5SHZ9QsEI6M6qr1NLo8Pp+Q2C6wIDAQAB', // 支付宝沙箱显示的公钥
        'private_key'    => 'MIIEpQIBAAKCAQEAqDrJoIxhp2Bmdxe8K7VqKfnhq57Rud7NAzzI0rsjBNBEss0TYDWsA4jsGZI7yOyJcl9FKtHp9JxFod+Q6bLOhs6ewBrZfJ2Mvz7kf5zrMcrxqcOicY0DalyVu/Hq/PV10d9Gh4lBIJ9ORi+6dSwVSw9yr+U32uMy3d4LwtTHueSbqBZ6PNLUi2l8BAThy06EGs25vacYRZGdOvZY8/ufSfrR6R/Atz8dIqZhmR7ANQPcNJrqUUYpvqEZh78SRe7bWnJOEa5T7hOI+WdcnhomLYXlrvVdz8fZfSIDbZ/Po09L5KPmXcPuPxu5RzmT0l5TqyK4NNLNrjP3OuNOagWE/QIDAQABAoIBACOKuAp5XjBUh5FlrFW3sERKDMmLdlfEoJ+seek7rDxaHAmCljNfY4YjqW4FnSfoAWnugth3HOyXD4cRirY1FrkYciW4Bnbzekb1bKUha/dLHx90u58t4ajZArGAfNsQqOG8QFRmRSI1Rf5CGyyiMaV4EAzlapWOJrMFNIrnFYNKVmpFd241Oel76xRJOf/j51lAZNXkLol6czNdUXjg0RSScbx2+uPpXoJRuvvIWXA7vsQFWUdJPntvEzpLLPg08MJBnGXQ9jYxnLOKcU59gVgjK3DKu2ASSfKCmVEqCmyYSiyf5dM5KlXJVPDOQI/AZHcHk2bC7sqJgWmxJIEmvOkCgYEA8tfwNcr3wGtjbpQM9waHrO4IE+2mpSQCstRvSLz3XU4vTKnm3T3rKf4obEV9XRVLnSIyVgfIwFiFgvBBpeof2pRs4AMoDe1DdyBgoBl41m4wJ03xsdC+G57RFZb9KoReo0NbCb7TMSsnL/TBGQeZB4bqrLPwNT3J6TTalfnMUFcCgYEAsVgCcOYHc0HAOi1ddDIo9S4IuXrJAvIPXYRcAViWZXT7N3cLyX+u8gCCAHdTou/+95ju3Ckywc0ZpzTmDFZyzG1grhOaNETuCt/iE0nkzL2DdN314DtIH5+9KttX63EOMKfnAlrYYMy9y5WjT+W1zLA3tEQDSt5hxch0ghyqsMsCgYEAyBvQwUMDbPgQ82nkVRp4arOqzGEk1SgbYSlUmme8npJyv4Wxy9XeFrhsruuEJlQJ/u3S9LltX7KSMhewwPtwTDnKjb2MIA3Hbj6r4MGcpXYfEARWieQtA62XNWc6LvLs2TQDrMAmX3njzMyu4eU04NL4Rl/wLK9B1n3LMZKqHfkCgYEAi21bNfHT56zI+bRS5hjNlL2lhFXhlZxDsk1unGxOieOn4pqIvNnS7Faz3rPyIIc5WOZ23MbTLgUXZxsyxn5s8QYJXbLxqKiM0iXksy+EX+ebY5ViSvGwqZRIAFrEy8lt05keCP7tYWV2zomOBTHfddcRZHuYbxNZoUsRNn5dQHMCgYEAqYf/l6K8xuGSfHq2OJ96qVw6muHvwAfolIgS4y8DQIAk9uig9HM5n2UqtikIlqXB6iyK4u4iNmZsmLDDDgvkjr/QYTu8SfwBTwQrzYQIrFynOBMTS/BcZXoTAZfxX9/u9XvtbE5NIUaWyuaVF2EFlPPYAF7AbYXxfjMYV2ksAaI=', // 刚风生成的私钥
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
