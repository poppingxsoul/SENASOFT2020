<html>
<head>

<title>onunload test</title>

<script type="text/javascript">

window.onunload = unloadPage;

function unloadPage()
{
 alert("unload event detected!");
}
</script>
</head>

<body>
<p>Reload a new page into the browser<br />
 to fire the unload event for this page.</p>
<p>You can also use the back or forward buttons<br />
 to load a new page and fire this event.</p>
</body>
</html>