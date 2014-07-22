<!doctype html>
<html>
<head>
	<title>AJAX Drag &amp; Drop Multiple File Upload</title>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

	<div id="dd-dropbox">
		<h3>Drag and drop files here</h3>
		<h6>or</h6>
		<button id="dd-fileInputBtn" class="btn">Click here to upload files</button>
	</div>

	<div id="dd-previewer"></div>

<script src="js/DropFileUploader.js"></script>
<script>

	// Create a new DropFileUploader
	var uploader = new DropFileUploader({
		url: 'upload.php',
		allowed: ['image/jpeg', 'image/png'],
		data: { id: 2 },
		limit: 3
	});

</script>
</body>
</html>