<?php
domain::add('awakentolife', __DIR__, true, new domain([
		'folder' => 'awakentolife/',
		'heading' => 'JE',
		'local' => 'http://localhost/joyfulearth/%subfol%/%site%/',
		'live' => 'https://%site%.joyfulearth.org/',
		'local-base' => 'http://localhost/joyfulearth/%subfol%/',
		'live-base' => 'https://%subfol%.joyfulearth.org/',
	],
	['%folder%www', '%folder%initiatives/wisdom'],
));
