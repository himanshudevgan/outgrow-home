<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>@yield('title')</title>
	<script src="//load.sumome.com" data-sumo-site-id="6457b100d7b4ff00ff47fd0006ddf0008d0bde00f6d5b0001f2f500036f1b000"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	@yield('metaDescription')

	<link rel="canonical" href="http://outgrow.co/" />
	<link href='https://www.filepicker.io/api/file/Ay8X8PhXTdaClFdhsLeR' rel='shortcut icon'>

	@yield('css')

	@include('_partials.headscripts')

	@yield('inlinescripts')
</head>

<body class="@yield('pageClass')" id="@yield('pageId')">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDL5P5M"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


	@yield('content')

	<script>
		@yield('pageScripts')

		var loadedLibs = {}
		var counter = 0
		var loadAsync = function(lib) {
			var http = new XMLHttpRequest()
			http.open("GET", libs[lib], true)
			http.onload = function () {
				loadedLibs[lib] = http.responseText
				if (++counter == Object.keys(libs).length) startScripts()
			}
			http.send()
		}
		var startScripts = function() {
			for (var lib in libs) eval(loadedLibs[lib])
		}
		for (var lib in libs) loadAsync(lib)
	</script>
</body>
</html>
