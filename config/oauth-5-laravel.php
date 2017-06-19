<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => '\\OAuth\\Common\\Storage\\Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '314450455672870',
			'client_secret' => 'ada12f6cf09b173d01fa2de749d66807',
			'scope'         => [],
		],

        'Google' => [
            'client_id'     => 'Your Google client ID',
            'client_secret' => 'Your Google Client Secret',
            'scope'         => ['userinfo_email', 'userinfo_profile'],
        ],

	]

];