<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" value="{{ old('nome') }}" type="text" placeholder="Name" class="black-border">
    <br>
    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" class="black-border">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="black-border">
    <br>
    <select name="contact_reason" class="black-border">
        <option value="">What is the reason for the contact?</option>
        
        @foreach($contact_reasons as $key => $contact_reason)
            <option value="{{$contact_reason->id}}" {{ old('contact_reason') == $contact_reason->id ? 'selected' : '' }}>{{$contact_reason->contact_reason}}</option>
        @endforeach

    </select>
    <br>
    <textarea name="message" class="black-border">{{ (old('message') != '') ? old('message') : 'Fill your message here...' }} </textarea>
    <br>
    <button type="submit" class="black-border">SUBMIT</button>
</form>

<div style="position: absolute; top:0px; left:0px; width:100%; background:red;">
    <pre>
        {{print_r($errors)}}
    </pre>
</div>