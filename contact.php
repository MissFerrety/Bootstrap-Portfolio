<?php include_once("assets/header.php"); ?>

<main class="site-main">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-8">
				<article class="site-content">
					<h2 class="page-title -color-highlight -border-tint">Contact Christine</h2>
					<form class="form-contact">
						<div class="form-group">
							<label for="your-name">Name</label>
							<input id="your-name" class="form-control" name="your-name" type="text" placeholder="John Smith" class="-border-tint" />
						</div>
						<div class="form-group">
							<label for="your-email">Email</label>
							<input id="your-email" class="form-control" name="your-email" type="text" placeholder="j.smith@example.com" class="-border-tint" />
						</div>
						<div class="form-group">
							<label for="your-message">Message</label>
							<textarea id="your-message" class="form-control" name="your-message" rows="7" class="-border-tint"></textarea>
						</div>
						<input type="submit" class="-bg-highlight -color-light" />
					</form>
				</article>
			</div>
			<?php include_once("assets/sidebar.php"); ?>
		</div>
	</div>
</main>

<?php include_once("assets/footer.php"); ?>
