<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Common Lisp Quick Reference</title>
    <meta name="author" content="Bert Burgemeister">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="new-pure.css" type="text/css">
  </head>

  <body>

    <table class="main-table">
      <tr>
	<td class="title" colspan="2">
	  <a href="index.php">Common Lisp Quick Reference</a>
	</td>
      </tr>
      <tr>
	<td class="side-content">
	  <ul>
	    <li><a href="index.php">home</a>
	    <li><a href="download.php">download</a>
	    <li><a href="printing.html">printing &amp; bookbinding</a>
	    <li><a href="https://lists.berlios.de/mailman/listinfo/clqr-general">mailing list</a>
	    <li><a href="source.html">source</a>
	    <li><a href="license.html">license</a>
	    <li>
	      <a href="http://developer.berlios.de"
		 title="BerliOS Developer"> 
		<img src="http://developer.berlios.de/bslogo.php?group_id=9765"
		     alt="BerliOS Developer Logo">
	      </a> 
	    <li><a href="https://developer.berlios.de/projects/clqr/">project page</a> 
	  </ul>
	</td>
	<td class="content">
	  <h3>Download</h3>
	  <p>
	    This is revision
	    <?php echo(file_get_contents("release-revision.txt"));?> of
	    <?php echo(file_get_contents("release-date.txt"));?>.
	  <p>
	  <p>
	    If unsure what to download, have a look at <a href="printing.html">printing &amp; bookbinding</a>.

	  <p>&nbsp;
	    <div class="here">
	      <img class="left" src="sample-firstpage-consec.jpg"
		   alt="[Sample]"/> 
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-a4-consec.pdf"
		 title="Half A4 size; not for printing">clqr-a4-consec.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-a4-consec.pdf" 
		 title="Half A4 size; not for printing">clqr-a4-consec.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-letter-consec.pdf"
		 title="Half US letter size; not for printing">clqr-letter-consec.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-letter-consec.pdf"
		 title="Half US letter size; not for printing">clqr-letter-consec.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <ul>
		<li>Pages in their natural order. 
		<li>Suitable only for reading on the screen. Comes
		with bookmarks and hyperlinks.
		<li>Not meant for printing because of the odd
		  paper format and the coloured hyperlinks. 
	      </ul>
	      <p>&nbsp;
	      <p>&nbsp;
	    </div>
	    <div class="here">
	      <img class="left" src="sample-firstpage-all.jpg"
		   alt="[Sample]"/> 
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-a4-booklet-all.pdf"
		 title="A4 size paper, nested folios">clqr-a4-booklet-all.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-a4-booklet-all.pdf"
		 title="A4 size paper, nested folios">clqr-a4-booklet-all.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-letter-booklet-all.pdf"
		 title="US letter size paper, nested folios">clqr-letter-booklet-all.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-letter-booklet-all.pdf"
		 title="US letter size paper, nested folios">clqr-letter-booklet-all.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <ul>
		<li>Suitable for printing, folding lengthwise and nesting the
		  folios.
		<li>With 52 pages total, first sheet has pages 52, 1, 2, 51.
		<li>With 52 pages total, last sheet has pages 28, 25, 26, 27.
	      </ul>
	      <p>&nbsp;
	      <p>&nbsp;
	    </div>
	    <div class="here">
	      <img class="left" src="sample-firstpage-four.jpg"
		   alt="[Sample]"/> 
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-a4-booklet-four.pdf"
		 title="A4 size paper, stacked folios">clqr-a4-booklet-four.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-a4-booklet-four.pdf"
		 title="A4 size paper, stacked folios">clqr-a4-booklet-four.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr-letter-booklet-four.pdf"
		 title="US letter size paper, stacked folios">clqr-letter-booklet-four.pdf</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr-letter-booklet-four.pdf"
		 title="US letter size paper, stacked folios">clqr-letter-booklet-four.pdf</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <ul>
		<li>Suitable for printing, folding lengthwise and stacking up the
		  folios.
		<li>First sheet has pages 4, 1, 2, 3.
		<li>With 52 pages total, last sheet has pages 52, 49, 50, 51.
	      </ul>
	      <p>&nbsp;
	      <p>&nbsp;
	    </div>
	    <div class="here">
	      <img class="left" src="sample-source.jpg"
		   alt="[Sample]"/> 
	      <p>
	      <a href="http://download.berlios.de/clqr/clqr.tar.gz"
	      title="Download source code">clqr.tar.gz</a>&nbsp;&nbsp;(Server A)<br>
	      <a href="http://download2.berlios.de/clqr/clqr.tar.gz"
	      title="Download source code">clqr.tar.gz</a>&nbsp;&nbsp;(Server B)<br>
	      </p>
	      <ul>
		<li>LaTeX source.
		<li>Not of much use unless you want to make some changes.
	      </ul>
	    </div>
	</td>
      </tr>
      <tr>
	<td class="quicklinks" colspan="2">
	  &nbsp;
	</td>
      </tr>
      <tr>
	<td class="footer" colspan="2">
	  &copy; 2008 &nbsp;
	  <a href="mailto:trebb@users.berlios.de?subject=CLQR ">
	    Bert Burgemeister
	  </a>
	</td>
      </tr>
    </table>
  </body>
</html>
