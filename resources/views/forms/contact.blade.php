<form class="contactForm" method="POST" action="/contact">
	{{ csrf_field() }}

	<div class="contactForm-inputGroup">
		<label class="contactForm-inputGroup-label" for="name">Name:</label>
		<input class="contactForm-inputGroup-textInput" type="text" name="name" validate>
	</div>

	<div class="contactForm-inputGroup">
		<label class="contactForm-inputGroup-label" for="email">Email:</label>
		<input class="contactForm-inputGroup-emailInput" type="email" name="email" validate>
	</div>

	<div class="contactForm-inputGroup">
		<label class="contactForm-inputGroup-label" for="message">Message:</label>
		<textarea class="contactForm-inputGroup-textareaInput" type="textarea" name="message" validate></textarea>
	</div>

	<button class="contactForm-button button--primary">Send</button>
</form>