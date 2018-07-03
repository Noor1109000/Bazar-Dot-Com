<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<p>Copyright - Designed by {Name}</a></p>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</footer>

</div>
<script type="text/javascript" src="css/jquery.1.8.3.min.js"></script>
	<script type="text/javascript">  

	// JQuery Code for increase & decrease Cart Product count  ///
	
  
$('.cart').click(function() {
  var num = parseInt($('.display').text());
  if( num<=0) {
  var num=0;
  }
    if($(this).prop("checked") == true){
                $('.display').text(num+1);
            }
            else if($(this).prop("checked") == false){
                $('.display').text(num-1);
            }
});

	</script>
</body>
</html>