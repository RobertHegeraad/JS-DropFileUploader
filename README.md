HTML5 Multiple File Drag and Drop Upload
=====

# Demo

[http://codepen.io/RobertHegeraad/pen/wtlHF]

#### The HTML

The only HTML element you need for the uploader to work is an element with the ID `#dd-dropbox` (dd stands for DragDrop). You can just drag files from the file dialog box into the dropbox and the files will be uploaded

If the `#dd-fileInputBtn` button exist, a hidden `input[type=file]` element is created and placed before the `#dd-dropbox`. So when the button is clicked the `input[type=file]` element is clicked and the file dialog box will open.

If the `#dd-previews` div exists the files you want to upload will first be show as a preview. When the preview is shown it has a class of `.dd-upload-pending`. When the file is uploaded the `.dd-upload-pending` class will be removed and a `.dd-upload-success` class will be added. Likewise a `dd-upload-error` class will be added if the upload has failed.

```html
<div id="dd-dropbox">
	<h3>Drag and drop files here</h3>
	<h6>or</h6>
	<button id="dd-fileInputBtn" class="btn">Click here to upload files</button> <!-- Optional -->
</div>

<div id="dd-previewer"></div> <!-- Optional -->
```

#### Instantiate Object

```js
// Create a new DropFileUploader
var uploader = new DropFileUploader({
	url: 'upload.php',
	allowed: ['image/jpeg', 'image/png'],
	data: { id: 1 },
});
```

#### All options

```js
config: {
	url: 'upload.php',							// The URL to send the files to
	method: 'post',								// The request method to use (GET/POST/PUT/DELETE)
	limit: 3,									// The limit of files that can be send at once
	allowed: ['image/jpeg', 'image/png'],		// The allowed file type, files are checked on MIME-type
	data: { },									// Additional data to send to the server
	
	onStart: function() {						// Callback function on start of the upload
	
	},
	onProgress: function() {					// Callback function on progress of the upload
	
	},
	onComplete: function(data) {				// Callback function on completion of the upload
		console.log(data);
	
	},
	onError: function() {						// Callback function on error of the upload
	
	}
}
```