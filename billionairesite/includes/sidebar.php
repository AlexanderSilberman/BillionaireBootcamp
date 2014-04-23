<aside id = "sidebar">
<div id="companyresearch"> 
    <script>
	function searchStock() {
	
		var stockTicker = document.getElementById('stockTicker').value;
		
		if (stockTicker != "") {
			var url = "http://investing.money.msn.com/investments/stock-price?Symbol=" + stockTicker + "&ocid=qbeb";
			var win = window.open(url, '_blank');
			win.focus;
		} else {
			alert('Please enter a stock ticker symbol.')
		}
	
	
	}
	
    </script>
    
    	<p> <h2>Company Research </h2></p>
    <p id="sidebartext"> Search Any Company's Stock Quote!</p>
    	<input type= "text" id="stockTicker" placeholder="e.g. Apple" />
    	<input type="submit" value="Research" onclick="searchStock()" class="submitbutton" />
    
    	<br />
    	
   		</div>
    
    <br style ="clear:both;"/>
    <br />
    <span id="asknatalie">Ask Natalie:</span>
	<div id="twitter"> 
    
    	<a class="twitter-timeline" href="https://twitter.com/NataliePace" data-widget-id="442425881982533632">Tweets by @NataliePace</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        
    </div>  
</aside>
