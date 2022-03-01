<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Name" class="black-border">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="black-border">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="black-border">
    <br>
    <select class="black-border">
        <option value="">What is the reason for the contact?</option>
        <option value="1">Doubt</option>
        <option value="2">Praise</option>
        <option value="3">Complaint</option>
    </select>
    <br>
    <textarea name="message" class="black-border">Fill here your message</textarea>
    <br>
    <button type="submit" class="black-border">SUBMIT</button>
</form>