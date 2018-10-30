<?php

return [
    'alipay' => [
        'app_id'         => '2016092200569563',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvoWegfalfrcRrjYOiJdX//4yNxXhB2JFI4Y2a8ew+jGFQHnp6cnb5Gnso6YsZ2emhYoPxlfS7z1qpCneYWrG98eyZu65iAesEkbXPSjmMF1Xy0ncEjqoKAsrVotMKxYfjqoGBc6GPXSpVfU09qOctYapR9FOULA8yfvn/THEXFbJ7cIS990tG0mqXcDSapfWzI5OSRGcv5dNrSFiFWy5lRxeFb6JiksXfRJtTPSJm1bIA8We9PKxXywQr5c8LLKXqkpNnmn62uvkSTPlGf24z47myqgBcjhNTCYdhI0IUSDO87MyXMrbs7P1YlBtrLXT+lpVeP7QvEFExhmArd6dAQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAv3NiH+4uXM8DrniuaZufqJ4rvBqKCNnNsi72Gd8FUZTZeNpGkSp1UP0w4eEQeyLlFGOvfS5ihoAjkgNLdEC9yXs7f6kOcqchOJoaU8gb4fVawLBSbcBfj0Tb6jIbz4yEDfftTJ7hHiE073mvgfFF8b/eleRM4CclCO3mkxj05NKMDO4iBfHM2Yre2ju06dCv7c3fraPhxBfwvI+e8dhHUX4ygA+uHQEMVfCBq/PNSkJJbtv6olAH0zRVS38uBX8B43WSq6jumZvwMTg5HrIRb3CqyvhAt2xwY9PigQmDYrPH+0+X9nYWBWIsroi9tRfBv6umYbEC3XNz0TInlKJDjQIDAQABAoIBAE86/xbbyVAbVBi2VOfbwb1UiCD2kr2K9beR+8NFKrxSb5W2L5IQEjEMN1ijfeCX1loTzyJtOdUT3qSkvGtGB8UEPOFeI16LkBIOpGqb2/4tPfuUfOhyvplaE/Dd/+hq7JOjUQ9uiRehAnlA0MNkCGA92W4K5020pX0Gh2/E2kR/rruSivOMUoBZ6Be4TLlE0vLaYQPZGswgSWL6ooSXYIBpQ1NKO17YVpqluzl5LbEgW5YUCHgfBff3QhF2nHgtir/fwXUdgT7SBhwgfogdBWXTfZ0O7hJTOUgkBQXireUk5cg9dZXGuH4/iNuLN4tX/7OmdHRfamodhTqEnpTtw3kCgYEA3tZh+8A6T/D+YaLbx7XNrGOUTZpHMDiK+nSPMr+2VA4j08atOPJPb6zahkMjtCsJxSM7VGigrRZ37tUNRxqFoEj08D4LLJqUeJJ+0JtuBO8v9tu4oPLL1vKi4Si++y10R5uHJUAsSxHdrC3K8wpXDOChFfMa7zrRnFT3tJgQ9lMCgYEA2/E8SsMSQFLYVdwioGm0QRC3OLm61JIIyQUBLrf1Fit+bciHVqGlC2zhv7Ag/y5hCldy0/u7t+1L7ULiNLSMu0cnH3cyb1PtzcHjPCT+tz3QWSpjGnrcLlYW9kO8dflN0iQ2Vi0eyXNlBcAJmBaklntFdiV+PuNwmJp4xdhM4p8CgYA9eMh46XNsoB+ckY+tjRKazrGXosqmm8KDCuqB5m8GywvJHRKmFfoh5X428YiE6CZ+0pRIWcCRXxRgtzc9eSyJpfaj24m7mT0B8e+33ljAVbdWkxBgnfnrZu3VzSa6JbThGB91ADn3z4rmN4+38g9HhyQI6RJyEjjGto3KrPRo7wKBgQCEB0sHIhSZsmGVIQFURD/lcxBZp/yEUGmfqjZsghdIyLErW94KXhyCQEk/1Y3pQUEVgSs4H3wvS+5xLd42f0+fuHW+yMHo3Hv7MPGkkByriRrB+9Tj926nDhzYlg7SzuYtSHmpv4okqfWxvvbDaoxAnR00cAtZ2xQjN09ajJ6SxwKBgQCb8L222U+EpbQagIcxbeXcV7rfo8ScT6gqMGY2rpFVNPN6Oh/uSc/g8c1NLDp1QXXFEIQ3T0421qTV+M9E5/56JFEDj96XazkyhOWdLTmJUaioHZNxKD1MY0xED+aRka+RmleMFJB5PP2yTGLyPST0lLl3aGCFr5qXEdfyg+uaAQ==',
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
