<?php
	/*
		PHP with AJAX Control by jhlassen17
	*/

	//Set the caching elements just in case
	header("Expires: 0");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("cache-control: no-store, no-cache, must-revalidate");
	header("Pragma: no-cache");
	header("Content-type:text/plain");

	/*
		This function makes it easier to send the HTTP GET request
	*/
	function curl_get_file_contents($URL)
	    {
	        $c = curl_init();
	        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($c, CURLOPT_URL, $URL);
	        $contents = curl_exec($c);
	        curl_close($c);
	
	        if ($contents) return $contents;
	            else return FALSE;
	    }

		/*
			This is where the request will be sent
			Change "localhost" to the IP or DynDNS name of the computer with SongBird
		*/
		$filename = "http://localhost:50136/ctl/" . $_GET["ctlEvent"];
		
		/*
			This does all the hard work and outputs the result
		*/
		$contents = curl_get_file_contents( $filename );
		echo $contents;
	?>
