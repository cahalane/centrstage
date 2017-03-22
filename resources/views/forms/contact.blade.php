<form class="form" id="contact" method="POST" action="/contact">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Name</label>
		<p class="control">
			<input class="input" type="text" name="name" placeholder="Your Name" required>
		</p>
	</div>

	<div class="field">
		<label class="label">Email</label>
		<p class="control">
			<input class="input" type="text" name="email" placeholder="your@email.com" required>
		</p>
	</div>

	<div class="field">
		<label class="label">Message</label>
		<p class="control">
			<textarea class="textarea" name="message" placeholder="Say hello!"></textarea>
		</p>
	</div>

	<div class="field">
		<p class="control">
			<button class="button is-primary" type="submit">Send</button>
		</p>
	</div>
	
</form>