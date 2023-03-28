<h1>Feedback Form</h1>
<form method="GET" action="thankyou.php">
Complete Name: <input type="text" name="complete_name" /><br />
Email Address: <input type="email" name="email" /><br />
Type:
<select name="type">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Other</option>
</select>
<br />
Level of Satisfaction: <input type="range" name="satisfaction_level" min="1" max="10" step="1" /><br />
Feedback Message: <br /> 
<textarea name="message" rows="5" cols="40"></textarea> <br />
<button>Submit</button>
</form>