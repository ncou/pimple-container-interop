{
	"name" : "xtreamwayz/pimple-container-interop",
	"description" : "This project is a very simple extension to the Pimple microframework. It adds to Pimple 3 compatibility with the container-interop APIs.",
	"authors" : [{
			"name" : "Geert Eltink",
			"homepage" : "https://xtreamwayz.com/"
		}
	],
	"keywords" : [
		"dependency injection",
		"DI",
		"Pimple",
		"container-interop"
	],
	"license" : "MIT",
	"require" : {
		"container-interop/container-interop" : "^1.0",
		"pimple/pimple" : "^3.0"
	},
	"require-dev" : {
		"phpunit/phpunit" : "^5.0",
		"squizlabs/php_codesniffer": "^2.3"
	},
	"autoload" : {
		"psr-4" : {
			"Interop\\Container\\Pimple\\" : "src/"
		}
	},
	"autoload-dev": {
		"psr-4": {
			"Interop\\Container\\PimpleTests\\" : "tests/"
		}
	},
	"scripts": {
		"check": [
			"@cs",
			"@test"
		],
		"cs": "php vendor/squizlabs/php_codesniffer/scripts/phpcs",
		"test": "php vendor/phpunit/phpunit/phpunit"
	}
}
