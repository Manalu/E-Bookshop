<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-xs-12" id="book-detail">
			<div id="table-header">Book Detail</div><br>
			<div class="row">
			<div class="col-sm-4" id="book-img"><?php print '<img src = "'.strip_tags($book_detail->book_image).'" alt = "">';?></div>
			<div class="col-sm-8">
				<div class="book-info">
				<div>Book Name: <?= strip_tags($book_detail->book_name)?></div>
				<div>Author: <?= strip_tags($book_detail->author)?></div>
				<div>Publisher: <?= strip_tags($book_detail->publisher)?></div>
				<div>Category: <?= strip_tags($book_detail->category)?></div>
				<div>Price: <?= strip_tags($book_detail->price)?>.TK</div>
				</div>
			</div>
			</div>

			<br><div class="book-description"><h5>Book description</h5><hr><?= $book_detail->description ?></div>
			<hr>
		  <div><h5>Action</h5></div>
	      <?php print '<td>';
	        print '<a href= "'.base_url().'admin/book_edit/'.$book_detail->id.'" title= "Edit" class="btn btn-success btn-sm"> <i class= "fas fa-wrench"></i></a>&nbsp';
	        print '<a href= "'.base_url().'admin/book_delete/'.$book_detail->id.'" title= "Delete" class="btn btn-danger btn-sm"> <i class= "fas fa-trash"></i></a>&nbsp';

	        print '</td>'; 
	      ?>
		</div>
		<div class="col-sm-4">
			
		</div>
	</div>
</div>