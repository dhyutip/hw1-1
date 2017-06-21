$product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	    <main>
	            <h1>Product Discount Calculator</h1>

		            <label>Product Description:</label>
			            <span><?php echo
				    $product_description_escaped; ?></span><br>

				            <label>List Price:</label>
					            <span><?php echo
						    $list_price_formatted;
						    ?></span><br>

						            <label>Standard
							    Discount:</label>
							            <span><?php
								    echo
								    $discount_percent_formatted;
								    ?></span><br>

								            <label>Discount
									    Amount:</label>
									            <span><?php
										    echo
										    $discount_formatted;
										    ?></span><br>

										            <label>Discount
											    Price:</label>
											            <span><?php
												    echo
												    $discount_price_formatted;
												    ?></span><br>
												        </main>
													</body>
													</html>
